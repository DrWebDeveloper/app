<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use App\Models\Plan;
use App\Models\Purchase;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function dashboard(){
        $check = Auth::user()->admin;
        $admin = Admin::first();
        if ($check == 1 ) {
            return view('admin.dashboard',['setting'=>$admin]);
        }elseif ($check == 0) {
            return redirect()->route('home');
        }
    }
    public function adminplans(){
        $plans = Plan::all();
        return view('admin.plans',['plans'=>$plans]);
    }
    public function purchases(){
        // $purchases = Purchase::all()->paginate(10);
        $purchases = DB::table('purchases')->paginate(10);

        return view('admin.purchases',['purchases'=>$purchases]);
    }
    public function users(){
        $users = User::all();
        return view('admin.users',['users'=>$users]);
    }
    public function user($id){
        $user = User::where('id',$id)->first();
        return view('admin.user.profile', ['users' => $user]);
    }
}
