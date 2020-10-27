.@extends('layouts.admin-master')
@section('orders')active menu-open @endsection
@section('pending-orders')active @endsection
@section('admin-title')view-order @endsection
@section('admin-content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">View Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="">Admin</a></li>
              <li class="breadcrumb-item active">View Order</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
     <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6">

                <div class="card card-info card-outline">
                    <div class="card-header">
                      <h5 class="m-0">Billing Info</h5>
                    </div>
                    <div class="card-body">
                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <tbody>
                                    <tr>
                                        <td class="order-subtotal">
                                            <span>Fist Name</span>
                                        </td>
    
                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount">{{ $billing->first_name }}</span>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td class="order-shipping">
                                            <span>Last Name</span>
                                        </td>
    
                                        <td class="shipping-price">
                                            <span>{{ $billing->last_name }}</span>
                                        </td>
                                    </tr>
    
                                    <tr>
                                        <td class="total-price">
                                            <span>Email</span>
                                        </td>
                                        
                                        <td class="product-subtotal">
                                           <span class="subtotal-amount">{{ $billing->email }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping">
                                            <span>Phone</span>
                                        </td>
    
                                        <td class="shipping-price">
                                            <span>{{ $billing->phone }}</span>
                                        </td>
                                    </tr>
                                   
                                    <tr>
                                        <td class="order-shipping">
                                            <span>Address</span>
                                        </td>
    
                                        <td class="shipping-price">
                                            <span>{{ $billing->address }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping">
                                            <span>Institute/Job</span>
                                        </td>
    
                                        <td class="shipping-price">
                                            @if ($billing->institute_name == NULL)
                                                <span class="subtotal-amount">---</span>
                                            @else
                                                <span class="subtotal-amount">{{ $billing->institute_name }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping">
                                            <span>State/City</span>
                                        </td>
                                       
                                        <td class="shipping-price">
                                            <span>{{ $billing->state }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping">
                                            <span>Post Code</span>
                                        </td>
                                       
                                        <td class="shipping-price">
                                            <span>{{ $billing->post_code }}</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="order-shipping">
                                            <span>Order Notes</span>
                                        </td>
                                       
                                        <td class="shipping-price">
                                            <span>{{ $billing->order_notes }}</span>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                  </div>

            </div>
            <!-- /.col-md-6 -->
            <div class="col-lg-6">
  
              <div class="card card-info card-outline">
                <div class="card-header">
                  <h5 class="m-0">Order</h5>
                </div>
                <div class="card-body">
                    <div class="order-table table-responsive">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td class="order-subtotal">
                                        <span>Cart Subtotal</span>
                                    </td>

                                    <td class="order-subtotal-price">
                                        <span class="order-subtotal-amount">{{ $order->subtotal }}Tk</span>
                                    </td>
                                </tr>

                                @if ($order->coupon_name == NULL)
                                @else
                                    <tr>
                                        <td class="order-subtotal">
                                            <span>Coupon Discount ({{ $order->coupon_name }})</span>
                                        </td>

                                        <td class="order-subtotal-price">
                                            <span class="order-subtotal-amount">{{ $order->discount }}% ({{ $order->discount_amount }}Tk)</span>
                                        </td>
                                    </tr>
                                @endif

                                <tr>
                                    <td class="total-price">
                                        <span>Order Total</span>
                                    </td>

                                    <td class="product-subtotal">
                                        <span class="subtotal-amount">{{ $order->order_total }}Tk</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Order Date</th>
                                    <th scope="col">{{ $order->order_date }}</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col">Order No.</th>
                                    <th scope="col">#{{ $order->payment_id }}</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col">Payment Type</th>
                                    <th scope="col">{{ $order->payment_type }}</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col">Payment Number.</th>
                                    <th scope="col">{{ $order->payment_no }}</th>
                                </tr>
                            </thead>
                            <thead>
                                <tr>
                                    <th scope="col">Transaction ID</th>
                                    <th scope="col">{{ $order->tnx_id }}</th>
                                </tr>
                            </thead>
                            
                            <thead>
                                <tr>
                                    <th scope="col">Status</th>
                                    <th scope="col">
                                    @if ($order->status == 0)
                                    <span class="badge badge-pill badge-warning">Pending Order</span>
                                    @else 
                                    <span class="badge badge-pill badge-success">Confirmed Order</span>
                                    @endif
                                </th>
                                </tr>
                            </thead>
                        <tbody>
                        </tbody>
                    </table>
                    </div>
                </div>
              </div>

            </div>
            <!-- /.col-md-6 -->
          </div>
          <div class="row">
               <!-- /.col-md-6 -->
            <div class="col-lg-12">
  
                <div class="card card-info card-outline">
                  <div class="card-header">
                    <h5 class="m-0">Order Details</h5>
                  </div>
                  <div class="card-body">
                    <div class="order-table table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Price</th>
                                </tr>
                            </thead>

                            <tbody>
                            @foreach ($orderdetails as $item)
                                <tr>
                                    <td class="product-name">
                                        <img src="{{ asset($item->course->image) }}" width="40px" height="40px" alt="">
                                    </td>
                                    <td class="product-name">
                                        <a href="#">{{ $item->course_name }}</a>
                                    </td>
                                    <td class="product-name">
                                        <a href="#">{{ $item->price }}Tk</a>
                                    </td>
                                </tr>
                                @endforeach
                               
                            </tbody>
                        </table>
                    </div>
                    <a href="{{ url('admin/enroll-accept/'. $order->id) }}" class="btn btn-block btn-info" id="enroll">Accept Enroll Course</a>
                  </div>
                </div>
  
              </div>
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content -->
</div>

@endsection