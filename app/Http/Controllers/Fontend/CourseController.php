<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index(){
        $categories = Category::latest()->get();
        $courses = Course::orderBy('id','DESC')->get();
    return view('fontend.course-page',compact('courses','categories'));
    }
}
