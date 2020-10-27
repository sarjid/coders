<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Enroll;
use App\User;
use Illuminate\Http\Request;

class EnrollController extends Controller
{
   public function index(){
       $enrolls = Enroll::with('course')->groupBy('course_id')->select('course_id')->latest()->get();
       return view('admin.enroll.index',compact('enrolls'));
   }

   //enroll details
   public function enrollDetails($course_id){
       $enrolls = Enroll::with('user')->where('course_id',$course_id)->latest()->get();
       return view('admin.enroll.details',compact('enrolls'));
   }
}
