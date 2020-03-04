<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
Route::get('admin/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index')->middleware('auth:admin');

Route::get('/artisan', function () {
   //gets the artisan command from query string passed
 $data = Request::get('data');
   //executes the artisan command
 return shell_exec('php ../artisan '.$data);
});

Route::get('/clear', function() {
  Artisan::call('cache:clear');
  return "Cache is cleared";
});

Route::get('/trial', function() {
  dd("tried");
});


// Route::get('/referral', function () {
//   return view('referral');
// });

Route::get('/faq', function () {
  return view('faq');
});

Route::get('/payouts', function () {
  return view('payouts');
});

Route::get('/terms', function () {
  return view('terms');
});

Route::get('/nfpplan', function () {
    // return view('cabinet.nfp_plans');
});
Route::get('/cloud_mining', function () {
  return view('cloud_mining');
});
Route::get('/non_farm_payroll', function () {
  return view('nfp');
});
Route::get('/nfpupload', function () {
  return view('cabinet.nfp_upload');
});

Route::get('/buy', function () {
  return view('cabinet.buy');
});
Route::get('/withdraw', function () {
  return view('cabinet.withdraw');
});
Route::get('/plans', function () {
  return view('cabinet.myplan');
});
Route::get('/pis_loan', function () {
  return view('loan');
});
Route::get('/hedge_fund', function () {
  return view('hedge_fund');
});
Route::get('/aboutus', function () {
  return view('about_us');
});

Route::get('/bonus', function () {
  return view('cabinet.bonus');
});
Route::get('/deposit', function () {
  return view('cabinet.deposit');
});
Route::get('/card', function () {
  return view('cabinet.card');
});

Route::get('/af', function () {
  return view('after_reg');
});
Route::get('/ve', function () {
  return view('emails.verification');
});
Route::get('/profile', function () {
  return view('cabinet.profile');
});



Route::get('account/verification/{token}', 'Auth\RegisterController@verify')->name('verify');
Route::get('account/not_verified/{user}', 'Auth\LoginController@notVerified')->name('not.verified');
Route::get('resend/verification/{id}', 'Auth\RegisterController@resendVerification')->name('verification.resend');
Route::get('reverify/account/{login}', 'Auth\RegisterController@reverify')->name('reverify');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@homePage')->name('home.page');
Route::get('/bitmex', 'HomeController@bitmex');

Route::group(['prefix' => 'admin'], function(){
  Route::get('/', 'AdminController@index')->name('admin.dashboard');
  Route::get('login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
  Route::post('login', 'Auth\AdminLoginController@login')->name('admin');
  Route::post('logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
  Route::get('set/bonus', 'AdminController@setBonus')->name('set.bonus');
  Route::get('payments', 'AdminController@payments')->name('admin.payments');
  Route::get('investments', 'AdminController@investments')->name('admin.investments');
  Route::get('plans', 'AdminController@plans')->name('admin.plans');
  Route::get('withdrawals', 'AdminController@withdrawals')->name('admin.withdrawals');
  Route::get('users', 'AdminController@users')->name('admin.users');
  Route::get('videos', 'AdminController@videos')->name('admin.videos');
  Route::get('videos/{video}/confirm', 'AdminController@confirmVideo')->name('confirm.video');
  Route::get('videos/{video}', 'AdminController@showVideo')->name('view.video');
  Route::get('user/{user}/delete', 'AdminController@deleteUser')->name('user.delete');
  Route::get('trxn/{cointpayment_log_trx}/delete', 'AdminController@deleteTrx')->name('delete.trx');
  Route::get('trxn/{cointpayment_log_trx}/confirm', 'AdminController@confirmTrx')->name('confirm.trx');
  Route::get('investment/{investment}/delete', 'AdminController@deleteInvestment')->name('delete.investment');
  Route::get('video/{video}/delete', 'AdminController@deleteVideo')->name('delete.video');
  Route::post('video/upload', 'AdminController@uploadVideo')->name('admin.video.upload');
  Route::post('increase/earning', 'AdminController@increaseEarning')->name('admin.increase.earning');

  Route::post('add/plan', 'AdminController@addPlan')->name('admin.add.plan');
  Route::post('plan/{category}/edit', 'AdminController@editPlan')->name('admin.edit.plan');
  Route::get('sendmail', 'AdminController@sendMail');


// Kelechi
  Route::resource('fd', 'FakeDashboardController');
  // Route::post('fd/save', 'FakeDashboardController@store');


});

////////////////////Investment////////////
Route::group(['prefix' => 'Investment'], function(){
  Route::get('plans', 'InvestmentController@index')->name('buy');
  Route::get('nfp', 'InvestmentController@showNfp')->name('buy.nfp');
  Route::get('cloud_mining', 'InvestmentController@showCloudMining')->name('show.cloud_mining');
  Route::get('packages', 'InvestmentController@showPackages')->name('show.packages');
  Route::get('invest/{id}', 'InvestmentController@showInvestForm')->name('invest');
  Route::post('buy', 'InvestmentController@invest')->name('invest.process');
  Route::get('payment/{id}', 'InvestmentController@showCardForm')->name('pay.card');
  Route::get('withdrawal', 'InvestmentController@showWithdrawalForm')->name('withdrawal');
  Route::post('withdrawal', 'InvestmentController@createWithdrawal')->name('withdrawal.create');
  Route::post('payment/{id}', 'InvestmentController@payWithCard')->name('pay.with.card');
  Route::get('/get_trxns', 'CoinPaymentController@getTrxns')->name('aja.get.trxns');
  Route::get('/bonus', 'InvestmentController@showBonus')->name('bonus');
  Route::post('/bonus', 'InvestmentController@withdrawBonus')->name('bonus.withdrawal');
  Route::post('/testimony/video', 'InvestmentController@videoUpload')->name('video.upload');
  Route::get('withdrawal/{withdrawal}/process', 'CoinPaymentController@createWithdrawal')->name('withdrawal.pay');
  Route::get('withdrawal/{withdrawal}/confirm', 'CoinPaymentController@confirmWithdrawal')->name('confirm.withdrawal');

});
Route::get('/test-pay', 'CoinPaymentController@testPay');
Route::get('/test-pusher', 'CoinPaymentController@testPusher');


Route::group([
  'middleware' => [
    'web',
    'auth',
    Hexters\CoinPayment\Http\Middleware\listenConfigFileMiddleware::class
  ],
  'prefix' => 'PIS/payment',

],
function() {
  Route::get('/', function(){
    return abort(404);
  })->name('coinpayment.home');
  Route::get('/{serialize}', 'CoinPaymentController@index')->name('coinpayment.create.transaction');
  Route::get('/ajax/rates/{usd}', 'CoinPaymentController@ajax_rates')->name('coinpayment.ajax.rate.usd');
  Route::get('/ajax/transaction/histories', 'CoinPaymentController@transactions_list_any')->name('coinpayment.ajax.transaction.histories');
  Route::post('/ajax/maketransaction', 'CoinPaymentController@make_transaction')->name('coinpayment.ajax.store.transaction');
  Route::post('/ajax/trxinfo', 'CoinPaymentController@trx_info')->name('coinpayment.ajax.trxinfo');
  Route::post('/ajax/transaction/manual/check', 'CoinPaymentController@manual_check')->name('coinpayment.ajax.transaction.manual.check');

  Route::get('/transactions/histories', 'CoinPaymentController@transactions_list')->name('coinpayment.transaction.histories');

});

Route::group(['prefix' => 'account'], function(){

  Route::get('profile', 'AccountController@index')->name('profile.show');
  Route::post('wallet/update', 'AccountController@updateWallet')->name('update.wallet');
  Route::post('phone/update', 'AccountController@updatePhone')->name('update.phone');
  Route::post('password/update', 'AccountController@changePassword')->name('change.password');

});


