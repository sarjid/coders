<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    protected $fillable = [
        'order_id','first_name','last_name','email','phone','institute_name','address','state','post_code','order_notes',
    ];
}
