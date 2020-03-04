<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Hexters\CoinPayment\Entities\CoinPaymentuserRelation;
use App\Investment;
use App\NetBonus;

class User extends Authenticatable implements MustVerifyEmail
{
    use Notifiable, CoinPaymentuserRelation;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $guarded = [
        'id', 'verified'
    ];

    protected $appends = ['referral_link'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function payouts()
    {
        return $this->hasMany(Payout::class, 'recipient_id')->orderBy('created_at', 'desc');
    }

    public function investments()
    {
        return $this->hasMany(Investment::class, 'user_id')->orderBy('created_at', 'desc');
    }

    public function bonuses()
    {
        return $this->hasMany(Bonus::class, 'recipient_id')->orderBy('created_at', 'desc');
    }

    public function referrals()
    {
        return User::where('sponsorID', $this->referralID)->orderBy('created_at', 'desc')->get();
    }

    public function getReferralLinkAttribute()
    {
        return url('/register?sponsor=').$this->referralID;
    }

    public function latestInvestment()
    {
        $inv = $this->investments->where('status', 'pending')->first();

        return $inv;
    }

    public function hasSponsor()
    {
        return $this->sponsorID ? true :false;
    }

    public function sponsor()
    {
        return User::where('referralID', $this->sponsorID)->first();
    }

    public function plan()
    {
        return $this->investments->where('status', 'active')->first();
    }
    

    public function totalInvestment()
    {
        return $this->investments->where('status', '!=', 'pending')
                    ->sum('amount');
    }

    public function activePlans()
    {
        return $this->investments->where('status', 'active');

    }

    public function multiPlans()
    {
        $distinct_plans = [];

        $plans = $this->activePlans();
        // dd($plans);
        if ($plans) {

           foreach ($plans as $key => $plan) {
               
               array_push($distinct_plans, $plan->category->name);
           }
        }

        return count(array_unique($distinct_plans));
    }

    public function earning()
    {
        return $this->activePlans()->sum('earning');
    }

    public function totalEarning()
    {
        return $this->hasOne(Earning::class, 'user_id');
    }

    public function netBonus()
    {
        return $this->hasOne(NetBonus::class, 'user_id');
    }

    public function refBonus()
    {
        return $this->bonuses->where('type', 'referral');
    }

    public function videoBonus()
    {
        return $this->bonuses->where('type', 'video');
    }

    public function videos()
    {
        return $this->hasMany(Video::class,'user_id');
    }

    public function nfp()
    {
        $investments = $this->activePlans();

        $nfp = $investments->filter(function($inv){

            return $inv->category->name == 'NFP';
        });

        return $nfp->first();
    }

    public function withdrawals()
    {
        return $this->hasMany(Withdrawal::class, 'user_id');
    }


}
