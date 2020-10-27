@extends('layouts.admin-master')
@section('enroll')active @endsection
@section('admin-title')enroll details @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Enroll Course Students</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Enroll Course Students</li>
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
            <div class="col-md-12">
              <!-- general form elements -->
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Enroll Students list</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Image</th>
                      <th>Student Name</th>
                      <th>Student Email</th>
                      <th>Student Phone</th>
                      <th>Pay Total</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp
                    @foreach ($enrolls as $item)
                    <tr>
                        <td>{{ $serial++ }}</td>
                        <td>
                          <img src="{{ asset($item->user->image) }}" alt="" height="40px" width="40px">
                        </td>
                        <td>{{ $item->user->name }}</td>
                        <td>{{ $item->user->email }}</td>
                        <td>{{ $item->user->phone }}</td>
                        <td>{{ $item->order->order_total }}Tk</td>
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
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
@endsection
