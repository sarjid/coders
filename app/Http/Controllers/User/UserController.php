<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\AdditionalInfo;
use App\Models\Billing;
use App\Models\Course;
use App\Models\Enroll;
use App\Models\Order;
use App\Models\Orderdetail;
use App\Models\Section;
use App\Models\Video;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;
 use Torann\GeoIP\Facades\GeoIP;
class UserController extends Controller
{
    public function index(){
        $enroll = Enroll::where('user_id',Auth::id())->get();
        return view('user.home',compact('enroll'));
    }
    // ------------------- orders -----------------
    public function myOrders(){
        $orders = Order::where('user_id',Auth::id())->latest()->get();
        return view('user.orders',compact('orders'));
    }

    // view orders 
    public function orderView($payemnt_id){
        $order = Order::where('user_id',Auth::id())->where('payment_id',$payemnt_id)->first();
        $courses = Orderdetail::where('order_id',$order->id)->latest()->get();
        $billing = Billing::where('order_id',$order->id)->first();
        return view('user.order-view',compact('order','courses','billing'));
    }
    // ===================== my course ============== 
    public function myCourse(){
        $courses = Enroll::with('course')->where('user_id',Auth::id())->orderBy('id','DESC')->get();
        return view('user.course',compact('courses'));
    }

    //single course or enroll course details
    public function singleCourse($course_id,$course){
        $exist = Enroll::where('course_id',$course_id)->where('user_id',Auth::id())->first();
        if ($exist) {
            $videos = Video::where('course_id',$course_id)->get();
            $course = Course::findOrFail($course_id);
            $require = $course->requirements;
            $requirements = explode(',',$require);
            $learn = $course->what_learn;
            $learns = explode(',',$learn);
            $orverview= Video::where('course_id',$course_id)->first();
            $sections = Section::where('course_id',$course_id)->get();
          return view('user.single-course',compact('videos','course','requirements','learns','orverview','sections'));
          
        }else{
           return redirect()->route('user.dashboard');
        }
    }
// ---------------- edit profile ------------------- 
    public function editProfile(){
        return view('user.edit-profile');
    }

    // ================ update profile =============== 
    public function updateProfile(Request $request){
      
        $request->validate([
            'name' => 'required|min:4|max:255',
            'email' => 'required',
            'phone' => 'required|numeric|min:11',
        ]);

        if (User::findOrFail(Auth::id())->email == $request->email) {
            User::findOrFail(Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
    
            $notification=array(
                'message'=>'Profile Updated',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }else{
            $request->validate([
                'email' => 'required|unique:users,email|max:255',
            ]);

            User::findOrFail(Auth::id())->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
            ]);
            $notification=array(
                'message'=>'Profile Updated',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);

        }
       
    }
    // -------------------- change profile picture --------------- 
    public function updateImage(Request $request){
       
        $request->validate([
            'image' => 'required|mimes:png,jpg,jpeg',
        ]);
      
        if (User::findOrFail(Auth::id())->image == 'media/user/profile/1.jpg') {
            $image = $request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(580,610)->save('media/user/profile/'.$name_gen);
            $save_url = 'media/user/profile/'.$name_gen;
            User::findOrFail(Auth::id())->update([
                'image' => $save_url
            ]);
            $notification=array(
                'message'=>'Image Upload Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }else{
            $image = $request->file('image');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(580,610)->save('media/user/profile/'.$name_gen);
            $save_url = 'media/user/profile/'.$name_gen;
            unlink(Auth::user()->image);
            User::findOrFail(Auth::id())->update([
                'image' => $save_url
            ]);
            $notification=array(
                'message'=>'Image Upload Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

    // ------------------- additional information ------------ 
    public function addtionalInfo(){
        $exist = AdditionalInfo::where('user_id',Auth::id())->first();
        $info = AdditionalInfo::with('users')->where('user_id',Auth::id())->first();
        return view('user.additional-info',compact('exist','info'));
    }

    // --------------------- addditional information addd --------- 
    public function addInAdd(){
        $ip = GeoIP::getLocation(request()->ip());
        return view('user.additional-info-add',compact('ip'));
    }
    // ---------- addditional information store -------------- 
    public function infStore(Request $request){
        AdditionalInfo::insert([
            'user_id' => Auth::id(),
            'institute' => $request->institute,
            'address' => $request->address,
            'zipcode' => $request->zipcode,
            'country' => $request->country,
            'city' => $request->city,
            'gender' => $request->gender,
       ]);
       $notification=array(
        'message'=>'insert Success',
        'alert-type'=>'success'
        );
        return Redirect()->route('additional-info')->with($notification);
    }
    // ---------------- edit additional info ------------ 
    public function addInEdit(){
        $info = AdditionalInfo::with('users')->where('user_id',Auth::id())->first();
        return view('user.additional-info-edit',compact('info'));
    }

    public function addInUpdate(Request $request){

           AdditionalInfo::where('user_id',Auth::id())->update([
                'institute' => $request->institute,
                'address' => $request->address,
                'zipcode' => $request->zipcode,
                'country' => $request->country,
                'city' => $request->city,
                'gender' => $request->gender,
           ]);
           $notification=array(
            'message'=>'Updated Success',
            'alert-type'=>'success'
            );
            return Redirect()->route('additional-info')->with($notification);
    }

    //user password page 
    public function passwordPage(){
        return view('user.password');
    }

    //update password
    public function updatePassword(Request $request){
        $request->validate([
            'old_password' =>'required',
            'new_password' => 'required|min:8',
            'confirm_password' => 'required|min:8|'
        ]);
        
        $db_pass = Auth::user()->password;
        $current_pass = $request->old_password;
        $new_password = $request->new_password;
        $confirm_pass = $request->confirm_password;
        if (Hash::check($current_pass,$db_pass)) {
            if ($new_password === $confirm_pass) {
                User::findOrFail(Auth::id())->update([
                    'password' => Hash::make($new_password)
                ]);
                Auth::logout();
                $notification=array(
                    'message'=>'Password Changed Success,Now Login With Your New Password',
                    'alert-type'=>'success'
                    );
                    return Redirect()->route('login')->with($notification);
            }else { 
                $notification=array(
                    'message'=>'New Password And Re-Type Password Not Match',
                    'alert-type'=>'error'
                    );
                    return Redirect()->back()->with($notification);
            }
        }else {
            $notification=array(
                'message'=>'Old Password Not Match',
                'alert-type'=>'error'
                );
                return Redirect()->back()->with($notification);
        }
    }


}
