<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use App\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
//    ============== index pages =========
    public function index(){
        
        $categories = Category::latest()->get();
        $course = Course::orderBy('id','DESC')->get();
        $students = User::all();
        $reviews = Review::with('user')->latest()->get();
        return view('fontend.index-page',compact('categories','course','students','reviews'));
    }
}
