@extends('layouts.admin-master')
@section('course')active @endsection
@section('admin-title')course-update @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Course-Update</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Course</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- right column -->
        <div class="col-md-8 m-auto">
          <!-- general form elements disabled -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Update Course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('course-update') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $course->id }}">
                <input type="hidden" name="old_image" value="{{ $course->image }}">
              <div class="card-body">
                <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control select2" name="category_id" style="width: 100%;" data-placeholder="Select a State">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" {{ $course->category_id == $item->id ? 'selected':'' }} >{{ $item->category_name }}</option>
                    @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Course Name</label>
                  <input type="text" name="course_name" class="form-control @error('course_name') is-invalid @enderror" id="exampleInputEmail1" value="{{ $course->course_name }}" placeholder="Enter Category Name">
                  @error('course_name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Course Fee</label>
                  <input type="text" name="course_fee" class="form-control @error('course_fee') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Course Fee" value="{{ $course->course_fee }}">
                  @error('course_fee')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Course Requirements</label>
                    <textarea name="requirements"  class="form-control" id="" cols="30" rows="3">{{ $course->requirements }}</textarea>
                    @error('requirements')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">What Will Learn</label>
                    <textarea name="what_learn"  class="form-control" id="" cols="30" rows="3">{{ $course->what_learn }}</textarea>
                    @error('what_learn')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    
                      <img src="{{ asset($course->image) }}" style="height: 100px;" alt="">
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Course image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Nedded Component</label>
                    <textarea class="textarea" name="course_files"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $course->course_files }}</textarea>
                    @error('course_files')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Udpate</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
         
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
@endsection
