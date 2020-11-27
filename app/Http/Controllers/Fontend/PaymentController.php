<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Billing;
use App\Models\Order;
use App\Models\Orderdetail;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
   // data from checkout page and get payment page 
   public function paymentPage(Request $request){
    $request->validate([
      'first_name' => 'required',
      'last_name' => 'required',
      'email' => 'required',
      'phone' => 'required',
      'institute_name' => 'required',
      'address' => 'required',
      'state' => 'required',
      'post_code' => 'required|numeric',
      'order_notes' => 'required',
      'payment_method' => 'required',
    ],[
      'payment_method.required' => 'select any payment method',
    ]);

      $data = array();
      $data['first_name'] = $request->first_name;
      $data['last_name'] = $request->last_name;
      $data['email'] = $request->email;
      $data['phone'] = $request->phone;
      $data['institute_name'] = $request->institute_name;
      $data['address'] = $request->address;
      $data['state'] = $request->state;
      $data['post_code'] = $request->post_code;
      $data['order_notes'] = $request->order_notes;

      $carts = Cart::content();
      $subtotal = Cart::total();
      if ($request->payment_method == 'bkash') {
         return view('fontend.payment.bkash',compact('data','carts','subtotal'));
      }elseif($request->payment_method == 'rocket'){
        return view('fontend.payment.rocket',compact('data','carts','subtotal'));
      }else{
        return view('fontend.payment.shurecash',compact('data','carts','subtotal'));
      }
   } 

   // ----------------------- Order Store ---------------------- 
   public function oderStore(Request $request){
      $request->validate([
        'tnx_id' => 'required',
        'payment_no' => 'required',
      ]);
       $order_id = Order::insertGetId([
            'user_id' => Auth::id(),
            'payment_id' => mt_rand(100000,999999),
            'payment_type' => $request->payment_type,
            'tnx_id' => $request->tnx_id,
            'payment_no' => $request->payment_no,
            'order_total' => $request->order_total,
            'subtotal' => $request->subtotal,
            'discount' => $request->discount,
            'discount_amount' => $request->discount_amount,
            'coupon_name' => $request->coupon_name,
            'order_notes' => $request->order_notes,
            'status' => 0,
            'order_date' => Carbon::now()->format('d F Y'),
            'created_at' => Carbon::now(),
       ]);

       Billing::insert([
         'order_id' => $order_id,
         'first_name' => $request->first_name,
         'last_name' => $request->last_name,
         'email' => $request->email,
         'phone' => $request->phone,
         'institute_name' => $request->institute_name,
         'address' => $request->address,
         'state' => $request->state,
         'post_code' => $request->post_code,
         'order_notes' => $request->order_notes,
         'created_at' => Carbon::now(),
       ]);

       $carts = Cart::content();
       foreach ($carts as $cart) {
            Orderdetail::insert([
               'order_id' => $order_id,
               'course_id' => $cart->id,
               'course_name' => $cart->name,
               'price' => $cart->price,
               'created_at' => Carbon::now(),
            ]);
       }

         if (session()->has('coupon')) {
          session()->forget('coupon');
        }

       Cart::destroy();
       $notification=array(
        'message'=>'Order Completed',
        'alert-type'=>'success'
    );
    return Redirect()->route('user-orders')->with($notification);

   }
}
