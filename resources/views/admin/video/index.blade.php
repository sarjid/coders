@extends('layouts.admin-master')
@section('video')active menu-open @endsection
@section('manage-video')active @endsection
@section('admin-title')manage-video @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Manage Video</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Course List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Content Wrapper. Contains page content -->

      <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      
      <!-- Small Box (Stat card) -->
      <div class="row">
          @foreach ($courses as $item)
            <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
                <div class="inner">
                <h5>{{ $item->course_name }}<sup style="font-size: 20px"></sup></h5>
                @php
                    $total_videos = App\Models\Video::where('course_id',$item->id)->get();
                @endphp
                <p> {{ count($total_videos) }} Videos</p>
                </div>
                <div class="icon">
                <i class="ion ion-stats-bars"></i>
                </div>
                <a href="{{ url('admin/course/wise-videos/'.$item->id.'/'.$item->course_slug) }}" class="small-box-footer">
                More Details Course <i class="fas fa-arrow-circle-right"></i>
                </a>
            </div>
            </div>

            
        @endforeach
      </div>
      <!-- /.row -->
     
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->

</div>

@endsection