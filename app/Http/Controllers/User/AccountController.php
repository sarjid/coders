<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AccountController extends Controller
{
    // enroll course for free 
    public function enrollFree(Request $request){
        $course_id = $request->id;
        if (Auth::check()) {
            $exist = Enroll::Where('course_id',$course_id)->where('user_id',Auth::id())->first();
            if (!$exist) {
                $course = Course::findOrFail($course_id);
                if ($course->course_fee == NULL) {
                    Enroll::insert([
                        'course_id' => $course_id,
                        'user_id' => Auth::id()
                    ]);
                    $notification=array(
                        'message'=>'Successfully Enroll Done',
                        'alert-type'=>'success'
                        );
                        return Redirect()->route('user-course')->with($notification);
                }else {
                    return Redirect()->to('/');
                }
            }else{
                $notification=array(
                    'message'=>'Course Already Enroll You',
                    'alert-type'=>'error'
                    );
                    return redirect()->back()->with($notification);
            }
           
        }else {
            $notification=array(
                'message'=>'You Need to Login First',
                'alert-type'=>'success'
                );
                return redirect()->route('login')->with($notification);
        }
    }

    //course Review 
    public function storeCourseReview(Request $request){
        $course_id = $request->course_id;
        $request->validate([
            'comment' => 'required'
        ],[
            'comment.required' => 'the review field is required'
        ]);

        Review::insert([
            'course_id'=> $course_id, 
            'user_id'=> Auth::id(), 
            'comment'=> $request->comment, 
            'created_at'=> Carbon::now(), 
        ]);

        $notification=array(
            'message'=>'Your Review Added Our Site',
            'alert-type'=>'success'
            );
            return redirect()->back()->with($notification);
    }
}
