<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enroll extends Model
{
    protected $fillable = [
        'user_id','course_id','order_id','status'
    ];

    public function course(){
        return $this->belongsTo('App\Models\Course','course_id');
    }

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }

    public function order(){
        return $this->belongsTo('App\Models\Order','order_id');
    }

}
