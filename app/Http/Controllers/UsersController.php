<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Product;
use App\Client;
use App\Category;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class UsersController extends Controller{

    public function index(){
        $categories = Category::orderBy("name", "ASC")->get();
        $products = Product::orderBy('id', 'desc')->take(50)->get();
        return view('index')->with(["categories"=>$categories, "products"=>$products,]);
    }

    public function about(){
        return view('about');
    }
    
    public function services(){
        return view('services');
    }

    public function contact(){
        return view('contact');
    }

    public function logout(){
    	Auth::logout();
        return redirect('/');
    }

    public function register(Request $request){
    	$email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');
        $phone = $request->input('phone');
        
        $user = new User;
        $user->email = $email;
        $user->type = 3;
        $user->password = bcrypt($password);
        if($user->save()){
            $client = new Client;
            $client->name = $name;
            $client->phone = $phone;
            $client->email = $email;
            $client->user_id = $user->id;
            $client->save();
            Auth::loginUsingId($user->id);
            Session::flash('success', 'Your account has been created successfully...');
            return redirect('products');
        }else{
            Session::flash('error', 'Sorry! An error occured...');
            return back();
        }




    }
    
    
}
