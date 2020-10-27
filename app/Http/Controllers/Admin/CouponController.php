<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
   public function index(){
       $coupons = Coupon::latest()->get();
       return view('admin.coupon.index',compact('coupons'));
   }

   //store coupon
    public function store(Request $request){
        $request->validate([
            'coupon_name' => 'required',
            'discount' => 'min:1|max:99',
            'validity' => 'required'
        ]);

        Coupon::insert([
            'coupon_name' => strtoupper($request->coupon_name),
            'discount' => $request->discount,
            'validity' => $request->validity,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Coupon insert Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }

    //edit coupon 
    public function edit($id){
        $coupon = Coupon::findOrFail($id);
        return view('admin.coupon.edit',compact('coupon'));
    }

    //update coupon 
    public function update(Request $request){
        $id = $request->id;
        $request->validate([
            'coupon_name' => 'required',
            'discount' => 'min:1|max:99',
            'validity' => 'required'
        ]);

        Coupon::findOrFail($id)->update([
            'coupon_name' => strtoupper($request->coupon_name),
            'discount' => $request->discount,
            'validity' => $request->validity,
            'updated_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Coupon Update Success',
            'alert-type'=>'success'
            );
            return Redirect()->to('admin/coupon')->with($notification);
    }

    //delete 
    public function delete($id){
        Coupon::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Coupon Delete Success',
            'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
    }
}
