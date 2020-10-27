<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'user_id','payment_type','tnx_id','payment_no','order_total','subtotal','discount','coupon_name','order_notes','status','order_date'
    ];
}
