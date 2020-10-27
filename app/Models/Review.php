<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    protected $fillable = [
        'user_id','course_id','comment'
    ];

    public function user(){
        return $this->belongsTo('App\User','user_id');
    }
}
