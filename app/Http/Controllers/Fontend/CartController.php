<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use response;

class CartController extends Controller
{
    public function addToCart($id){
        
       $course =  Course::where('id',$id)->first();
        $exist = Cart::content()->where('id',$id)->first();
        if ($exist) {
            return response()->json(['error' => 'Course Already Has On Your Cart']);
        }else{
            if (Session::has('coupon')) {
                session()->forget('coupon');
            }
            $data = array();
            $data['id'] = $id;
            $data['name'] = $course->course_name;
            $data['price'] = $course->course_fee;
            $data['weight'] = 1;
            $data['qty'] = 1;
            $data['options']['image'] = $course->image;
            Cart::add($data);
            return response()->json(['success' => 'Course Added on your Cart']);
        }

    }

    //---------------- Buy Now-------------------
    public function buyNow($id){
        $course =  Course::where('id',$id)->first();
        $exist = Cart::content()->where('id',$id)->first();
        if ($exist) {
            return redirect()->to('cart');
        }else{
            if (Session::has('coupon')) {
                session()->forget('coupon');
            }
            $data = array();
            $data['id'] = $id;
            $data['name'] = $course->course_name;
            $data['price'] = $course->course_fee;
            $data['weight'] = 1;
            $data['qty'] = 1;
            $data['options']['image'] = $course->image;
            Cart::add($data);
            return redirect()->to('cart');
        }
    }


    public function countQty(){
        $qty = Cart::count();
        return response()->json($qty);
    }

    // cart page
    public function cartPage(){
        
        $qty = Cart::count();
        if ($qty == 0) {
            $notification=array(
                'message'=>'Cart Is Empty',
                'alert-type'=>'error'
                );
                return Redirect()->to('/')->with($notification);
        }else{

            $carts = Cart::content();
            return view('fontend.cart-page',compact('carts'));
        }
    }

    // -------------------- cart page function will be go here ---------------
    public function cartAll(){
        $cart = Cart::content();
        $countQty = Cart::count();
        $total = Cart::total();
        return response()->json(array(
            'cart' => $cart,
            // 'countqty' => $countQty,
            'total' => $total,
            
        ));
    }
    //remove cart item 
    public function removeCartItem($id){
        // Cart::destroy();
        Cart::remove($id);
        if (Session::has('coupon')) {
            session()->forget('coupon');
        }
        return response()->json(['success' => 'Course Remove From Your Cart']);
    }

    
}
