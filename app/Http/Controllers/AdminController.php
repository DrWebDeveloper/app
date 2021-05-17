<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use App\Models\User;
use App\Models\Plan;
use App\Models\Setting;
use App\Models\Purchase;
use App\Models\Guide;
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
        $users= User::take(6)->orderBy('id', 'desc')->get();
        $purchases = Purchase::where('status','Active')->get();
        $epurchases = Purchase::where('status','Expired')->get();
        if ($check == 1 ) {
            return view('admin.dashboard',[
                'setting'=>$admin,
                'users'=>$users,
                'purchases' => $purchases,
                'epurchases' => $epurchases
            ]);
        }elseif ($check == 0) {
            return redirect()->route('home');
        }
    }
    public function adminplans(){
        $plans = Plan::all();
        return view('admin.plans',['plans'=>$plans]);
    }
    public function help(){
        $guides = Guide::all();
        return view('admin.help',['guides'=>$guides]);
    }
    public function purchases(){
        // $purchases = Purchase::all()->paginate(10);
        $purchases = DB::table('purchases')->paginate(10);

        return view('admin.purchases',['purchases'=>$purchases]);
    }
    public function users(){
        // $users = User::all();
        $users = DB::table('users')->orderBy('id','desc')->paginate(10);
        return view('admin.users',['users'=>$users]);
    }
    public function banner(){
        $setting = Setting::first();
        return view('admin.banner',['setting'=>$setting]);
    }
    public function editbanner(Request $request){

        $request->validate([
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg',
        ]);
        if (isset($request->image)) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $img = Setting::find(1);
            $img->banner = $imageName;
            $img->banner_link = $request->banner_link;
            $img->save();
            return back()->with('success', 'The Banner was successfully uploaded.');

        }else{
            $img = Setting::find(1);
            $img->banner_link = $request->banner_link;
            $img->save();
            return back()->with('success', 'The Banner was successfully uploaded.');
        }
        /* Store $imageName name in DATABASE from HERE */

    }
    public function general(){
        $setting = Setting::first();
        return view('admin.general',['setting'=>$setting]);
    }
    public function editgeneral(Request $request){

        $request->validate([
            'email' => 'email',
            'site_logo' => 'image|mimes:png',
            'site_logo_sidebar' => 'image|mimes:png',
        ]);
        $setting = Setting::find(1);
        $setting->site_phone = $request->site_phone;
        $setting->site_mail = $request->site_mail;
        $setting->site_address = $request->site_address;

        $setting->save();
        return back()->with('success', 'The details were successfully updated.');
    }
    public function editlogo(Request $request){
        $request->validate([
            'site_logo' => 'image|mimes:png',
        ]);
        $setting = Setting::find(1);
            $imageName = time() . '.' . $request->site_logo->extension();
            $request->site_logo->move(public_path('images/logo/'), $imageName);
            /* Store $imageName name in DATABASE from HERE */
            $setting->site_logo = $imageName;
        $setting->save();
        return redirect()->route('general')->with('success', 'The Website Logo was successfully updated.');
    }
    public function editlogosidebar(Request $request){
        $request->validate([
            'site_logo_sidebar' => 'image|mimes:png',
        ]);
        $setting = Setting::find(1);
            $imageName = time() . '.' . $request->site_logo_sidebar->extension();
            $request->site_logo_sidebar->move(public_path('images/logo/'), $imageName);
            /* Store $imageName name in DATABASE from HERE */
            $setting->site_logo_sidebar = $imageName;
        $setting->save();
        return redirect()->route('general')->with('success', 'The Sidebar Logo was successfully updated.');
    }

    public function user($id){
        $user = User::where('id',$id)->first();
        return view('admin.user.profile', ['users' => $user]);
    }
}
