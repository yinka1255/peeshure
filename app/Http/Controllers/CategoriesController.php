<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Admin;
use App\Category;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class CategoriesController extends Controller{

    public function categories(){
        $user = Auth::user();
        if($user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return back();
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        $categories = Category::all();
        return view('admin/categories')->with(["loggedInUser"=>$loggedInUser, "categories"=>$categories]);
    }  

    public function newCategory(Request $request){
        $category = new Category;
        $category->name = $request->input('name');
        if($category->save()){
            Session::flash('success', 'Thank you! New category has been created');
            return back();
        }else{
            Session::flash('error', 'Sorry! A server error occured... Kindly report this error to the admin.. Thank you');
            return back();
        }
    }

    public function editCategory(Request $request){
        $category = Category::where("id", $request->input('id'))->first();
        $category->name = $request->input('name');
        if($category->save()){
            Session::flash('success', 'Thank you! New category has been created');
            return back();
        }else{
            Session::flash('error', 'Sorry! A server error occured... Kindly report this error to the admin.. Thank you');
            return back();
        }
    }
}
