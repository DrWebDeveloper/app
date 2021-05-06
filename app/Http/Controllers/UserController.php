<?php

    namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Plan;
use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Stripe;
use Session;

class UserController extends Controller
{
    // User's Profile
    public function profile(){
        $id = Auth::id();
        $user = User::findOrfail($id);
        return view('user.dashboard',['user'=>$user]);
    }
    public function editprofile(){
        $id = Auth::id();
        $user = User::findOrfail($id);
        return view('user.editprofile',['user'=>$user]);
    }

    public function purchases(){
        $id = Auth::id();
        $purchases = Purchase::where('user_id',$id)->get();
        return view('user.purchases',['purchases'=> $purchases]);
    }

    // User's Dashboard
    public function dashboard(){

    }

    // User's Account
    public function account(){

    }
    // Subscription
    public function subscribe($pid){
        // return $pid;
        $date= (strtotime("+1 month", strtotime(Carbon::now())));

        $plan=Plan::where('id',$pid)->first();
        return view('plan.subscribe',[
            'plan'=>$plan,
            'date'=>$date
            ]);

    }

    // User's Plan
    public function plan(){

    }
}
