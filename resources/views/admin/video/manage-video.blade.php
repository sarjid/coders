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
          <div class="row">
            <!-- left column -->
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Course Section list</h3>
                  <a href="{{ url('admin/course/add-video') }}" class="btn btn-danger" style="float: right;">Add New</a>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Thambnail</th>
                      <th>Course title</th>
                      <th>Section Name</th>
                      <th>Course Name</th>
                      <th>Category Name</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp
                    @foreach ($videos as $item)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>
                          <img src="{{ asset($item->thambnail) }}" style="height: 40px;" alt="">
                        </td>
                        <td>{{ $item->video_title }}</td>
                        <td>{{ $item->section->section_name }}</td>
                        <td>{{ $item->course->course_name }}</td>
                        <td>{{ $item->category->category_name }}</td>
                        <td>
                            {{-- <a href="" class="btn btn-sm btn-priinmary" title="view data"> <i class="fa fa-eye"></i>
                            </a> --}}
                            <a href="{{ url('admin/course/video-edit/'.$item->id) }}" class="btn btn-sm btn-info" title="edit data"><i class="far fa-edit"></i>
                            </a>
                            <a href="{{ url('admin/course/video-delete/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="fa fa-trash"></i>
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
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->

</div>

@endsection