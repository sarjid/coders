<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Section;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class CourseController extends Controller
{
    //index
    public function index(){
        $categories = Category::latest()->get();
        $courses = Course::latest()->get();
        return view('admin.course.index',compact('courses','categories'));
    }

     //store course 

     public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'course_name' => 'required',
            // 'course_fee' => 'required',
            'requirements' => 'required',
            'what_learn' => 'required',
        ]);
        $image = $request->file('image');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(600,485)->save('media/course/'.$name_gen);
        $save_url = 'media/course/'.$name_gen;
        Course::insert([
            'category_id' => $request->category_id,
            'course_fee' => $request->course_fee,
            'course_name' => ucwords($request->course_name),
            'course_slug' =>  strtolower(str_replace(' ','-', $request->course_name)),
            'requirements' => $request->requirements,
            'what_learn' => $request->what_learn,
            'image' => $save_url,
            'course_files' => $request->course_files,
            'created_at' => Carbon::now()
        ]);
        $notification=array(
            'message'=>'Course insert Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

     //edit course 
     public function edit($id){
        $course = Course::findOrFail($id);
        $categories = Category::latest()->get();
        return view('admin.course.edit',compact('course','categories'));
      }
  
      //update 
      public function update(Request $request){
        $id = $request->id;
        $old_img = $request->old_image;

        $request->validate([
            'category_id' => 'required',
            'course_name' => 'required',
            // 'course_fee' => 'required',
            'requirements' => 'required',
            'what_learn' => 'required',
        ]);

        if ($request->file('image')) {
            unlink($old_img);
            
            $image = $request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(600,485)->save('media/course/'.$name_gen);
            $save_url = 'media/course/'.$name_gen;

            Course::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'course_name' => ucwords($request->course_name),
                'course_slug' =>  strtolower(str_replace(' ','-', $request->course_name)),
                'course_fee' => $request->course_fee,
                'requirements' => $request->requirements,
                'what_learn' => $request->what_learn,
                'image' => $save_url,
                'course_files' => $request->course_files,
                'updated_at' => Carbon::now()
            ]);
            $notification=array(
                'message'=>'Course Update Success',
                'alert-type'=>'success'
                );
                return Redirect()->to('admin/course')->with($notification);
        }else {
            
            Course::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'course_name' => ucwords($request->course_name),
                'course_slug' =>  strtolower(str_replace(' ','-', $request->course_name)),
                'course_fee' => $request->course_fee,
                'requirements' => $request->requirements,
                'what_learn' => $request->what_learn,
                'image' => $old_img,
                'course_files' => $request->course_files,
                'updated_at' => Carbon::now()
            ]);
            $notification=array(
                'message'=>'Course Update Success',
                'alert-type'=>'success'
                );
                return Redirect()->to('admin/course')->with($notification);
        }
    }

      //delete Course 
      public function delete($id){
        $img = Course::findOrFail($id);
        $old_img = $img->image;
        unlink($old_img);
        Course::findOrFail($id)->delete();
        Section::where('course_id',$id)->delete();
        Video::where('course_id',$id)->delete();
        $enroll = Enroll::where('course_id',$id)->first();
        if ($enroll) {
            $enroll = Enroll::where('course_id',$id)->delete();
        }
        
        $notification=array(
            'message'=>'Course Delete Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }
}
