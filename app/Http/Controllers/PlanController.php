<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Stripe;
use Session;


class PlanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pay(Request $request)
    {
        $plan = Plan::where('id',$request->pid)->first();
        // return $plan;
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create([
            "amount" => $plan->price *100,
            "currency" => "eur",
            "source" => $request->stripeToken,
            "description" => "Payment for ".$plan->name." Plan by ".$request->user()->name." User ID#". $request->user()->id
        ]);
        $purchase = new Purchase();
        $purchase->plan = $plan->name;
        $purchase->plan_id = $plan->id;
        $purchase->user_id = $request->user()->id;
        $purchase->paid = $plan->price;
        $purchase->status = "Active";
        $purchase->expiry = Carbon::now()->addMonth();
        $purchase->save();
        $user = User::find($request->user()->id);
        $user->membership = 'Premium';
        $user->save();
        $plan = Plan::find($plan->id);
        $plan->sales ++;
        $plan->save();
        return redirect()->back()->with('success', 'Payment has been successfully processed.');

        return back();
    }
    public function index()
    {
        //
        $plans= Plan::all();
        return view('plan.plans',['plans'=>$plans]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        // Show a list of All Plans
        $plans = Plan::all();
        return view('admin.plans', ['plans'=>$plans]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    // public function edit($id,Plan $plan)
    public function edit($id)
    {
        //
        $plan= Plan::where('id',$id)->first();

        return view('admin.edit.plan',['plan'=>$plan]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update($pid,Request $request, Plan $plan)
    {
        //
        $plan = Plan::find($pid);
        $plan->name = $request->name;
        $plan->price = $request->price;
        $plan->save();
        return redirect()->back()->with('success', 'The Plan was updated successfully!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
