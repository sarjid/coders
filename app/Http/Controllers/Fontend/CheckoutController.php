<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class CheckoutController extends Controller
{
  public function checkoutPage(){
      if (Auth::check()) {
         if (Cart::count() == 0) {
            return redirect()->to('/');
         }else{
             $carts = Cart::content();
             $subtotal = Cart::total();
             return view('fontend.checkout-page',compact('carts','subtotal'));
         }
      }else{
        $notification=array(
            'message'=>'You Need To Login First',
            'alert-type'=>'error'
            );
            return redirect()->route('login')->with($notification);
      }
  }
}
