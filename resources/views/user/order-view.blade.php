@extends('layouts.fontend-master')
@section('title')my-orders @endsection
@section('user-orders')active @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Profile</li>
                    <li>Orders</li>
                </ul>
                <h2><span class="text-warning">Welcome..!</span> {{ Auth::user()->name }}</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

       <!-- Start My Account Area -->
       <section class="my-account-area ptb-100">
        <div class="container">
           @include('user.inc.top-bar')
           <div class="myAccount-content"> 
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Billing Details</h3>
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your first name" value="{{ $billing->first_name }}" name="first_name" data-validation="required" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your last name" name="last_name" data-validation="required" value="{{ $billing->last_name }}" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" class="form-control" placeholder="your email address" value="{{ $billing->email }}" name="email" data-validation="required" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your phone number" value="{{ $billing->phone }}" name="phone" data-validation="required" disabled>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Institute/Company Name</label>
                                    <input type="text" class="form-control" placeholder="your institute name" name="institute_name" value="{{ $billing->institute_name }}" disabled>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="full address" name="address" data-validation="required" value="{{ $billing->address }}" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>State / Country <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="state or country" name="state" data-validation="required" value="{{ $billing->state }}" disabled>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your post code" name="post_code" data-validation="required"  value="{{ $billing->post_code }}" disabled>
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="order_notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control" disabled>{{ $billing->order_notes }}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="order-details">
                        <h3 class="title">Order Details</h3>

                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach ($courses as $course)
                                    <tr>
                                        <td class="product-name">
                                            <a href="javascript::void(0)">{{ $course->course_name }}</a>
                                        </td>

                                        <td class="product-total">
                                            <span class="subtotal-amount">{{ $course->price }}Tk</span>
                                        </td>
                                    </tr>
                                    @endforeach
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
                                                <span>Coupon Discount</span>
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

                                        <t d class="product-subtotal">
                                            <span class="subtotal-amount">{{ $order->order_total }}Tk</span>
                                        </t>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                     
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
        </div>
    </section>
    <!-- End My Account Area -->
@endsection
