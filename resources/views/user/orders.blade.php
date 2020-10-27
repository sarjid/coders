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
                <div class="orders-table table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Order No.</th>
                                <th>Order Date</th>
                                <th>Status</th>
                                <th>Total</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($orders as $item)
                            <tr>
                                <td>#{{ $item->payment_id }}</td>
                                <td>{{ $item->order_date }}</td>
                                <td>
                                    @if ($item->status == 0)
                                        <span class="badge badge-pill badge-warning">Pending Order</span>
                                    @else        
                                    <span class="badge badge-pill badge-success">Confirmed Order</span>
                                    @endif
                                </td>
                                <td>{{ $item->order_total }}Tk</td>
                                <td><a href="{{ url('user/order-view/'.$item->payment_id) }}" class="view-button">View</a></td>
                            </tr>
                            @empty
                            <strong class="text-danger text-center mb-5">No Orders Found</strong>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            </div>
        </section>
        <!-- End My Account Area -->
        <script src="{{ asset('fontend/assets/jquery.form-validator.min.js') }}"></script>
@endsection
