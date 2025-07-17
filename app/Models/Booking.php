<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name','birthday','konsultasi_type','complaint',
        'booking_date','booking_time','psikolog_id','psikolog_name',
        'price','xendit_invoice_id','payment_status'
    ];
}
