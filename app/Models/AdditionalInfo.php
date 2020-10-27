<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AdditionalInfo extends Model
{

    protected $fillable = [
        'institute', 'address','zipcode','country','city','gender', 
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
