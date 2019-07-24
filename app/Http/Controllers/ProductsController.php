<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Admin;
use App\Product;
use App\Category;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

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
        ->select("products.*", "categories.name as category_name")->get();
        $categories = Category::all();
        return view('products')->with(["products"=>$products, "categories"=>$categories]);
    }  

    public function newProduct(Request $request){
        $product = new Product;
        $product->name = $request->input('name');
        $product->category_id = $request->input('category_id');
        $product->type = $request->input('type');
        $product->tags = $request->input('tags');

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
}
