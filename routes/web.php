<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','Fontend\IndexController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//-------------------------------admin routes-------------------------------------- 
Route::group(['prefix'=>'admin','middleware' =>['admin','auth'],'namespace'=>'Admin'], function(){
    Route::get('dashboard','AdminController@index')->name('admin.dashboard');
    //category
    Route::get('category','CategoryController@index');
    Route::post('category-store','CategoryController@store')->name('category-store');
    Route::get('category-edit/{id}','CategoryController@edit');
    Route::post('category-update','CategoryController@update')->name('category-update');
    Route::get('category-delete/{id}','CategoryController@delete');
    //course
    Route::get('course','CourseController@index');
    Route::post('course-store','CourseController@store')->name('course-store');
    Route::get('course-edit/{id}','CourseController@edit');
    Route::post('course-update','CourseController@update')->name('course-update');
    Route::get('course-delete/{id}','CourseController@delete');
    //course video section
    Route::get('course/section','SectionController@index');
    Route::get('course/section-all/{id}/{slug}','SectionController@couseWiseSection');
    Route::post('section-store','SectionController@store')->name('section-store');
    Route::get('section-edit/{id}','SectionController@edit');
    Route::post('section-update','SectionController@update')->name('section-update');
    Route::get('section-delete/{id}','SectionController@delete');
    Route::get('section/get/ajax/{course_id}','SectionController@ajaxSection');
    //upload course video
    Route::get('course/add-video','VideoController@create');
    Route::post('course/video-store','VideoController@store')->name('course-video-store');
    Route::get('course/manage-video','VideoController@index');
    Route::get('course/wise-videos/{id}/{slug}','VideoController@courseWiseVideo');
    Route::get('course/video-edit/{id}','VideoController@edit');
    Route::post('course/video-update','VideoController@update')->name('course-video-update');
    Route::get('course/video-delete/{id}','VideoController@delete');
   //coupon
   Route::get('coupon','CouponController@index');
   Route::post('coupon-store','CouponController@store')->name('coupon-store');
   Route::get('coupon-edit/{id}','CouponController@edit');
   Route::post('coupon-update','CouponController@update')->name('coupon-update');
   Route::get('coupon-delete/{id}','CouponController@delete');
   //pending orders
   Route::get('orders-pending','OrderController@pendingOrders');
   Route::get('pending/order-view/{id}','OrderController@orderView');
   Route::get('enroll-accept/{order_id}','OrderController@enrollAccept');
   Route::get('pending/order-delete/{id}','OrderController@pendingDelete');
   //confirmed orders 
   Route::get('orders-confirm','OrderController@confirmOrders');
   Route::get('confirm/order-delete/{id}','OrderController@confirmDelete');
   //enroll 
   Route::get('enroll/student','EnrollController@index');
   Route::get('enroll/course-details/{id}','EnrollController@enrollDetails');
   //subsriber
   Route::get('subscriber/all','SubscriberController@index');
   Route::get('subscriber-delete/{id}','SubscriberController@destroy');
   //message
   Route::get('messages/all','MessageController@index');
   Route::get('message-view/{id}','MessageController@viewMsg');
   Route::get('message-delete/{id}','MessageController@destroy');
   //profile
   Route::get('settings/profile-edit','ProfileController@editProfile');
   Route::post('profile-update','ProfileController@updateProfile');
   Route::get('password/change','ProfileController@passPage');
   Route::post('password-update','ProfileController@updatePass');
  
});

// ---------------------------------- user Routes ---------------------------------
Route::group(['prefix'=>'user','middleware' =>['user','auth'],'namespace'=>'User'], function(){
    Route::get('dashboard','UserController@index')->name('user.dashboard');
    Route::get('orders','UserController@myOrders')->name('user-orders');
    Route::get('order-view/{payment_id}','UserController@orderView');
    Route::get('enroll-courses','UserController@myCourse')->name('user-course');
    Route::get('single-course/{course_id}/{course}','UserController@singleCourse');
    Route::get('profile/edit','UserController@editProfile')->name('edit-profile');
    Route::post('profile/update','UserController@updateProfile')->name('user-update-profile');
    Route::post('profile/image','UserController@updateImage')->name('user-profile-image');
    Route::get('additional-info','UserController@addtionalInfo')->name('additional-info');
    Route::get('additional-info-add','UserController@addInAdd')->name('additional-info-add');
    Route::post('additional-info-store','UserController@infStore')->name('additional-info-store');
    Route::get('additional-info-edit','UserController@addInEdit')->name('additional-info-edit');
    Route::post('additional-update','UserController@addInUpdate')->name('additional-info-update');
    Route::get('password','UserController@passwordPage')->name('user-password');
    Route::post('password/update','UserController@updatePassword')->name('user-update-password');
    //course enroll for free
    Route::post('enroll/for-free','AccountController@enrollFree')->name('enroll-free');
    // write review 
    Route::post('course/review-store','AccountController@storeCourseReview')->name('course-review-store');
});

// ================ fontend routes ===============
Route::get('course','Fontend\CourseController@index');
Route::get('blog','Fontend\BlogController@index');
Route::get('contact','Fontend\ContactController@index');
Route::get('course/details/{id}/{slug}','Fontend\CoursedetailsController@detailsPage');
//add to cart
Route::get('/add-to/cart/{id}','Fontend\CartController@addToCart');
Route::get('/cart/qty','Fontend\CartController@countQty');
//buy now
Route::get('buy-now/{id}','Fontend\CartController@buyNow');

// cart page 
Route::get('cart','Fontend\CartController@cartPage');
Route::get('/cart/all','Fontend\CartController@cartAll');
Route::get('/remove/cart/item/{id}','Fontend\CartController@removeCartItem');
// coupon
Route::post('/coupon/apply','Fontend\CouponController@applyCoupon');
Route::get('/coupon/calculation','Fontend\CouponController@couponCal');
Route::get('/coupon/remove','Fontend\CouponController@removeCoupon');
//chekout
Route::get('checkout','Fontend\CheckoutController@checkoutPage');
//
Route::post('payment/process','Fontend\PaymentController@paymentPage');
Route::post('order/store','Fontend\PaymentController@oderStore');
//review
Route::get('review','Fontend\ReviewController@reviewPage');
//send message
Route::post('send/message','Fontend\MessageController@sendMessage');
Route::post('subscirbe/newsletter','Fontend\MessageController@subscribeNewsletter');
