<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Intervention\Image\Facades\Image;

class ProfileController extends Controller
{
    //edit profile pagge
    public function editProfile(){
        return view('admin.profile.edit');
    }

  

    //update profile 
    public function updateProfile(Request $request){
        $request->validate([
            'name' => 'required|min:4',
            'email' => 'required|email',
        ]);
        $id = Auth::user()->id;
        if ($request->file('image')) {
            $request->validate([
                'image' => 'required|mimes:jpg,jpeg,png,gif'
            ]);
            if (User::findOrFail(Auth::id())->image == 'media/user/profile/1.jpg') {
                $image = $request->file('image');
                $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(580,610)->save('media/user/profile/'.$name_gen);
                $save_url = 'media/user/profile/'.$name_gen;
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'image' => $save_url,
                ]);
                $notification=array(
                    'message'=>'Profile Update Success',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
            }else{
                $old_img = $request->old_image;
                $image = $request->file('image');
                $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
                Image::make($image)->resize(580,610)->save('media/user/profile/'.$name_gen);
                $save_url = 'media/user/profile/'.$name_gen;
                unlink($old_img);
                User::find($id)->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'image' => $save_url,
                ]);
                $notification=array(
                    'message'=>'Profile Update Success',
                    'alert-type'=>'success'
                );
                return Redirect()->back()->with($notification);
            }
        }else{
            User::findOrFail($id)->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            $notification=array(
                'message'=>'Profile Update Success',
                'alert-type'=>'success'
            );
            return Redirect()->back()->with($notification);
        }
    }

      //password page
      public function passPage(){
        return view('admin.profile.password');
    }
    
//    update password 
  public function updatePass(Request $request){
    $id = Auth::id();
    $db_pass = Auth::user()->password;
    $old_pass = $request->old_password;
    $new_pass = $request->new_password;
    $confirm_pass = $request->confirm_password;

    if(Hash::check($old_pass, $db_pass)){

        if($new_pass === $confirm_pass){

            User::findOrFail($id)->update([
                'password' => Hash::make($request->new_password)
            ]);
            Auth::logout();
            $notification=array(
                'message'=>'Password Change Successfully.! Now login With New Password',
                'alert-type'=>'success'
            );
            return redirect()->route('login')->with($notification);

        }else{
            return redirect()->back()->with('danger','new password and confirm passoword not same');
        }

    }else{
        $notification=array(
            'message'=>'Old Password Not Match',
            'alert-type'=>'error'
            );
            return redirect()->back()->with($notification);
    }
  }
}
