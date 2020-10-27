@extends('layouts.admin-master')
@section('coupon')active @endsection
@section('admin-title')update coupon @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Course coupon Update</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">coupon Update</li>
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
              <h3 class="card-title">Update Coupon</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action="{{ route('coupon-update') }}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{ $coupon->id }}"> 
              <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Coupon Name</label>
                    <input type="text" name="coupon_name" class="form-control @error('coupon_name') is-invalid @enderror" id="exampleInputEmail1" placeholder="Enter Coupon Name" value="{{ $coupon->coupon_name }}">
                    @error('coupon_name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                  </div>
  
                  <div class="form-group">
                      <label for="discountCoupon">Coupon Discount</label>
                      <input type="text" name="discount" class="form-control @error('discount') is-invalid @enderror" id="discountCoupon" placeholder="Enter Coupon Discount %" value="{{ $coupon->discount }}">
                      @error('discount')
                          <span class="text-danger">{{ $message }}</span>
                      @enderror
                    </div>
  
                    <div class="form-group">
                      <label for="validity">Coupon Validity</label>
                      <input type="date" name="validity" class="form-control @error('validity') is-invalid @enderror" id="validity" placeholder="Enter Coupon Validity" min="{{ Carbon\Carbon::now()->format('Y-m-d') }}" value="{{ $coupon->validity }}">
                      @error('validity')
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
