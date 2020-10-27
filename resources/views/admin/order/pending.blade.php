.@extends('layouts.admin-master')
@section('orders')active menu-open @endsection
@section('pending-orders')active @endsection
@section('admin-title')pending-orders @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Pending Orders</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">Pending Orders</li>
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
                  <h3 class="card-title">Pending Orders list</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th>SL</th>
                      <th>Payment Type</th>
                      <th>Order No.</th>
                      <th>Order Date</th>
                      <th>Order Total</th>
                      <th>Order Status</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @php
                            $serial = 1;
                        @endphp
                    @foreach ($orders as $item)
                    <tr>
                        <td>{{ $serial++ }}</td> 
                        <td>{{ $item->payment_type }}</td>
                        <td>{{ $item->payment_id }}</td>
                        <td>{{ $item->order_date }}</td>
                        <td>{{ $item->order_total }}Tk</td>
                        <td>
                            @if ($item->status == 0)
                                <span class="badge badge-pill badge-warning">Pending Order</span>
                            @else 
                                <span class="badge badge-pill badge-success">Confirmed Order</span>
                            @endif
                        </td>
                        <td>
                           <a href="{{ url('admin/pending/order-view/'.$item->id) }}" class="btn btn-sm btn-info" title="view data"> <i class="fa fa-eye"></i>
                            </a>
                            <a href="{{ url('admin/pending/order-delete/'.$item->id) }}" class="btn btn-sm btn-danger" id="delete" title="delete data"><i class="fa fa-trash"></i>
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