<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Section;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    //index
    public function index(){
        // $sections = Section::with('course')->get();
        // $courses = Course::latest()->get();
        $courses = Course::latest()->get();
        return view('admin.section.index',compact('courses'));
    }

    //course wise section
    public function couseWiseSection($course_id,$slug){
        $sections = Section::with('course')->where('course_id',$course_id)->latest()->get();
        $courses = Course::latest()->get();
        return view('admin.section.all-section',compact('courses','sections'));
    }

     //store Section 

     public function store(Request $request){
        $request->validate([
            'course_id' => 'required',
            'section_name' => 'required',
        ]);

        Section::insert([
            'course_id' => $request->course_id,
            'section_name' => ucwords($request->section_name),
            'created_at' => Carbon::now()
        ]);
        $notification=array(
            'message'=>'Section insert Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

    //edit section 
    public function edit($id){
        $section = Section::findOrFail($id);
        $courses = Course::latest()->get();
        return view('admin.section.edit',compact('section','courses'));
      }

    //update data 
    public function update(Request $request){
        $id = $request->id;

        $request->validate([
            'course_id' => 'required',
            'section_name' => 'required',
        ]);

        Section::findOrFail($id)->update([
            'course_id' => $request->course_id,
            'section_name' => ucwords($request->section_name),
            'updated_at' => Carbon::now()
        ]);
        $notification=array(
            'message'=>'Section Update Success',
            'alert-type'=>'success'
            );
            return Redirect()->to('admin/course/section')->with($notification);
    }

    //delete data 

    public function delete($id){
        Section::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Section Delete Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

    // get section by ajax 
    public function ajaxSection($course_id){
      $section =  Section::where('course_id',$course_id)->latest()->get();
        return json_encode($section);
    }
}
