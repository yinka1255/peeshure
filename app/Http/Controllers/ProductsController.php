<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;

use Session;
use Redirect;
use Response;
use App\User;
use App\Admin;
use App\Product;
use App\Category;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;
use Intervention\Image\ImageManagerStatic as Image;

class ProductsController extends Controller{

    public function products(){
        $user = Auth::user();
        if($user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return back();
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        $products = Product::join("categories", "categories.id", "=", "products.category_id")
        ->select("products.*", "categories.name as category_name")->get();
        $categories = Category::all();
        return view('admin/products')->with(["loggedInUser"=>$loggedInUser, "products"=>$products, "categories"=>$categories]);
    }  

    public function allProducts(){
        
        $products = Product::join("categories", "categories.id", "=", "products.category_id")
        ->select("products.*", "categories.name as category_name")->paginate(100);
        $categories = Category::all();
        return view('products')->with(["products"=>$products, "categories"=>$categories]);
    }  

    public function productDetails($product_id){
        
        $product = Product::where("products.id", $product_id)->first();
        $similar_products = Product::where("category_id", $product->category_id)
                            ->where("id", "!=", $product->id)
                            ->take(30)->get();
        return view('details')->with(["product"=>$product, "similar_products"=>$similar_products]);
    }  

    public function searchedProducts(Request $request){
        $keyword = $request->input('keyword');
        $products = Product::where(function ($query) use($keyword) {
            $query->where('name', 'like', '%' . $keyword . '%')
               ->orWhere('tags', 'like', '%' . $keyword . '%');
            })->get();
        $categories = Category::all();
        return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
    }

    public function getProducts(){
        $type = Input::get('type');
        $category = Input::get('category');
        $orientation = Input::get('orientation');
        if($type != null && $category != null && $orientation != null){
            $products = Product::where(function ($query) use($type, $category, $orientation) {
                $query->where('type', 'like', '%' . $type . '%')
                ->orWhere('category_id', 'like', '%' . $category . '%')
                ->orWhere('orientation', 'like', '%' . $orientation . '%');
                })->paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }elseif($type != null && $category != null && $orientation == null){
            $products = Product::where(function ($query) use($type, $category, $orientation) {
                $query->where('type', 'like', '%' . $type . '%')
                ->orWhere('category_id', 'like', '%' . $category . '%');
                })->paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }elseif($type != null && $category == null && $orientation != null){
            $products = Product::where(function ($query) use($type, $category, $orientation) {
                $query->where('type', 'like', '%' . $type . '%')
                ->orWhere('orientation', 'like', '%' . $orientation . '%');
                })->paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }elseif($type == null && $category != null && $orientation != null){
            $products = Product::where(function ($query) use($type, $category, $orientation) {
                $query->where('category_id', 'like', '%' . $category . '%')
                ->orWhere('orientation', 'like', '%' . $orientation . '%');
                })->paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }elseif($type == null && $category == null && $orientation != null){
            $products = Product::where(function ($query) use($type, $category, $orientation) {
                $query->where('orientation', 'like', '%' . $orientation . '%');
                })->paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }elseif($type == null && $category != null && $orientation == null){
            $products = Product::where(function ($query) use($type, $category, $orientation) {
                $query->where('category_id', 'like', '%' . $category . '%');
                })->paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }elseif($type != null && $category == null && $orientation == null){
            $products = Product::where(function ($query) use($type, $category, $orientation) {
                $query->where('type', 'like', '%' . $type . '%');
                })->paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }elseif($type == null && $category == null && $orientation == null){
            $products = Product::paginate(100);
            $categories = Category::all();
            return view('searched_products')->with(["products"=>$products, "categories"=>$categories]);
        }
        
    }

    public function newProduct(Request $request){
        $product = new Product;
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->type = $request->input('type');
        $product->tags = $request->input('tags');
        $product->orientation = $request->input('orientation');

        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path()."/images/products/";
            $image->move($path, $imageName);
            $product->image = $imageName;
            list($width, $height) = getimagesize($path.$imageName);
            $product->width = $width;
            $product->height = $height;
        }

        if($product->save()){
            Session::flash('success', 'Thank you! New product has been created');
            return back();
        }else{
            Session::flash('error', 'Sorry! A server error occured... Kindly report this error to the admin.. Thank you');
            return back();
        }
    }

    public function editProduct(Request $request){
        $product = Product::where("id", $request->input('id'))->first();
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->type = $request->input('type');
        $product->tags = $request->input('tags');
        $product->orientation = $request->input('orientation');


        if($request->hasFile('image')){
            $image = $request->file('image');
            $imageName  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path()."/images/products/";
            $image->move($path, $imageName);
            $product->image = $imageName;
        }
        if($product->save()){
            Session::flash('success', 'Thank you! New product has been created');
            return back();
        }else{
            Session::flash('error', 'Sorry! A server error occured... Kindly report this error to the admin.. Thank you');
            return back();
        }
    }

    public function download(Request $request){
        $product = Product::where("id", $request->input('id'))->first();
        $size = $request->input('size');
        $image_name = $product->image;


        $image_resize = Image::make(public_path()."/images/products/".$image_name);  
        if($size == 100){            
        $image_resize = $image_resize;
        $image_resize->save(public_path('images/resizedImages/' .$image_name));
        return Response::download(public_path('images/resizedImages/' .$image_name));
        }elseif($size == 75){
            $new_width = $product->width * 0.75;
            $new_height = $product->height * 0.75;
            $image_resize->resize($new_width, $new_height);
            $image_resize->save(public_path('images/resizedImages/' .$image_name));
            return Response::download(public_path('images/resizedImages/' .$image_name));
        }elseif($size == 50){
            $new_width = $product->width * 0.5;
            $new_height = $product->height * 0.5;
            $image_resize->resize($new_width, $new_height);
            $image_resize->save(public_path('images/ServiceImages/' .$image_name));
            return Response::download(public_path('images/resizedImages/' .$image_name));
        }
        

    }
}
