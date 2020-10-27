<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Message;
use App\Models\Newsletter;
use App\Models\Review;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   public function sendMessage(Request $request){
       $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required',
        'subject' => 'required',
        'message' => 'required',
       ]);

       Message::insert([
        'name' => $request->name,
        'email' => $request->email,
        'phone' => $request->phone,
        'subject' => $request->subject,
        'message' => $request->message,
        'created_at' => Carbon::now()
       ]);

       $notification=array(
        'message'=>'Successfully Message Send',
        'alert-type'=>'success'
        );
        return redirect()->back()->with($notification);
      
   }

//    -------------------------------- Newsletter ----------------------
   public function subscribeNewsletter(Request $request){
       $request->validate([
        'email' => 'required'
       ]);
       $exist = Newsletter::where('email',$request->email)->first();
       
       if ($request->email === $exist->email) {
                $notification=array(
                'message'=>'You Are Already Subscribed',
                'alert-type'=>'error'
                );
            return redirect()->back()->with($notification);
       }else{
                Newsletter::insert([
                    'email' => $request->email,
                    'created_at' => Carbon::now()
                ]);

            $notification=array(
                'message'=>'Successfully Subscribe',
                'alert-type'=>'success'
                );
            return redirect()->back()->with($notification);
       }
     
   }
}
