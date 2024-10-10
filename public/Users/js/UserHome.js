
    function addToCart(productId, quantity) {
        $.ajax({
            url: '{{ route("cart.add") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId,
                quantity: quantity
            },
            success: function(response) {
                if (response.success) {
                    updateCartDrawer(response);
                } else {
                    alert('Unable to add item to cart.');
                }
            },
            error: function() {
                alert('Error adding item to cart.');
            }
        });
    }

    function removeFromCart(productId) {
        $.ajax({
            url: '{{ route("cart.remove") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId
            },
            success: function(response) {
                if (response.success) {
                    updateCartDrawer(response);
                } else {
                    alert('Unable to remove item from cart.');
                }
            },
            error: function() {
                alert('Error removing item from cart.');
            }
        });
    }

    function updateQuantity(productId, quantity) {
        $.ajax({
            url: '{{ route("cart.update") }}',
            type: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId,
                quantity: quantity
            },
            success: function(response) {
                if (response.success) {
                    updateCartDrawer(response);
                } else {
                    alert('Unable to update item quantity.');
                }
            },
            error: function() {
                alert('Error updating item quantity.');
            }
        });
    }

    function updateCartDrawer(response) {
        var cartDrawer = $('#cartDrawer .cart-drawer-items-list');
        cartDrawer.empty(); // Clear the cart drawer

        $.each(response.cart, function(id, item) {
            var discountPrice = item.price - (item.price * item.discount) / 100;
            var images = item.image.split(',');
            var firstImage = images[0];

            cartDrawer.append(`
                <hr class="cart-drawer-divider">
                <div class="cart-drawer-item d-flex position-relative">
                    <div class="position-relative">
                        <a href="product1_simple.html">
                            <img loading="lazy" class="cart-drawer-item__img" src="${firstImage}" alt="">
                        </a>
                    </div>
                    <div class="cart-drawer-item__info flex-grow-1">
                        <h6 class="cart-drawer-item__title fw-normal"><a href="product1_simple.html">${item.name}</a></h6>
                        <p class="cart-drawer-item__option text-secondary">Color: N/A</p>
                        <p class="cart-drawer-item__option text-secondary">Size: N/A</p>
                        <div class="d-flex align-items-center justify-content-between mt-1">
                            <div class="qty-control position-relative">
                                <input type="number" name="quantity" value="${item.quantity}" min="1" class="qty-control__number border-0 text-center">
                                <div class="qty-control__reduce text-start">-</div>
                                <div class="qty-control__increase text-end">+</div>
                            </div><!-- .qty-control -->
                            <span class="cart-drawer-item__price money price">$${item.discounted_price}</span>
                        </div>
                    </div>
                    <button class="btn-close-xs position-absolute top-0 end-0 js-cart-item-remove" data-product-id="${id}"></button>
                </div><!-- /.cart-drawer-item d-flex -->
            `);
        });

        $('#cartDrawer .cart-subtotal').text('$' + response.subtotal);
        $('#cartDrawer .cart-amount').text(response.cartCount);
        $('#cartDrawer').show(); // Show the cart drawer if hidden
    }

    // Event Listeners
    $(document).on('click', '.js-add-cart', function(e) {
        e.preventDefault();
        var productId = $(this).attr('id').replace('addtocart', '');
        var quantity = 1;
        addToCart(productId, quantity);
    });

    $(document).on('click', '.js-cart-item-remove', function(e) {
        e.preventDefault();
        var productId = $(this).data('product-id');
        removeFromCart(productId);
    });

    $(document).on('click', '.qty-control__reduce', function() {
        var input = $(this).siblings('.qty-control__number');
        var currentValue = parseInt(input.val(), 10);
        if (currentValue > 1) {
            input.val(currentValue - 1);
            updateQuantity($(this).closest('.cart-drawer-item').find('.js-cart-item-remove').data('product-id'), input.val());
        }
    });

    $(document).on('click', '.qty-control__increase', function() {
        var input = $(this).siblings('.qty-control__number');
        var currentValue = parseInt(input.val(), 10);
        input.val(currentValue + 1);
        updateQuantity($(this).closest('.cart-drawer-item').find('.js-cart-item-remove').data('product-id'), input.val());
    });

