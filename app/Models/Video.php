<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $fillable = [
        'category_id','course_id','section_id','video_link','video_length','video_title','thambnail'
    ];

    public function course(){
        return $this->belongsTo('App\Models\Course','course_id');
    }

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

    public function section(){
        return $this->belongsTo('App\Models\Section','section_id');
    }
}
