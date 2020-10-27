<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orderdetail extends Model
{
    protected $fillable = [
        'order_id','course_id','course_name','price'
    ];

    public function course(){
        return $this->belongsTo('App\Models\Course','course_id');
    }

}
