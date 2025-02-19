<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable = ['total_amount', 'payment_date', 'method', 'payment_id', 'booking_id'];

    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }
}
