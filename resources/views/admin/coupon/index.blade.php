@extends('layouts.admin-master')
@section('coupon')active @endsection
@section('admin-title')coupon @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Course coupon</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Coupon</li>
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
              <h3 class="card-title">Couse coupon list</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>coupon Name</th>
                  <th>Discount</th>
                  <th>validity</th>
                  <th>validity Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @php
                        $serial = 1;
                    @endphp
                @foreach ($coupons as $item)
                <tr>
                    <td>{{ $serial++ }}</td>
                    <td>{{ $item->coupon_name }}</td>
                    <td>{{ $item->discount }}%</td>
                    <td> 
                      @if ($item->validity >= Carbon\Carbon::now()->format('Y-m-d'))
                      <span class="badge badge-success">Valid</span>
                      @else
                      <span class="badge badge-danger">Invalid</span>
                      @endif
                    </td>
                    <td>{{ Carbon\Carbon::parse($item->validity)->format('D, d F Y')  }}</td>
                    <td>
                        {{-- <a href="" class="btn btn-sm btn-priinmary" title="view data"> <i class="fa fa-eye"></i>
                        </a> --}}
                        <a href="{{ url('admin/coupon-edit/'.$item->id) }}" class="btn btn-sm btn-info" title="edit data"><i class="far fa-edit"></i>
                        </a>
                        <a href="{{ url('admin/coupon-delete/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="fa fa-trash"></i>
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
              <h3 class="card-title">Add New coupon</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('coupon-store') }}" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Coupon Name</label>
                  <input type="text" name="coupon_name" class="form-control @error('coupon_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Coupon Name">
                  @error('coupon_name')
                      <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="form-group">
                    <label for="discountCoupon">Coupon Discount</label>
                    <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" id="discountCoupon" placeholder="Enter Coupon Discount %">
                    @error('discount')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>

                  <div class="form-group">
                    <label for="validity">Coupon Validity</label>
                    <input type="date" name="validity" class="form-control @error('validity') is-invalid @enderror" id="validity" placeholder="Enter Coupon Validity" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}">
                    @error('validity')
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
