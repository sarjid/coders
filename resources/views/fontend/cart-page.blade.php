@extends('layouts.fontend-master')
@section('title')cart @endsection
@section('fontend-content')
    <!-- Start Page Title Area -->
    <div class="page-title-area page-title-style-three item-bg2 jarallax" data-jarallax='{"speed": 0.3}'>
        <div class="container">
            <div class="page-title-content">
                <ul>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Cart</li>
                </ul>
                <h2>My Cart</h2>
            </div>
        </div>
    </div>
    <!-- End Page Title Area -->

   <!-- Start Cart Area -->
   <section class="cart-area ptb-100">
    <div class="container">
        <form>
            <div class="cart-table table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Image</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>

                    <tbody>
                        {{-- @foreach ($carts as $cart) --}}
                            {{-- ajax cart content will be go here  --}}
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
           
            <div class="cart-buttons">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-sm-7 col-md-7">
                        @if (Session::has('coupon'))
                        @else  
                        <div class="shopping-coupon-code" id="couponField">
                            <input type="text" class="form-control" placeholder="Coupon code" name="coupon-code" id="coupon-code" placeholder="coupon code" required>
                            <a href="javascript::void(0)" class="default-btn mt-2" onclick="applyCoupon()">Apply Coupon</a>
                        </div>
                        @endif
                    </div>

                    <div class="col-lg-5 col-sm-5 col-md-5 text-center">
                      <div class="user-actions">
                        <span>Have You Any Coupon Code?</span>
                    </div>
                    </div>
                </div>
            </div>
           

            <div class="cart-totals">
                <h3>Cart Totals</h3>

                <ul id="couponCal">
                   
                </ul>
                
                <a href="{{ url('checkout') }}" class="default-btn"><i class='bx bx-shopping-bag icon-arrow before'></i><span class="label">Proceed to Checkout</span><i class="bx bx-shopping-bag icon-arrow after"></i></a>
            </div>
        </form>
    </div>
</section>
<!-- End Cart Area -->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="{{ asset('fontend') }}/assets/js/jquery.min.js"></script>
<script type="text/javascript">
    //    $.ajaxSetup({
    //             headers:{
    //                 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //             }
    //         }),

  function getCartCourse(){
    $.ajax({
                type: "GET",
                dataType: "json",
                url: "/cart/all",
                success:function(data){
                   
                    $('span[id="total"]').text(data.total);
                    var rows = ""
                    $.each(data.cart, function(key, value){
                       
                        rows += `
                        <tr>
                            <td class="product-thumbnail">
                                <a href="#">
                                    <img src="/${value.options.image}" alt="item">
                                </a>
                            </td>

                            <td class="product-name">
                                <a href="#">${value.name}</a>
                            </td>

                            <td class="product-price">
                                <span class="unit-amount">${value.price}Tk</span>
                            </td>

                            <td class="product-quantity">
                                <div class="input-counter">
                                    {{-- <span class="minus-btn"><i class='bx bx-minus'></i></span> --}}
                                    <input type="text" min="1" value="${value.qty}">
                                    {{-- <span class="plus-btn"><i class='bx bx-plus'></i></span> --}}
                                </div>
                            </td>

                            <td class="product-subtotal">
                                <span class="subtotal-amount">${value.price}Tk</span>

                                <a href="javascript::void(0)" id="${value.rowId}"  onclick="removeItem(this.id)" class="remove"><i class='bx bx-trash'></i></a>
                            </td>
                        </tr>
                        `
                    });
                    $('tbody').html(rows);
                }
            })
    }
    getCartCourse();

    function removeItem(id){
       $.ajax({
           type: 'GET',
           dataType: 'json',
           url: '/remove/cart/item/'+id,
           success: function(data){
            getCartCourse();
            countQty();
            couponCalculation();
            $('#couponField').show();
               // start alert 
               const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
                     }

        // end alert 
           }
       })
    }

    function applyCoupon(){
       var coupon_name =  $('#coupon-code').val();
        $.ajax({
            type: 'POST',
            dataType: 'json',
            data: {
                // "_token": "{{ csrf_token() }}",
                coupon_name:coupon_name
                },
            url: '/coupon/apply',
            success:function(data){
                couponCalculation();
               
               // start alert 
               if(data.coupon_validity == true){
                $('#couponField').hide();
                 //  start message 
                 const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
					 }
                    //  end message 
                }else{
                    $('#coupon-code').val('');
                 //  start message 
                 const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
					 }
                    //  end message 

                }
        // end alert 
            }

        })
    }

    //apply coupon and after coupon calculation
    function couponCalculation(){
        $.ajax({
            type: 'GET',
            dataType: 'json',
            url: '/coupon/calculation',
            success:function(data){
                if (data.total) {
                    $('#couponCal').html(
                    `<li>Subtotal <span>${data.total}Tk</span></li>
                    <li>Vat <span>0%</span></li>
                    <li>Total <span>${data.total}Tk</span></li>`
                    )
                }else{
                    $('#couponCal').html(
                    `<li>Subtotal <span>${data.subtotal}Tk</span></li>
                    <li>Coupon <span>${data.coupon_name} ( ${data.discount}% ) <a href="javascript::void(0)" onclick="couponRemove()" class="remove"><i class='bx bx-trash' style="color:red;"></i></a></span>
                    </li>
                    <li>Vat <span>0%</span></li>
                    <li>Total <span>${data.subtotal - data.discount_amount}Tk</span></li>`
                    )
                }
                
            }
        })
    }
    couponCalculation();
   
  
</script>
<script>
     //coupon remove 
    function couponRemove(){
       $.ajax({
            type:'GET',
            dataType: 'json',
            url: '/coupon/remove',
            success:function(data){
                couponCalculation();
                $('#couponField').show();
                $('#coupon-code').val('');
                //  start message 
                const Toast = Swal.mixin({
                        toast: true,
                        position: 'top-end',
                        showConfirmButton: false,
                        timer: 3000
                      })

                     if($.isEmptyObject(data.error)){
                          Toast.fire({
                            type: 'success',
                            title: data.success
                          })
                     }else{
                           Toast.fire({
                              type: 'error',
                              title: data.error
                          })
					 }
                    //  end message 
            }
       })
   }
</script>
@endsection