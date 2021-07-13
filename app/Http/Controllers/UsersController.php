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
        $products = Product::orderBy('id', 'desc')->take(60)->get();
        return view('customers/index')->with(["categories"=>$categories, "products"=>$products]);
    }

    public function about(){
        return view('customers/about');
    }
    
    public function services(){
        return view('customers/services');
    }

    public function contact(){
        return view('customers/contact');
    }

    public function terms(){
        return view('customers/terms');
    }

    public function licence(){
        return view('customers/licence');
    }

    public function privacy(){
        return view('customers/privacy');
    }

    public function faqs(){
        return view('customers/faqs');
    }

    public function quality(){
        return view('customers/quality');
    }
    public function profile(){
        return view('customers/profile');
    }

    public function logout(){
    	Auth::logout();
        return redirect('/');
    }

    public function contactNew(Request $request){
        Session::flash('success', 'We have received your message... Thank you for contacting us...');
        return redirect('products');
    }
    public function register(Request $request){
        if($request->input('password') != $request->input('confirm_password')){
            Session::flash('error', 'Sorry! Passwords provided do not match');
            return back();
        }
    	$email = $request->input('email');
        $password = $request->input('password');
        $name = $request->input('name');
        //$phone = $request->input('phone');
        
        $user = new User;
        $user->email = $email;
        $user->name = $name;
        $user->type = 3;
        $user->password = bcrypt($password);
        if($user->save()){
            Auth::loginUsingId($user->id);
            Session::flash('success', 'Your account has been created successfully...');
            return redirect('/');
        }else{
            Session::flash('error', 'Sorry! An error occured...');
            return back();
        }
    }
    
    public function updateProfile(Request $request){
        $user = Auth::user();
        if($request->input('password') != ""){
           $user->password = bcrypt($request->input('password'));
        }
    	$user->email = $request->input('email');
        $user->name = $request->input('name');
        if($user->save()){
            Session::flash('success', 'Your profile has been successfully updated...');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured...');
            return back();
        }
    }

    public function forgotPassword(Request $request){
        $user = User::where("email", $request->input('email'))->first();
        if($user->isEmpty()){
            Session::flash('error', 'Sorry! No account is associated with this email in out database.');
            return back();
        }
        $s = substr(str_shuffle(str_repeat("0123456789abcdefghijklmnopqrstuvwxyz", 5)), 0, 5);
        $user->password = bcrypt($s);
        
        if($user->save()){
            $this->sendForgotMail($user->email, $s);
            Session::flash('success', 'Your password has been successfully reset. Kindly check your email to proceed...');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured...');
            return back();
        }
    }

    public function sendForgotMail($customer_email, $password){
        $data = [
            'email'=> $customer_email,
            'date'=>date('Y-m-d'),
            'sender' => 'info@cashluck.com.ng',
            'password'=> $password,       
        ];
    
        Mail::send('forgot_mail', $data, function($message) use($data){
            
            $message->from('info@peeshure.com', 'Peeshure');
            $message->SMTPDebug = 4; 
            $message->to($customer_email);
            $message->subject('Forgot password');
        
        });
    }

    
}
