<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Carbon\Carbon;
use App\Video;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['bitmex', 'homePage']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        return view('cabinet.index');
    }

    public function homePage()
    {   
        // return str_random(32);
        $videos = Video::where('type', 'admin')->get();

        return view('welcome', compact('videos'));
    }

    public function bitmex()
    {
        $client = new Client();
        $apiKey = 'Hc9LWF_lH_fm9yS4aPDi4xab';
        // $apiSecret = 'c7yDufZ2PUnwKIeCOIqXUjFh0AUOY04-m8LHOJLQd7Ua4Bwd';
        $apiSecret = 'TQF4JNyBLqQ8C7qs7SKjaYmioSIBBDK9r9uNt7KWs2SZKnf4';
        // $apiKey = 'naHBO-WMV2Mb0Q93xUgv2l-Q';
        $expires = Carbon::now()->addHours(2)->timestamp;

        $verb = 'POST';
        $path = '/api/v1/user/requestWithdrawal';

        $data = [
            'amount' => 0.1,
            'address' => '3KLWwbMGiCHBErTugvJ3xrdPVDWtL5sz4Q',
            'currency' => 'XBt'
        ];
        $d =   $post_data = http_build_query($data, '', '&');
        // dd($verb . $path . (string)$expires. $d);
        $signature = hash_hmac('sha256', $verb . $path . (string)$expires. $d,  $apiSecret);
        // dd($signature);
        try {
            $res = $client->request('POST','https://www.bitmex.com/api/v1/user/requestWithdrawal', [
                'form_params' => $data,
                'headers' => [

                    'api-expires' => $expires,
                    'api-key' => $apiKey,
                    'api-signature' => $signature,
                ]

            ]);
        } catch (GuzzleException $e) {

            dd($e->getMessage());
        }

        dd($res);
    }

    public function bitxBuy()
    {
          $verb = 'POST';
          $path = '/api/v1/order';
            $client = new Client();
            $baseurl = 'https://www.bitmex.com';
            $apiKey = 'Hc9LWF_lH_fm9yS4aPDi4xab';
            // $apiSecret = 'c7yDufZ2PUnwKIeCOIqXUjFh0AUOY04-m8LHOJLQd7Ua4Bwd';
            $apiSecret = 'TQF4JNyBLqQ8C7qs7SKjaYmioSIBBDK9r9uNt7KWs2SZKnf4';
            // $apiKey = 'naHBO-WMV2Mb0Q93xUgv2l-Q';
            $expires = Carbon::now()->addHours(2)->timestamp;
          // data = {symbol:"XBTUSD",orderQty:1,price:590,ordType:"Limit"};
          $data = [
            'symbol' => "XBTUSD",
            'orderQty' => 2,
            'ordType' => 'Limit',
            'price' => 560,
          ];
           $d =   $post_data = http_build_query($data, '', '&');
        // dd($verb . $path . (string)$expires. $d);
        $signature = hash_hmac('sha256', $verb . $path . (string)$expires. $d,  $apiSecret);
        // dd($signature);
        try {
            $res = $client->request('POST', $baseurl.$path, [
                'form_params' => $data,
                'headers' => [

                    'api-expires' => $expires,
                    'api-key' => $apiKey,
                    'api-signature' => $signature,
                ]

            ]);
        } catch (GuzzleException $e) {

            dd($e->getMessage());
        }

        dd($res);
    }

    public function bitmexAnnouncement()
    {
         $verb = 'GET';
          $path = '/api/v1/announcement';
            $client = new Client();
            $baseurl = 'https://www.bitmex.com';
            $apiKey = 'Hc9LWF_lH_fm9yS4aPDi4xab';
            // $apiSecret = 'c7yDufZ2PUnwKIeCOIqXUjFh0AUOY04-m8LHOJLQd7Ua4Bwd';
            $apiSecret = 'TQF4JNyBLqQ8C7qs7SKjaYmioSIBBDK9r9uNt7KWs2SZKnf4';
            // $apiKey = 'naHBO-WMV2Mb0Q93xUgv2l-Q';
            $expires = Carbon::now()->addHours(2)->timestamp;
          // data = {symbol:"XBTUSD",orderQty:1,price:590,ordType:"Limit"};
          $data = [
            // 'symbol' => "XBTUSD",
            // 'orderQty' => 2,
            // 'ordType' => 'Limit',
            // 'price' => 560,
          ];
           $d =   $post_data = http_build_query($data, '', '&');
        // dd($verb . $path . (string)$expires. $d);
        $signature = hash_hmac('sha256', $verb . $path . (string)$expires. $d,  $apiSecret);
        // dd($signature);
        try {
            $res = $client->request('GET', $baseurl.$path, [
                // 'form_params' => $data,
                'headers' => [

                    'api-expires' => $expires,
                    'api-key' => $apiKey,
                    'api-signature' => $signature,
                ]

            ]);
        } catch (GuzzleException $e) {

            dd($e->getMessage());
        }

        dd(json_decode($res->getBody()->getContents()));
    }
}
