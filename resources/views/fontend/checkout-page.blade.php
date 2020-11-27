@extends('layouts.fontend-master')
@section('title')cart @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Checkout</li>
                </ul>
                <h2>Checkout</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

  <!-- Start Checkout Area -->
  <section class="checkout-area ptb-100">
    <div class="container">
        <form action="{{ url('payment/process') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="billing-details">
                        <h3 class="title">Billing Details</h3>

                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>First Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your first name" value="{{ Auth::user()->name }}" name="first_name" data-validation="required">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Last Name <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your last name" name="last_name" data-validation="required" value="{{ old('last_name') }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Email Address <span class="required">*</span></label>
                                    <input type="email" class="form-control" placeholder="your email address" value="{{ Auth::user()->email }}" name="email" data-validation="required">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Phone <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your phone number" value="{{ Auth::user()->phone }}" name="phone" data-validation="required">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <label>Institute/Company Name</label>
                                    <input type="text" class="form-control" placeholder="your institute name" name="institute_name" value="{{ old('institute_name') }}">
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-6">
                                <div class="form-group">
                                    <label>Address <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="full address" name="address" data-validation="required" value="{{ old('address') }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>State / Country <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="state or country" name="state" data-validation="required" value="{{ old('state') }}">
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <label>Postcode / Zip <span class="required">*</span></label>
                                    <input type="text" class="form-control" placeholder="your post code" name="post_code" data-validation="required"  value="{{ old('post_code') }}">
                                    @error('post_code')
                                        <span class="text-center">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-lg-12 col-md-12">
                                <div class="form-group">
                                    <textarea name="order_notes" id="notes" cols="30" rows="5" placeholder="Order Notes" class="form-control"  value="{{ old('order_notes') }}"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-12">
                    <div class="order-details">
                        <h3 class="title">Your Order</h3>

                        <div class="order-table table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Course Name</th>
                                        <th scope="col">Amount</th>
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
                                            <span class="subtotal-amount">{{ $order_total =  $subtotal - session()->get('coupon')['discount_amount'] }}Tk</span>
                                        </td>
                                    </tr>

                                    {{-- <input type="hidden" name="order_total" value="{{ $order_total }}">
                                    <input type="hidden" name="discount_amount" value="{{ session()->get('coupon')['discount_amount'] }}">
                                    <input type="hidden" name="coupon_discount" value="{{ session()->get('coupon')['discount'] }}"> --}}
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
                                    {{-- <input type="hidden" name="order_total" value="{{ $subtotal }}"> --}}
                                @endif
                                </tbody>
                            </table>
                        </div>

                        <div class="payment-box">
                            <div class="payment-method">
                                <h5 class="title">Select Payment Method</h5>
                                <p>
                                    <input type="radio" id="bkash" name="payment_method"  value="bkash">
                                    <label for="bkash">Bkash</label>
                                </p>
                                <p>
                                    <input type="radio" id="rocket" name="payment_method" value="rocket">
                                    <label for="rocket">Rocket</label>
                                </p>
                                <p>
                                    <input type="radio" id="shureCash" name="payment_method" value="shureCash">
                                    <label for="shureCash">ShureCash</label>
                                </p>
                                @error('payment_method')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <button type="submit"  class="default-btn"><i class='bx bx-paper-plane icon-arrow before'></i><span class="label">Payment Process</span><i class="bx bx-paper-plane icon-arrow after"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Checkout Area -->

@endsection