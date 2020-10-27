<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    //index
    public function index(){
        $messages = Message::where('status',1)->orderBy('id','DESC')->get();
        return view('admin.message.index',compact('messages'));
    }
    //view smg
    public function viewMsg($id){
       $message = Message::findOrFail($id);
       Message::findOrFail($id)->update([
            'status' => 1,
       ]);
        return view('admin.message.view',compact('message'));
    }

    //delete 
    public function destroy($id){
        Message::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Message Delete Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }
}
