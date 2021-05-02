<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
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
}
