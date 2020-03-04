<?php

namespace App\Http\Controllers;

// use App\User;
use App\FakeDashboard;
use Illuminate\Http\Request;

class FakeDashboard extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $fake =   FakeDashboard::find(1);
     return view('cabinet.fake_dashboard', compact('fake'));
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
        $this->validate($request, [

            'username' => 'string|nullable',
            'plan' => 'string|nullable',
            'total_investment' => 'numeric|nullable',
            'current_earning' => 'numeric|nullable',
            'total_earning' => 'numeric|nullable',
            'nfp_investment' => 'numeric|nullable',
            'nfp_profit' => 'numeric|nullable',
            'referrals' => 'numeric|nullable',
            'referral_bonus' => 'numeric|nullable',
        ]);


        $dash = FakeDashboard::find(1);

        if ($request->username) {
            $dash->username = $request->username;
        }
        if ($request->plan) {
            $dash->plan = $request->plan;
        }
        if ($request->total_investment) {
            $dash->total_investment = $request->total_investment;
        }
        if ($request->total_investment) {
            $dash->total_investment = $request->total_investment;
        }
        if ($request->current_earning) {
            $dash->current_earning = $request->current_earning;
        }
        if ($request->total_earning ) {
            $dash->total_earning  = $request->total_earning ;
        }
        if ($request->nfp_investment ) {
            $dash->nfp_investment  = $request->nfp_investment ;
        }
        if ($request->nfp_profit ) {
            $dash->nfp_profit  = $request->nfp_profit ;
        }
        if ($request->referrals ) {
            $dash->referrals  = $request->referrals ;
        }
        if ($request->referral_bonus ) {
            $dash->referral_bonus  = $request->referral_bonus ;
        }
        $dash->save();


        if ($dahs) {

            return back()->with('success', 'Done!');
        } 
        else{

            return back()->with('error', 'Oops!, failed');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
