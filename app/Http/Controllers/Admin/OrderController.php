<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Enroll;
use App\Models\Order;
use App\Models\Orderdetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class OrderController extends Controller
{
    //---------------------------------pending orders--------------------------------
    public function pendingOrders(){
        $orders = Order::where('status',0)->latest()->get();
        return view('admin.order.pending',compact('orders'));
    }

    //order view
    public function orderView($order_id){
        $order = Order::findOrFail($order_id);
        $billing = Billing::where('order_id',$order_id)->first();
        $orderdetails = Orderdetail::with('course')->where('order_id',$order_id)->latest()->get(); 
        return view('admin.order.view-order',compact('order','billing','orderdetails'));
    }

    //accept enrolll now
    public function enrollAccept($order_id){
        $user = Order::findOrFail($order_id);
        $user_id = $user->user_id;
        $orderdetails = Orderdetail::where('order_id',$order_id)->latest()->get();
        foreach ($orderdetails as $course) {
           Enroll::insert([
            'course_id' => $course->course_id,
            'user_id' => $user_id,
            'order_id' => $course->order_id,
            'created_at' => Carbon::now(),
           ]);  
        }

        Order::findOrFail($order_id)->update([
            'status' => '1',
            'updated_at' => Carbon::now()
        ]);

        $notification=array(
            'message'=>'Order Accepted Done',
            'alert-type'=>'success'
            );
            return Redirect()->to('admin/orders-pending')->with($notification);

    }

    //delete
    public function pendingDelete($order_id){
        Order::where('id',$order_id)->where('status',0)->delete();
        Billing::where('order_id',$order_id)->delete();
        Orderdetail::where('order_id',$order_id)->delete();
        $notification=array(
            'message'=>'Order Deleted Done',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

    //---------------------------------confirm orders-----------------------------------
     public function confirmOrders(){
        $orders = Order::where('status',1)->latest()->get();
        return view('admin.order.confirmed',compact('orders'));
    }

        //delete
        public function confirmDelete($order_id){
            Order::where('id',$order_id)->where('status',1)->delete();
            Billing::where('order_id',$order_id)->delete();
            Orderdetail::where('order_id',$order_id)->delete();
            $notification=array(
                'message'=>'Order Deleted Done',
                'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
        }
}
