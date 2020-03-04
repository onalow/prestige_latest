<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payout extends Model
{
    protected $fillabe = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'recipient_id');
    }

    public function Investment()
    {
        return $this->belongsTo(Investment::class, 'investment_id');
    }
}
