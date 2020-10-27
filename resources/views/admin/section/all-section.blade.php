@extends('layouts.admin-master')
@section('section')active @endsection
@section('admin-title')section @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Course section</h1>
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
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Course Section list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Course Name</th>
                  <th>Section Name</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $serial = 1;
                    @endphp
                @foreach ($sections as $item)
                <tr>
                    <td>{{ $serial++ }}</td>
                    <td>{{ $item->section_name }}</td>
                    <td>{{ $item->course->course_name }}</td>
                    <td>
                        {{-- <a href="" class="btn btn-sm btn-priinmary" title="view data"> <i class="fa fa-eye"></i>
                        </a> --}}
                        <a href="{{ url('admin/section-edit/'.$item->id) }}" class="btn btn-sm btn-info" title="edit data"><i class="far fa-edit"></i>
                        </a>
                        <a href="{{ url('admin/section-delete/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="fa fa-trash"></i>
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
              <h3 class="card-title">Add New Section</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('section-store') }}" method="POST">
                @csrf
              <div class="card-body">

                <div class="form-group">
                    <label>Select Course</label>
                    <select class="form-control select2" name="course_id" style="width: 100%;" data-placeholder="Select a State">
                    @foreach ($courses as $item)
                        <option value="{{ $item->id }}" >{{ $item->course_name }}</option>
                    @endforeach
                    </select>
                    @error('course_id')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Section Name</label>
                  <textarea name="section_name"  class="form-control" id="" cols="30" rows="3"></textarea>
                  @error('section_name')
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
