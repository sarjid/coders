@extends('layouts.admin-master')
@section('course')active @endsection
@section('admin-title')course @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Course-List</h1>
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
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Course list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Image</th>
                  <th>Course Name</th>
                  <th>Course Price</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $serial = 1;
                    @endphp
                @foreach ($courses as $item)
                <tr>
                    <td>{{ $serial++ }}</td>
                    <td>
                      <img src="{{ asset($item->image) }}" style="height:60px;" alt="">
                    </td>
                    <td>{{ $item->course_name }}</td>
                    <td>{{ $item->course_fee }}.tk</td>
                    {{-- <td>
                        <textarea disabled class="form-control" id="" cols="30" rows="3">{{ $item->requirements }}</textarea>
                    </td> --}}
                    {{-- <td>
                        <textarea  disabled class="form-control" id="" cols="30" rows="3">{{ $item->what_learn }}</textarea>
                    </td> --}}
                    <td>
                        <a href="{{ url('admin/course-edit/'.$item->id) }}" class="btn btn-sm btn-info" title="edit data"><i class="far fa-edit"></i>
                        </a>
                        <a href="{{ url('admin/course-delete/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="fa fa-trash"></i>
                        </a>
                    </td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-4">
          <!-- general form elements disabled -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Add New Course</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('course-store') }}" method="POST" enctype="multipart/form-data">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label>Select Category</label>
                    <select class="form-control select2" name="category_id" style="width: 100%;" data-placeholder="Select a State">
                    @foreach ($categories as $item)
                        <option value="{{ $item->id }}" >{{ $item->category_name }}</option>
                    @endforeach
                    </select>
                    @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Course Name</label>
                  <input type="text" name="course_name" class="form-control @error('course_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Course Name">
                  @error('course_name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Course Fee</label>
                  <input type="text" name="course_fee" class="form-control @error('course_fee') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Course Fee">
                  @error('course_fee')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Course Requirements</label>
                    <textarea name="requirements"  class="form-control" id="" cols="30" rows="3"></textarea>
                    @error('requirements')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">What Will Learn</label>
                    <textarea name="what_learn"  class="form-control" id="" cols="30" rows="3"></textarea>
                    @error('what_learn')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Image</label>
                    <input type="file" name="image" class="form-control" id="exampleInputEmail1">
                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Course Nedded Component</label>
                    <textarea class="textarea" name="course_files"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    @error('course_files')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
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
