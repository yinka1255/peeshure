<?php

namespace App\Http\Controllers;

use App\Admin;
use App\Vendor;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Socialite;

class LoginsController extends Controller
{

    /**
	 * Handles authentication attempt
	 *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
    */
    public function authenticate(Request $request){
    	$email = $request->input('email');
        $password = $request->input('password');
    	if (Auth::attempt(['email' => $email, 'password' => $password])){
            $user = Auth::user();
            /*
            if($user->status == 0){
                Session::flash('error', 'Sorry! Kindly check your email to activate your account');
                return back();
            }   
            */
            if($user->status == 2){
                Session::flash('error', 'Sorry! Your account has been deactivated');
                return back();
            }   
            if($user->type == 1){
                Session::flash('success', 'Authentication successful');
                return redirect('admin/index');
            }    

            if($user->type == 3){
                return redirect('/');
            }    
        }else{		
                Session::flash('error', 'Authentication failed. Kindly try again with valid details');
                return back();
        }

    }

    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback()
    {
        try {
            $user = Socialite::driver('google')->user();
        } catch (\Exception $e) {
            return redirect('/');
        }
        
        // check if they're an existing user
        $existingUser = User::where('email', $user->email)->first();
        if($existingUser){
            // log them in
            auth()->login($existingUser, true);
        } else {
            // create a new user
            $newUser                  = new User;
            $newUser->name            = $user->name;
            $newUser->email           = $user->email;
            $newUser->google_id       = $user->id;
            $newUser->save();
            auth()->login($newUser, true);
        }
        Session::flash('success', 'Authentication successful');
        return redirect()->to('/');
    }


    public function logout(){
    	Auth::logout();
        return redirect('/');
    }
}
