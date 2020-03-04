<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Hexters\CoinPayment\Entities\cointpayment_log_trx as Logs;

class Investment extends Model
{
    protected $fillabe = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function conpaymentTx()
    {
    	return Logs::where('payment_address', $this->payment_address)->first();
    }

    public function scopeStatus($query,$value)
    {
        return $query->where('status', $value);
    }
}
