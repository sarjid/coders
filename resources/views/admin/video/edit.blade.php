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
            <h1 class="m-0 text-dark">Update Course Video</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Course Video</li>
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
         
              <!-- general form elements disabled -->
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add New Video</h3>
                  <a href="{{ url('admin/course/manage-video') }}" class="btn btn-danger" style="float: right;">All Video</a>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form role="form" action="{{ route('course-video-update') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $video->id }}">
                    <input type="hidden" name="old_img" value="{{ $video->thambnail }}">
                  <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2" name="category_id" style="width: 100%;" data-placeholder="Select a State">
                                @foreach ($categories as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $video->category_id ? 'selected':'' }}>{{ $item->category_name }}</option>
                                @endforeach
                                </select>
                                @error('category_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                              </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Select Course</label>
                                <select class="form-control select2" name="course_id" style="width: 100%;" data-placeholder="Select a State">
                                @foreach ($courses as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $video->course_id ? 'selected':'' }}>{{ $item->course_name }}</option>
                                @endforeach
                                </select>
                                @error('course_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                       
                         <div class="col-md-4">
                            <div class="form-group">
                                <label>Select Section</label>
                                <select class="form-control select2" name="section_id" style="width: 100%;" data-placeholder="Select a State">
                                @foreach ($sections as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $video->section_id ? 'selected':'' }}>{{ $item->section_name }}</option>
                                @endforeach
                                </select>
                                @error('section_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>

                        
                        
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Video Title</label>
                                <textarea name="video_title" class="form-control" id="exampleInputEmail1" cols="30" rows="3" placeholder="title">{{ $video->video_title }}</textarea>
                                @error('video_title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Video Link</label>
                                {{-- <input type="text" name="video_link" class="form-control @error('video_link') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Video Link"> --}}
                                <textarea name="video_link" class="form-control" id="exampleInputEmail1" cols="30" rows="3" placeholder="Embed Code">{{ $video->video_link }}</textarea>
                                @error('video_link')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Video Length</label>
                              <input type="text" name="video_length" class="form-control @error('video_length') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Video Length" value="{{ $video->video_length }}">
                              @error('video_length')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>

                        <div class="col-md-4">
                          <div class="form-group">
                              <label for="exampleInputEmail1">Change Thambnail</label>
                              <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" id="exampleInputEmail1">
                              @error('image')
                                  <span class="text-danger">{{ $message }}</span>
                              @enderror
                          </div>
                      </div>

                      <div class="col-md-4">
                        <div class="form-group">
                            <img src="{{ asset($video->thambnail) }}" style="height: 90px;" alt="">
                        </div>
                    </div>
                    </div>
                    <!-- /.row -->
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Update Video</button>
                  </div>
                </form>
              </div>
              <!-- /.card -->
         
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>

@endsection