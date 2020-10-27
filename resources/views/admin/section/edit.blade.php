@extends('layouts.admin-master')
@section('section')active @endsection
@section('admin-title')section-update @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Update section</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Section</li>
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
        <div class="col-md-8 m-auto">
          <!-- general form elements disabled -->
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Update Section</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('section-update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $section->id }}"> 
              <div class="card-body">
                <div class="form-group">
                    <label>Select Course</label>
                    <select class="form-control select2" name="course_id" style="width: 100%;" data-placeholder="Select a State">
                    @foreach ($courses as $item)
                        <option value="{{ $item->id }}" {{ $item->id == $section->course_id ? 'selected':'' }}>{{ $item->course_name }}</option>
                    @endforeach
                    </select>
                    @error('course_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Section Name</label>
                  <textarea name="section_name"  class="form-control" id="" cols="30" rows="3">{{ $section->section_name }}</textarea>
                  @error('section_name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>
               
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Update</button>
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
