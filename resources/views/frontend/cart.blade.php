@extends('frontend.layouts.master')
@section('title', 'E-COM || CART')
@section('main-content')


    <main>
        <div class="mb-4 pb-4"></div>
        <section class="shop-checkout container">
            <h2 class="page-title">Cart</h2>
            <div class="checkout-steps">
                <a href="{{route('Cart.Page')}}" class="checkout-steps__item active">
                    <span class="checkout-steps__item-number">01</span>
                    <span class="checkout-steps__item-title">
                        <span>Shopping Bag</span>
                        <em>Manage Your Items List</em>
                    </span>
                </a>
                <a href="{{route('Cartcheckout.Page')}}" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">02</span>
                    <span class="checkout-steps__item-title">
                        <span>Shipping and Checkout</span>
                        <em>Checkout Your Items List</em>
                    </span>
                </a>
                <a href="{{route('shop_order_complete.Page')}}" class="checkout-steps__item">
                    <span class="checkout-steps__item-number">03</span>
                    <span class="checkout-steps__item-title">
                        <span>Confirmation</span>
                        <em>Review And Submit Your Order</em>
                    </span>
                </a>
            </div>
            <div class="shopping-cart">
                <div class="cart-table__wrapper">
                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th></th>
                                <th>Price</th>
                                <th>Quantity</th>
                                <th>Subtotal</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (isset($products) && count($products) > 0)
                                @foreach ($products as $product)
                                    @php
                                    // dd($cart);
                                        $photo = explode(',', $product->photo);

                                    @endphp
                                    <tr>
                                        <td>
                                            <div class="shopping-cart__product-item">
                                                <a href="">
                                                    <img loading="lazy" src="{{ $photo[0] }}" width="120"
                                                        height="120" alt="{{ $product->title }}">
                                                </a>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="shopping-cart__product-item__detail">
                                                <h4><a href="">{{ $product->title }}</a></h4>
                                                <ul class="shopping-cart__product-item__options">
                                                    <li>Size: {{ $cart[$product->id]['size'] }}</li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td>
                                            <span
                                                class="shopping-cart__product-price">${{ $cart[$product->id]['price'] }}</span>
                                        </td>
                                        <td>
                                            <div class="qty-control position-relative">
                                                <input type="number" name="quantity"
                                                    value="{{ isset($cart[$product->id]['quantity']) ? $cart[$product->id]['quantity'] : 1 }}"
                                                    min="1" class="qty-control__number text-center"
                                                    data-product-id="{{ $product->id }}">
                                                <div class="qty-control__reduce" data-action="decrease"
                                                    data-product-id="{{ $product->id }}">-</div>
                                                <div class="qty-control__increase" data-action="increase"
                                                    data-product-id="{{ $product->id }}">+</div>
                                            </div>

                                        </td>
                                        <td>
                                            {{-- <span class="shopping-cart__subtotal" id="subtotal-{{ $product->id }}">$</span> --}}
                                            <span class="shopping-cart__subtotal" id="subtotal-{{ $product->id }}">
                                                @if (isset($cart[$product->id]['subtotal']))
                                                    ${{ $cart[$product->id]['subtotal'] }}
                                                @else
                                                    ${{ $cart[$product->id]['price'] }}
                                                @endif
                                            </span>
                                        </td>
                                        <td>
                                            <a href="#" class="remove-cart" data-product-id="{{ $product->id }}">
                                                <svg width="10" height="10" viewBox="0 0 10 10" fill="#767676"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                        d="M0.259435 8.85506L9.11449 0L10 0.885506L1.14494 9.74056L0.259435 8.85506Z" />
                                                    <path
                                                        d="M0.885506 0.0889838L9.74057 8.94404L8.85506 9.82955L0 0.97449L0.885506 0.0889838Z" />
                                                </svg>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                @else

                            <tr>
                                <td class="text-center" style="display: inline;">
                                    There are no any carts available. <a href="{{ route('home') }}"
                                        style="color:blue;">Continue shopping</a>
                                </td>
                            </tr>
                            @endif
                        </tbody>

                    </table>
                    <div class="cart-table-footer">
                        <form action="" method="POST" class="position-relative bg-body">
                            @csrf
                            <input class="form-control" type="text" name="coupon_code" placeholder="Coupon Code">
                            <input class="btn-link fw-medium position-absolute top-0 end-0 h-100 px-4" type="submit"
                                value="APPLY COUPON">
                        </form>
                        {{-- <button class="btn btn-light">UPDATE CART</button> --}}
                    </div>
                </div>

                <div class="shopping-cart__totals-wrapper">
                    <div class="sticky-content">
                        <div class="shopping-cart__totals">
                            <h3>Cart Totals</h3>
                            <table class="cart-totals">
                                <tbody>

                                    {{-- <tr>
                                        <th>Subtotal</th>
                                        <td>$21354</td>
                                    </tr> --}}
                                    <tr>
                                        <th>Shipping</th>
                                        <?php
                                        $shippings =Helper::shipping();
                                        ?>
                                        <td>
                                            @foreach ($shippings as $shipping)
                                                <div class="form-check">
                                                    <input class="form-check-input form-check-input_fill" type="checkbox"
                                                    value="{{ $shipping->id }}" id="shipping_{{ $shipping->id }}">
                                                    <label class="form-check-label" for="shipping_{{ $shipping->id }}">
                                                        {{ $shipping->type }}: ${{ number_format($shipping->price, 2) }}
                                                    </label>
                                                </div>
                                            <div>Shipping Is Free For India.</div>
                                            @endforeach
                                            {{-- <div>Shipping Is Free.</div> --}}
                                            <div>
                                                <a href="#" class="menu-link menu-link_us-s">CHANGE ADDRESS</a>
                                            </div>
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>Cart Total</th>
                                        <td id="cart-total">${{ number_format(session('cart_total', 0), 2) }}</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="mobile_fixed-btn_wrapper">
                            <div class="button-wrapper container">
                                {{-- <button class="btn btn-primary btn-checkout">PROCEED TO CHECKOUT</button> --}}
                                <a href="{{route('Cartcheckout.Page')}}" class="btn btn-primary btn-checkout">PROCEED TO CHECKOUT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        $(document).ready(function() {
            $('.remove-cart').click(function(e) {
                e.preventDefault();
                var productId = $(this).data('product-id');
                var url = "{{ route('cart.remove') }}";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: {
                        product_id: productId,
                        _token: "{{ csrf_token() }}" // Include CSRF token for security
                    },
                    success: function(response) {
                        if (response.success) {
                            $('a[data-product-id="' + productId + '"]').closest('tr').remove();
                            // alert('Product removed successfully!');
                        }
                    },
                    error: function(xhr) {
                        console.log(xhr.responseText);
                    }
                });
            });




    $('.qty-control__increase, .qty-control__reduce').on('click', function() {
    var $button = $(this);
    var productId = $button.data('product-id');
    var action = $button.data('action');
    var $quantityInput = $('input[data-product-id="' + productId + '"]');
    var currentQuantity = parseInt($quantityInput.val());



    if (action === 'increase') {
        currentQuantity += 0;
    } else if (action === 'decrease' && currentQuantity > 1) {
        currentQuantity -= 0;
    }

    $quantityInput.val(currentQuantity);
    updateCart(productId, currentQuantity); // Update cart with new quantity
});

function updateCart(productId, quantity) {
    $.ajax({
        url: '{{ route('cart.update') }}',
        type: 'POST',
        data: {
            productId: productId,
            quantity: quantity,
            _token: $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            // console.log(data);
            if (data.success) {
                $('#subtotal-' + productId).text('$' + data.subtotal.toFixed(2));
                $('#cart-total').text('$' + data.total.toFixed(2));
            }
        }
    });
}

        });
    </script>

@endsection



@push('styles')
@endpush
