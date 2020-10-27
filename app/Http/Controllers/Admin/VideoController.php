<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Course;
use App\Models\Section;
use App\Models\Video;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
class VideoController extends Controller
{
    public function create(){
        $courses = Course::latest()->get();
        $categories = Category::latest()->get();
        $sections = Section::all();
        return view('admin.video.create',compact('courses','categories','sections'));
    }

    //store video 

    public function store(Request $request){
        $request->validate([
            'category_id' => 'required',
            'course_id' => 'required',
            'section_id' => 'required',
            'video_title' => 'required',
            'video_link' => 'required',
            'video_length' => 'required',
        ]);
        $image = $request->file('thambnail');
        $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(1280,720)->save('media/course/playlist/'.$name_gen);
        $save_url = 'media/course/playlist/'.$name_gen;

        Video::insert([
            'category_id' => $request->category_id,
            'course_id' => $request->course_id,
            'section_id' => $request->section_id,
            'video_title' => $request->video_title,
            'video_link' => $request->video_link,
            'thambnail' => $save_url,
            'video_length' => $request->video_length,
            'created_at' => Carbon::now()
        ]);
        $notification=array(
            'message'=>'Video insert Success',
            'alert-type'=>'success'
            );
            return Redirect()->to('admin/course/manage-video')->with($notification);
    }

    // all course section
    public function index(){
        // $videos = Video::with('course','category','section')->latest()->get();
        $courses = Course::latest()->get();
        return view('admin.video.index',compact('courses'));
    }

    ///course wise videos 
    public function courseWiseVideo($course_id,$slug){
           $videos = Video::with('course','category','section')->where('course_id',$course_id)->latest()->get();
           return view('admin.video.manage-video',compact('videos'));
    }

    
     //edit video 
     public function edit($id){
        $video = Video::findOrFail($id);
        $courses = Course::latest()->get();
        $categories = Category::latest()->get();
        $sections = Section::all();
        return view('admin.video.edit',compact('courses','categories','sections','video'));
      }

      //update video
      public function update(Request $request){
        $id = $request->id;
        $old_thamb = $request->old_img;

        $request->validate([
            'category_id' => 'required',
            'course_id' => 'required',
            'section_id' => 'required',
            'video_title' => 'required',
            'video_link' => 'required',
            'video_length' => 'required',
        ]);
        if($request->thambnail){
            unlink($old_thamb);
            $image = $request->file('thambnail');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1280,720)->save('media/course/playlist/'.$name_gen);
            $save_url = 'media/course/playlist/'.$name_gen;

            Video::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'course_id' => $request->course_id,
                'section_id' => $request->section_id,
                'video_title' => $request->video_title,
                'video_link' => $request->video_link,
                'thambnail' => $save_url,
                'video_length' => $request->video_length,
                'updated_at' => Carbon::now()
            ]);
            $notification=array(
                'message'=>'Video Update Success',
                'alert-type'=>'success'
                );
                return Redirect()->to('admin/course/manage-video')->with($notification);
        }else{
            Video::findOrFail($id)->update([
                'category_id' => $request->category_id,
                'course_id' => $request->course_id,
                'section_id' => $request->section_id,
                'video_title' => $request->video_title,
                'video_link' => $request->video_link,
                'thambnail' => $old_thamb,
                'video_length' => $request->video_length,
                'updated_at' => Carbon::now()
            ]);
            $notification=array(
                'message'=>'Video Update Success',
                'alert-type'=>'success'
                );
                return Redirect()->to('admin/course/manage-video')->with($notification);
        }
        
    }



    //delete
    public function delete($id){
        Video::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Video Delete Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }
}
