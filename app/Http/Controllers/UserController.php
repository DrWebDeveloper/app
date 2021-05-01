<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // User's Profile
    public function profile(){
        $id = Auth::id();
        $user = User::findOrfail($id);
        return view('user.profile',['user'=>$user]);
    }
    public function editprofile(){
        $id = Auth::id();
        $user = User::findOrfail($id);
        return view('user.editprofile',['user'=>$user]);
    }

    // User's Dashboard
    public function dashboard(){

    }

    // User's Account
    public function account(){

    }

    // User's Plan
    public function plan(){

    }
}
