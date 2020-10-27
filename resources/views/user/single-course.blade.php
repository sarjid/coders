@extends('layouts.fontend-master')
@section('title')my-orders @endsection
@section('user-orders')active @endsection
@section('fontend-content')
  <!-- bootstrap v4.0.0 -->
  <link rel="stylesheet" href="{{ asset('learn/assets') }}/css/bootstrap.min.css">
  <!-- venobox css -->
  <link rel="stylesheet" href="{{ asset('learn/assets') }}/css/venobox.css">
  <!-- helper css -->
  <link rel="stylesheet" href="{{ asset('learn/assets') }}/css/helper.css">
<link rel="stylesheet" href="{{ asset('learn/assets') }}/css/learn-style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Enroll Course</li>
                </ul>
                <h2><span class="text-warning">{{ $course->course_slug }}</span> </h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

    <!--courses-area start-->
  <div class="courses-area pb-30 fix mt-60">
    <div class="container-fluid">
	<!--course-details start-->
	<div class="course-details-area mt-80">
		<div class="container">
			<div class="row">
				<div class="col-lg-7">
					<div class="course-details fix pb-10"><br>
						<div class="video-box mt-20 mb-40">
							<img src="{{ asset($orverview->thambnail) }}" alt="" />
							<a class="venobox play-btn style-2" data-gall="gall-video" data-autoplay="true" data-vbtype="video" href="https://youtu.be/{{ $orverview->video_link }}">
								<i class="fa fa-youtube-play" style="font-size: 40px;" aria-hidden="true"></i>
							</a>
						</div>
						<h3>Course Component</h3>
						<p>
              {!! $course->course_files !!}
            </p>
          </div>
          {{-- Course review part --}}
          <div class="col-lg-12 col-md-12">
            <form action="{{ route('course-review-store') }}" method="POST">
              @csrf
              <input type="hidden" value="{{ $course->id }}" name="course_id">
            <div class="form-group">
                <label>Write A Review<span class="required">*</span></label>
                  <textarea name="comment" id="notes" cols="50" rows="5" placeholder="write your review" class="form-control"  value="{{ old('comment') }}" data-validation="required" required></textarea>
                  @error('comment')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
            </div>
            <button class="btn btn-sm btn-danger mb-5">Submit</button>
          </form>
        </div>
				</div>
				<div class="col-lg-5">
					<div class="related-lessons mt-sm-40" style="overflow-y: scroll; height: 700px;">
						<h3 class="sidebar-title mb-30">All Videos</h3>
						<ul class="list-none">
              @foreach ($videos as $item)
                <li class="d-table">
                  <div class="related-thumb table-cell">
                    <a href="#"><img src="{{ asset($item->thambnail) }}" style="width:180px;"></a>
                    <a class="venobox play-btn style-3" data-gall="gall-video" data-autoplay="true" data-vbtype="video" href="https://www.youtube.com/watch?v={{ $item->video_link }}">
                      <i class="fa fa-youtube-play" style="font-size: 20px;" aria-hidden="true"></i>
                    </a>
                  </div>
                  <div class="related-desc table-cell">
                    <h4><a href="javascript::void(0)">{{ $item->video_title }}</a></h4>
                  </div>
                </li>
              @endforeach
						</ul>
					</div>
					<!--advertisement-->
				</div>
			</div>
		</div>
	</div>
	<!--course-details end-->
    </div>
  </div>
  <!--single course-area end-->
  
  <!-- jquery-3.3.1 version -->
  <script src="{{ asset('learn/assets') }}/js/vendor/jquery-3.3.1.min.js"></script>
  <!-- bootstra.min js -->
  <script src="{{ asset('learn/assets') }}/js/bootstrap.min.js"></script>
  <
  <!---venobox-js-->
  <script src="{{ asset('learn/assets') }}/js/venobox.min.js"></script>
 
  <!-- main js -->
  <script src="{{ asset('learn/assets') }}/js/main.js"></script>
@endsection
