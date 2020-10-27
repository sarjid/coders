<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Review;
use App\Models\Section;
use App\Models\Video;
use Illuminate\Http\Request;

class CoursedetailsController extends Controller
{
   public function detailsPage($id,$slug){

       $course = Course::findOrFail($id);
       $require = $course->requirements;
       $requirements = explode(',',$require);
       $learn = $course->what_learn;
       $learns = explode(',',$learn);
       $videos= Video::where('course_id',$id)->latest()->get();
       $orverview= Video::where('course_id',$id)->first();
       $sections = Section::where('course_id',$id)->get();
       $reviews = Review::with('user')->where('course_id',$id)->latest()->get();
       return view('fontend.course-details',compact('course','videos','sections','requirements','learns','orverview','reviews'));
   }
}
