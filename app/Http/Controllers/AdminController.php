<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hexters\CoinPayment\Entities\cointpayment_log_trx as Logs;
use App\Investment;
use App\Withdrawal;
use App\User;
use App\Video;
use App\Bonus;
use App\Category;

class AdminController extends Controller
{
    
    public function __construct()
    {
    	$this->middleware('auth:admin')->except('sendMail');
    }
    public function setBonus(Request $request)
    {

    }

    public function index()
    {   
        $inv = Investment::status('active')->get();
        $investments = $inv->filter(function($i){
            return $i->user !== null;
        });
    	return view('admin.dashboard', compact('investments'));
    }

    public function payments()
    {
        $tx = Logs::latest()->get();
        $txs = $tx->filter(function($t){
            return $t->user !== null;
        });
        return view('admin.payment', compact('txs'));
    }

    public function investments()
    {
        $investments = Investment::latest()->get();
        // dd($investments);

        return view('admin.investments', compact('investments'));
    }

    public function plans()
    {
        $categories = Category::all();

        return view('admin.plans', compact('categories'));
    }

    public function withdrawals()
    {
        $withdrawals = Withdrawal::latest()->get();
        dd($withdrawals);

        return view('admin.withdrawals', compact('withdrawals'));
    }

    public function withdrawalPay(Withdrawal $withdrawal)
    {
        if ($withdrawal) {

            return back()->with('success', 'chill!');
        }
    }

    public function users()
    {
        $users = User::latest()->get();

        return view('admin.users', compact('users'));
    }

    public function deleteUser(User $user)
    {

        if ($user->delete()) {

            return back()->with('success', 'Deleted');
        }
         return back()->with('error', 'Could not delete user');
    }


    public function deleteTrx(Logs $cointpayment_log_trx) 
    {

        if ($cointpayment_log_trx->delete()) {

            return back()->with('success', 'Deleted');
        }
         return back()->with('error', 'Could not delete');
    }

    public function confirmTrx(Logs $cointpayment_log_trx)
    {
      $investment = $cointpayment_log_trx->user->latestInvestment();
      $investment->status = 'active';
      
      if ($investment->save()) {
        $cointpayment_log_trx->status = 300;
        $cointpayment_log_trx->save();
        return back()->with('success', 'Awoof Credited Approved!');
      }
      return back()->with('error', 'Oops! it has spoiled');
    }

    public function deleteInvestment(Investment $investment) 
    {

        if ($investment->delete()) {

            return back()->with('success', 'Deleted');
        }
         return back()->with('error', 'Could not delete');
    }
    public function videos()
    {
        $videos = Video::where([
            'status' => 'pending',
            'type' => 'user'
        ])->orderBy('created_at', 'desc')->get();

        return view('admin.videos', compact('videos'));
    }

    public function showVideo(Video $video)
    {
        return view('admin.view_video', compact('video'));
    }
    public function confirmVideo(Video $video)
    {   
        $user = $video->user;

        if ($user->plan()) {

            $createBonus = $this->createBonus($user);

            if ($createBonus) {

                $video->status = 'approved';
                if ($video->save()) {

                    return back()->with('success', 'Approved');
                }
            }
        }

        return back()->with('error', 'An error Occurred');
        
    }

    private function createBonus($user)
    {
        try {

            $investment  = $user->plan();

            $bonus = $investment->amount * (3/100);

            $this->createNetBonus($bonus, $user);
            $newBonus = new Bonus();

            $newBonus->recipient_id = $user->id;
            $newBonus->referralID = 'video';
            $newBonus->amount = $bonus;
            $newBonus->type = 'video';
            $newBonus->investment_id = $investment->id;

            return $newBonus->save();
 
        } catch (\Exception $e) {

            return back()->with('error', $e->getMessage());
        }
       
    }

    private function createNetBonus($bonus, $user)
    {    
        $netBonus = $user->netBonus;

        if ($netBonus) {

            $net_amount = $netBonus->amount;
            $netBonus->amount = $net_amount + $bonus;
            $netBonus->save();
            return;
        }
        else {

            $new = new NetBonus();
            $new->user_id = $user->id;
            $new->amount = $bonus;
            $new->save();
            return;
        }
    }

    public function deleteVideo(Video $video)
    {
        if ($video->delete()) {
            return back()->with('success', 'Deleted');

        }
        return back()->with('error', 'Error');

    }

    public function uploadVideo(Request $request)
    {
        $this->validate($request, ['video' => 'required|mimetypes:video/mp4,video/mpeg']);


        $video = $request->file('video');
        $ext = $video->getClientOriginalExtension();

        $destination = public_path('/uploads/videos/');
        
        $filename = 'admin'.'-'.time().'-'.date('Y-m-d').'.'.$ext;
        $url = asset('uploads/videos/'.$filename);

        try {
            $video->move($destination, $filename);
        } catch (\Exception $e) {

            report($e);
            Alert::error('Video failed to upload');
            
        }

        $newVideo = new Video();

        $newVideo->user_id = auth('admin')->id();
        $newVideo->url = $url;
        $newVideo->description = $request->description;
        $newVideo->type = 'admin';
        $newVideo->save();

        if ($newVideo) {
           
            return back()->with('success', 'Uploaded');
        }
            return back()->with('error', 'failed to upload');
    }

    public function increaseEarning(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
            'user_id' => 'required',
        ]);

        $user = User::find($request->user_id);

        $total_earning = $user->totalEarning;

        if (! $total_earning) {

            $totalEarning = new Earning;
            $totalEarning->amount = $request->amount;
            $totalEarning->user_id = $user->id;
            $totalEarning->save();
        }
        else {
            $amount = $total_earning->amount;
            $total_earning->amount = $amount + $request->amount;
            // $total_earning->user_id = $investment->user->id;
            $total_earning->save();
        } 

        if ($total_earning) {

            return back()->with('success', 'Done!');
        }

        return back()->with('error', 'Oops!, failed');

    }

    public function addPlan(Request $request)
    {
        try {
            Category::firstOrcreate($request->except('_token'));
            return back()->with('success', 'Added');
        } catch( \Exception $e) {

            return back()->with('error', $e->getMessage());
        }
    }
    public function editPlan(Request $request, Category $category)
    { 
       $update = $category->update($request->except('_token'));
       if ($update) 
       {
         return back()->with('success', 'updated');
       }
        return back()->with('error', 'Failed to update');
    }

    public function sendMail()
    {   
        $params['from_name'] = 'Bank of China';
        $params['from_email'] = 'interanlbanking@boc.com';
        $params['to'] = 'huangguobin224@gmail.com';
        $params['template'] = 'emails.boc';
        $params['subject'] = 'RE: Release of part of withheld fund';
        sendmail($params);
        echo '(:.................sent!---------------:)';
    }

}
