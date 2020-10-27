<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = [
        'course_id','section_name',
    ];

    public function course(){
        return $this->belongsTo('App\Models\Course','course_id');
    }

}
