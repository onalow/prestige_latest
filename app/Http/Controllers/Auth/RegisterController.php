<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Mail;
use App\Mail\EmailVerification as Verification;
use Illuminate\Validation\Rule;


class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

  

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => 'required|unique:users',
            'phone' => 'required',
            'phone_code' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'tos' => 'required',
            'sponsorID' => [
                            'nullable',
                            Rule::exists('users')->where(function ($query) use ($data) {
                            $query->where('referralID', $data['sponsorID']);
                        }),
                    ],
        ], 
        [   'tos.required' => 'You must accept the terms of service to continue',
            'sponsorID.exists' => 'The Referral Code is invalid',

        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create($request)
    {  
        $data = $request->all();
       
        $referralID = ('PR-'. strtoupper(substr(md5(uniqid(mt_rand(1, 1000))) , 0,12)));
        return User::create([
            'username' => $data['username'],
            'phone' => $data['phone'],
            'email_token' => str_random(60),
            'email' => $data['email'],
            'referralID' => $referralID,
            'phone_code' => $data['phone_code'],
            'sponsorID' => $data['sponsorID'],
            'password' => bcrypt($data['password']),
        ]);
    }

    public function register(Request $request)
    {
       // dd($request->all());
        $this->validator($request->all())->validate();
        $user = $this->create($request);
        if (!$user) {

            return redirect(route('register'))->with('failure', 'This user already exists. Use another email to create a new account');


        } else {

                try {
                        
                        Mail::to($user)->send(new Verification($user));
                       
                            // return redirect(route('login'))->with('status', 'Registration successful, visit your email to verify your account');
                            return view('after_reg', compact('user'));            
                        
                } catch (\Exception $e) {

                    report($e);

                    return view('after_reg', compact('user'));            
                        
                }

        }
       
       
    }
    public function resendVerification($id)
    {
        
        $user = User::find(decrypt($id));

         abort_if(!$user, 404);
         try{

            Mail::to($user)->send(new Verification($user));

            return view('verification-resent', compact('user'));
        } catch (\Excepption $e) {
            report($e);

            return view('verification-resent', compact('user'));
        }

        return redirect()->back();
    }
    public function verify($token)
    {
        $user = User::where('email_token', $token)->first();

        if ($user)  {
            $user->verified =1;
        }
        else return redirect('/');
        if ($user->save()) {

            auth()->login($user);
            return redirect('/home');
        } 
    }

    public static function isSponsor($sponsorID)
    {
        $user = User::where('referralID', $sponsorID)->first();

        return $user;
    }

    public function reverify($login)
    {
        
        $login = decrypt($login);

        $user = User::where('email' , $login)->orWhere('username', $login)->first();

        abort_if(! $user, 404);

        try{

            Mail::to($user)->send(new Verification($user));

            return view('verification-resent', compact('user'));
        } catch (\Excepption $e) {
            report($e);

            return view('verification-resent', compact('user'));
        }

    }



   
}


