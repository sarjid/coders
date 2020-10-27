<?php

namespace App\Http\Controllers\Fontend;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
   public function reviewPage(){
    $reviews = Review::with('user')->orderBy('id','DESC')->get();
    $reviews2 = Review::with('user')->get();
       return view('fontend.review-page',compact('reviews','reviews2'));
   }
}
