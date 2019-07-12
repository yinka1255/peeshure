<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use Session;
use Redirect;
use App\User;
use App\Admin;
use App\Vendor;
use App\Client;
use App\Policy;
use App\VehiclePolicy;
use App\State;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;
use Mail;

class PoliciesController extends Controller{

    public function index(){
        $user = Auth::user();
        if($user->type != 1){
            Session::flash('error', 'Sorry! You do not have access to this page');
            return back();
        }
        $loggedInUser = Admin::join("users", "admins.user_id", "=", "users.id")
                        ->where("admins.user_id", $user->id)
                        ->select("admins.*", "users.id as user_id", "users.status as user_status")->first();
        $policies = Policy::all();

        return view('admin/policies')->with(["loggedInUser"=>$loggedInUser, "policies"=>$policies]);
    }  

    public function buy($policy_id){
        $user = Auth::user();
        if(!$user || $user->type != 3){
            Session::flash('error', 'Sorry! You do not have access to this page. Kindly log in to your account');
            return back();
        }
        $loggedInUser = Client::join("users", "clients.user_id", "=", "users.id")
                        ->where("clients.user_id", $user->id)
                        ->select("clients.*", "users.id as user_id", "users.status as user_status")->first();
        $policy = Policy::where('id', $policy_id)->first();
        if($policy->id == 1){
            return view('buy_vehicle')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }else if($policy->id == 2){
            return view('buy_health')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 3){
            return view('buy_fire')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 4){
            return view('buy_house')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }else if($policy->id == 5){
            return view('buy_buglary')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 6){
            return view('buy_health')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 7){
            return view('buy_risk')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 8){
            return view('buy_money')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 9){
            return view('buy_fidelity_guarantee')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 10){
            return view('buy_public_liability')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 11){
            return view('buy_product_liability')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 12){
            return view('buy_professional')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 13){
            return view('buy_business')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 14){
            return view('buy_bond')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
        else if($policy->id == 15){
            return view('buy_animal')->with(["loggedInUser"=>$loggedInUser, "policy"=>$policy]);
        }
    }  


    public function buyVehiclePolicy(Request $request){
        $vehicle_policy = new VehiclePolicy;
        $vehicle_policy->registration_no = $request->input('registration_no');
    }

    public function addPolicy(Request $request){
        if(!$request->hasFile('photo')){
            Session::flash('error', 'Sorry! You must upload a photo for this policy');
            return back();
        }
        $policy = new Policy;
        $policy->name = $request->input('name');
        $policy->description = $request->input('description');

        $image = $request->file('photo');
        $imageName  = time() . '.' . $image->getClientOriginalExtension();
        $path = public_path()."/policies/";
        $image->move($path, $imageName);
        $policy->image = $imageName;

        if($policy->save()){
            Session::flash('success', 'Policy item has been updated succesfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured... Pls try again');
            return back();
        }

    }

    public function editPolicy(Request $request){
        $policy = Policy::where('id', $request->input('id'))->first();
        $policy->name = $request->input('name');
        $policy->description = $request->input('description');
        if($policy->save()){
            Session::flash('success', 'Policy item has been updated succesfully');
            return back();
        }else{
            Session::flash('error', 'Sorry! An error occured... Pls try again');
            return back();
        }

    }
    
}
