<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Alert;
use Hash;
class AccountController extends Controller
{

    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	return view('cabinet.profile');
    }

    public function updateWallet(Request $request)
    {
    	$user = auth()->user();

    	$this->validate($request, ['wallet'=>'required']);

    	$user->wallet = $request->wallet;
    	$user->save();

    	if ($user->save()) {

    		Alert::success('Wallet updated');
    		return back();
    	}

    	Alert::error('An error occurred, please try again');
    	return back();
    }

    public function updatePhone(Request $request)
    {
    	$user = auth()->user();

    	$this->validate($request, ['phone'=>'required']);

    	$user->phone = $request->phone;
    	$user->save();

    	if ($user->save()) {

    		Alert::success('Phone updated');
    		return back();
    	}

    	Alert::error('An error occurred, please try again');
    	return back();
    }

    public function changePassword(Request $request)
    {
    	$this->validate($request, [
    		'old_password' => 'required',
    		'new_password' => 'required|confirmed',
    	]);
    	$user = auth()->user();
    	if (! Hash::check($request->old_password, $user->password )) {
    		Alert::error('Old password provided is incorect')->autoclose(5000);
    	return back();
    	}

    	$new_password =Hash::make($request->new_password);
    	$user->password = $new_password;

    	if ($user->save()) {
    		Alert::success('Password changed successfully')->autoclose(5000);
    		return back();
    	}
    	else {
    		Alert::error('An error occurred, please try again');
    		return back();
    	}
    }
}
