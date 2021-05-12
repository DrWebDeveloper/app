<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Plan;
use App\Models\Setting;
use App\Models\Purchase;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Monarobase\CountryList\CountryListFacade;
use Illuminate\Http\Request;
use Stripe;
use Session;

class UserController extends Controller
{
    // User's Profile
    public function profile()
    {
        $id = Auth::id();
        $user = User::findOrfail($id);
        return view('user.dashboard', ['user' => $user]);
    }
    public function editprofile()
    {
        $id = Auth::id();
        $countries = CountryListFacade::getList('en');
        $user = User::findOrfail($id);
        return view('user.editprofile', ['user' => $user, 'countries' => $countries]);
    }

    public function saveprofile(Request $request)
    {
        $user = User::find($request->user()->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->save();
        return back()->with('message','The Profile has been updated successfully!');
    }
    public function saveprofilelinks(Request $request)
    {
        $user = User::find($request->user()->id);
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->country = $request->country;
        $user->address = $request->address;
        $user->save();
        return back()->with('message','The Profile has been updated successfully!');
    }

    public function purchases()
    {

        $purchases = User::find(Auth::user()->id)->purchases;
        return view('user.purchases', ['purchases' => $purchases]);
        // return view('user.purchases',['purchases'=> $purchases]);
    }

    public function chuko()
    {
        return User::find(Auth::user()->id)->purchases;
    }

    // User's Dashboard
    public function dashboard()
    {
        $setting = Setting::first()->get();
        return view('user.dashboard',['setting'=>$setting]);
    }

    // User's Account
    public function account()
    {
    }
    // Subscription
    public function subscribe($pid)
    {
        // return $pid;
        if ($pid == 3) {
            $date = (strtotime("+1 year", strtotime(Carbon::now())));
        }else{
        $date = (strtotime("+1 month", strtotime(Carbon::now())));
        }
        $plan = Plan::where('id', $pid)->first();
        return view('plan.subscribe', [
            'plan' => $plan,
            'date' => $date
        ]);
    }

    // User's Plan
    public function plan()
    {
    }
}
