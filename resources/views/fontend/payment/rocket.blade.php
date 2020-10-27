@extends('layouts.fontend-master')
@section('title')Rocket Payment @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Payment</li>
                </ul>
                <h2>Rocket Payment</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->
    <!-- Start payment Area -->
		<section class="checkout-area ptb-100">
            <div class="container">
                <form action="{{ url('order/store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="order-details">
                                <h3 class="title">Your Order</h3>
                                <div class="order-table table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">Product Name</th>
                                                <th scope="col">Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($carts as $cart)
                                            <tr>
                                                <td class="product-name">
                                                    <a href="javascript::void(0)">{{ $cart->name }}</a>
                                                </td>
        
                                                <td class="product-total">
                                                    <span class="subtotal-amount">{{ $cart->price }}Tk</span>
                                                </td>
                                            </tr>
                                            @endforeach
        
                                        @if (Session::has('coupon'))
                                            <tr>
                                                <td class="order-subtotal">
                                                    <span>Cart Subtotal</span>
                                                </td>
        
                                                <td class="order-subtotal-price">
                                                    <span class="order-subtotal-amount">{{ $subtotal }}Tk</span>
                                                </td>
                                            </tr>
        
                                            <tr>
                                                <td class="order-shipping">
                                                    <span>Discount</span>
                                                </td>
        
                                                <td class="shipping-price">
                                                    <span>{{ session()->get('coupon')['discount'] }}%</span>
                                                </td>
                                            </tr>
        
                                            <tr>
                                                <td class="total-price">
                                                    <span>Order Total</span>
                                                </td>
        
                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">{{ $subtotal - session()->get('coupon')['discount_amount'] }}Tk</span>
                                                </td>
                                            </tr>
                                        @else   
                                            <tr>
                                                <td class="order-subtotal">
                                                    <span>Cart Subtotal</span>
                                                </td>
        
                                                <td class="order-subtotal-price">
                                                    <span class="order-subtotal-amount">{{ $subtotal }}Tk</span>
                                                </td>
                                            </tr>
        
                                            <tr>
                                                <td class="order-shipping">
                                                    <span>Vat</span>
                                                </td>
        
                                                <td class="shipping-price">
                                                    <span>0%</span>
                                                </td>
                                            </tr>
        
                                            <tr>
                                                <td class="total-price">
                                                    <span>Order Total</span>
                                                </td>
        
                                                <td class="product-subtotal">
                                                    <span class="subtotal-amount">{{ $subtotal }}Tk</span>
                                                </td>
                                            </tr>
                                        @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div> 

                        {{-- send billing address data --}}
                        <input type="hidden" value="{{ $data['first_name'] }}" name="first_name">
                        <input type="hidden" value="{{ $data['last_name'] }}" name="last_name">
                        <input type="hidden" value="{{ $data['email'] }}" name="email">
                        <input type="hidden" value="{{ $data['phone'] }}" name="phone">
                        <input type="hidden" value="{{ $data['address'] }}" name="address">
                        <input type="hidden" value="{{ $data['institute_name'] }}" name="institute_name">
                        <input type="hidden" value="{{ $data['state'] }}" name="state">
                        <input type="hidden" value="{{ $data['post_code'] }}" name="post_code">
                        <input type="hidden" value="{{ $data['order_notes'] }}" name="order_notes">
                        <input type="hidden" value="Rocket" name="payment_type">
                    @if (Session::has('coupon'))
                        <input type="hidden" value="{{ $subtotal }}" name="subtotal">
                        <input type="hidden" value="{{ $subtotal - session()->get('coupon')['discount_amount'] }}" name="order_total">
                        <input type="hidden" value="{{ session()->get('coupon')['discount'] }}" name="discount">
                        <input type="hidden" value="{{ session()->get('coupon')['coupon_name'] }}" name="coupon_name">
                        <input type="hidden" value="{{ session()->get('coupon')['discount_amount'] }}" name="discount_amount">
                    @else  
                    <input type="hidden" value="{{ $subtotal }}" name="subtotal">
                      <input type="hidden" value="{{ $subtotal }}" name="order_total">
                    @endif

                        <div class="col-lg-6 col-md-12">
                            <div class="billing-details">
                                <h3 class="title">Pay Now</h3>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Rocket No.</label>
                                            <input type="text" class="form-control" value="01776620826+9" disabled>
                                        @if (Session::has('coupon'))
                                            <small class="text-danger"> {{ $subtotal - session()->get('coupon')['discount_amount'] }}Tk Send Money This Number</small>
                                        @else
                                            <small class="text-danger">{{ $subtotal }}Tk Send Money This Number</small>
                                        @endif
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="form-group">
                                            <label>Account Type</label>
                                            <input type="text" class="form-control" value="Personal" disabled>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Your Rocket No. <span class="required">*</span></label>
                                            <input type="number" class="form-control" name="payment_no" value="{{ old('payment_no') }}" placeholder="Your Rocket Account No" data-validation="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <label>Money Transaction ID <span class="required">*</span></label>
                                            <textarea name="tnx_id" id="notes" cols="30" rows="5" placeholder="Balance Transaction ID" class="form-control" data-validation="required"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 text-right">
                                        <button type="submit"  class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Place Order</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>
	<!-- End payment Area -->

@endsection