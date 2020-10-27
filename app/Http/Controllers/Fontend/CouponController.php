<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CouponController extends Controller
{
    public function applyCoupon(Request $request){
        $check = Coupon::where('coupon_name',$request->coupon_name)->first();
        $total = Cart::total();
        if ($check) {
            $coupon_validity = $check->validity >= Carbon::now()->format('Y-m-d');
            if ($coupon_validity) {
              Session::put('coupon',[
                  'coupon_name' => $check->coupon_name,
                  'discount' => $check->discount,
                  'discount_amount' => round($total * ($check->discount/100)),
              ]); 
                return response()->json(array(
                    'coupon_validity' => $coupon_validity,
                    'success' => 'Successfully Coupon Applied'
                ));

            }else{
                return response()->json(['error' => 'Your Coupon Is Not Valid']);
                // date expire coupon 
            }
        }else{
            return response()->json(['error' => 'Your Coupon Is Not Valid']);
        }
    }

    //after apply coupon & calculate Carts total
    public function couponCal(){
        if (Session::has('coupon')) {
            $subtotal = Cart::total();
            $coupon_name = session()->get('coupon')['coupon_name'];
            $discount = session()->get('coupon')['discount'];
            $discount_amount = session()->get('coupon')['discount_amount'];
            return response()->json(array(
                'subtotal' => $subtotal,
                'coupon_name' => $coupon_name,
                'discount' => $discount,
                'discount_amount' => $discount_amount,
            ));
        }else {
            $total = Cart::total();
            return response()->json(array(
                'total' => $total
            ));
        }
    }

    //remove coupon 
    public function removeCoupon(){
        if (Session::has('coupon')) {
           session()->forget('coupon');
           return response()->json(['success' => 'Coupon Removed Success']);
        }
    }
}
