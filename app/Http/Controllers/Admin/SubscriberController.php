<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
   public function index(){
       $subscribers = Newsletter::orderBy('id','DESC')->get();
       return view('admin.subsriber.index',compact('subscribers'));
   }

   //delete 
   public function destroy($id){
       Newsletter::findOrFail($id)->delete();
       $notification=array(
        'message'=>'Deleted Done',
        'alert-type'=>'success'
        );
        return Redirect()->back()->with($notification);
   }
}
