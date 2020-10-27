<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
  
    protected $fillable = [
        'category_id','course_name','course_slug','requirements','what_learn','image','course_fee','course_files',
    ];

    public function category(){
        return $this->belongsTo('App\Models\Category','category_id');
    }

  
}
