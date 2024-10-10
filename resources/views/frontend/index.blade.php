@extends('frontend.layouts.master')
@section('title', 'E-COM || HOME PAGE')
@section('main-content')


    <main>
        <section class="swiper-container js-swiper-slider swiper-number-pagination slideshow h-xs-25rem"
            data-settings='{
        "autoplay": {
          "delay": 5000
        },
        "slidesPerView": 1,
        "effect": "fade",
        "loop": true
      }'>
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="Users/images/home/demo3/slideshow-character1.png" width="542"
                                height="733" alt="Woman Fashion 1"
                                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
                            <div class="character_markup type2">
                                <p
                                    class="text-uppercase font-sofia mark-grey-color animate animate_fade animate_btt animate_delay-10 mb-0">
                                    Dresses</p>
                            </div>
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                New Arrivals</h6>
                            <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Night Spring</h2>
                            <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Dresses</h2>
                            <a href="shop1.html"
                                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop
                                Now</a>
                        </div>
                    </div>
                </div><!-- /.slideshow-item -->

                <div class="swiper-slide">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="Users/images/slideshow-character1.png" width="400" height="733"
                                alt="Woman Fashion 1"
                                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
                            <div class="character_markup">
                                <p
                                    class="text-uppercase font-sofia fw-bold animate animate_fade animate_rtl animate_delay-10">
                                    Summer</p>
                            </div>
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                New Trend</h6>
                            <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Winter Sale
                                Stylish</h2>
                            <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Essentials</h2>
                            <a href="shop1.html"
                                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop
                                Now</a>
                        </div>
                    </div>
                </div><!-- /.slideshow-item -->

                <div class="swiper-slide">
                    <div class="overflow-hidden position-relative h-100">
                        <div class="slideshow-character position-absolute bottom-0 pos_right-center">
                            <img loading="lazy" src="Users/images/slideshow-character2.png" width="400" height="690"
                                alt="Woman Fashion 2"
                                class="slideshow-character__img animate animate_fade animate_btt animate_delay-9 w-auto h-auto">
                        </div>
                        <div class="slideshow-text container position-absolute start-50 top-50 translate-middle">
                            <h6
                                class="text_dash text-uppercase fs-base fw-medium animate animate_fade animate_btt animate_delay-3">
                                New Arrivals</h6>
                            <h2 class="h1 fw-normal mb-0 animate animate_fade animate_btt animate_delay-5">Top Selling</h2>
                            <h2 class="h1 fw-bold animate animate_fade animate_btt animate_delay-5">Dresses</h2>
                            <a href="shop1.html"
                                class="btn-link btn-link_lg default-underline fw-medium animate animate_fade animate_btt animate_delay-7">Shop
                                Now</a>
                        </div>
                    </div>
                </div><!-- /.slideshow-item -->
            </div><!-- /.slideshow-wrapper js-swiper-slider -->

            <div class="container">
                <div
                    class="slideshow-pagination slideshow-number-pagination d-flex align-items-center position-absolute bottom-0 mb-5">
                </div>
                <!-- /.products-pagination -->
            </div><!-- /.container -->
        </section><!-- /.slideshow -->

        <div class="container mw-1620 bg-white border-radius-10">
            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>
            <section class="category-carousel container">
                <h2 class="section-title text-center mb-3 pb-xl-2 mb-xl-4">You Might Like</h2>

                <div class="position-relative">
                    <div class="swiper-container js-swiper-slider"
                        data-settings='{
              "autoplay": {
                "delay": 5000
              },
              "slidesPerView": 8,
              "slidesPerGroup": 1,
              "effect": "none",
              "loop": true,
              "navigation": {
                "nextEl": ".products-carousel__next-1",
                "prevEl": ".products-carousel__prev-1"
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 2,
                  "slidesPerGroup": 2,
                  "spaceBetween": 15
                },
                "768": {
                  "slidesPerView": 4,
                  "slidesPerGroup": 4,
                  "spaceBetween": 30
                },
                "992": {
                  "slidesPerView": 6,
                  "slidesPerGroup": 1,
                  "spaceBetween": 45,
                  "pagination": false
                },
                "1200": {
                  "slidesPerView": 8,
                  "slidesPerGroup": 1,
                  "spaceBetween": 60,
                  "pagination": false
                }
              }
            }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3" src="Users/images/home/demo3/category_1.png"
                                    width="124" height="124" alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Women<br>Tops</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3" src="Users/images/home/demo3/category_2.png"
                                    width="124" height="124" alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Women<br>Pants</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3" src="Users/images/home/demo3/category_3.png"
                                    width="124" height="124" alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Women<br>Clothes</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3" src="Users/images/home/demo3/category_4.png"
                                    width="124" height="124" alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Men<br>Jeans</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3"
                                    src="Users/images/home/demo3/category_5.png" width="124" height="124"
                                    alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Men<br>Shirts</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3"
                                    src="Users/images/home/demo3/category_6.png" width="124" height="124"
                                    alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Men<br>Shoes</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3"
                                    src="Users/images/home/demo3/category_7.png" width="124" height="124"
                                    alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Women<br>Dresses</a>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img loading="lazy" class="w-100 h-auto mb-3"
                                    src="Users/images/home/demo3/category_8.png" width="124" height="124"
                                    alt="">
                                <div class="text-center">
                                    <a href="#" class="menu-link fw-medium">Kids<br>Tops</a>
                                </div>
                            </div>
                        </div><!-- /.swiper-wrapper -->
                    </div><!-- /.swiper-container js-swiper-slider -->

                    <div
                        class="products-carousel__prev products-carousel__prev-1 position-absolute top-50 d-flex align-items-center justify-content-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_prev_md" />
                        </svg>
                    </div><!-- /.products-carousel__prev -->
                    <div
                        class="products-carousel__next products-carousel__next-1 position-absolute top-50 d-flex align-items-center justify-content-center">
                        <svg width="25" height="25" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg">
                            <use href="#icon_next_md" />
                        </svg>
                    </div><!-- /.products-carousel__next -->
                </div><!-- /.position-relative -->
            </section>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="hot-deals container">
                <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Hot Deals</h2>
                <div class="row">
                    <div
                        class="col-md-6 col-lg-4 col-xl-20per d-flex align-items-center flex-column justify-content-center py-4 align-items-md-start">
                        {{-- <h2>Summer Sale</h2> --}}
                        <h2 class="fw-bold">Up to 60% Off</h2>

                        <div class="position-relative d-flex align-items-center text-center pt-xxl-4 js-countdown mb-3"
                            data-date="18-5-2024" data-time="06:50">
                            <div class="day countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Days</span>
                            </div>

                            <div class="hour countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Hours</span>
                            </div>

                            <div class="min countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Mins</span>
                            </div>

                            <div class="sec countdown-unit">
                                <span class="countdown-num d-block"></span>
                                <span class="countdown-word text-uppercase text-secondary">Sec</span>
                            </div>
                        </div>

                        <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium mt-3">View All</a>
                    </div>
                    <div class="col-md-6 col-lg-8 col-xl-80per">
                        <div class="position-relative">
                            <div class="swiper-container js-swiper-slider"
                                data-settings='{
                                "autoplay": {
                                    "delay": 5000
                                },
                                "slidesPerView": 4,
                                "slidesPerGroup": 4,
                                "effect": "none",
                                "loop": false,
                                "breakpoints": {
                                    "320": {
                                    "slidesPerView": 2,
                                    "slidesPerGroup": 2,
                                    "spaceBetween": 14
                                    },
                                    "768": {
                                    "slidesPerView": 2,
                                    "slidesPerGroup": 3,
                                    "spaceBetween": 24
                                    },
                                    "992": {
                                    "slidesPerView": 3,
                                    "slidesPerGroup": 1,
                                    "spaceBetween": 30,
                                    "pagination": false
                                    },
                                    "1200": {
                                    "slidesPerView": 4,
                                    "slidesPerGroup": 1,
                                    "spaceBetween": 30,
                                    "pagination": false
                                    }
                                }
                                }'>
                                <div class="swiper-wrapper">

                                    @foreach ($product_lists as $product)
                                        @if ($product->condition == 'hot')
                                            <div class="swiper-slide product-card product-card_style3">
                                                <div class="pc__img-wrapper">
                                                    @php
                                                        $photo = explode(',', $product->photo);
                                                        // dd($photo);
                                                    @endphp
                                                    <a href="product1_simple.html">
                                                        <img loading="lazy" src="{{ $photo[0] }}" width="258"
                                                            height="313" alt="Cropped Faux leather Jacket"
                                                            class="pc__img">
                                                        <img loading="lazy" src="{{ $photo[0] }}" width="258"
                                                            height="313" alt="Cropped Faux leather Jacket"
                                                            class="pc__img pc__img-second">
                                                    </a>
                                                </div>

                                                <div class="pc__info position-relative">
                                                    <h6 class="pc__title"><a
                                                            href="product1_simple.html">{{ $product->title }}</a></h6>
                                                    <div class="product-card__price d-flex align-items-center">
                                                        <span
                                                            class="money price-old">${{ number_format($product->price, 2) }}</span>
                                                        @php
                                                            $after_discount =
                                                                $product->price -
                                                                ($product->price * $product->discount) / 100;
                                                        @endphp
                                                        <span
                                                            class="money price text-secondary">${{ number_format($after_discount, 2) }}</span>
                                                    </div>

                                                    <div
                                                        class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                                        {{-- <button
                                                            class="btn-link btn-link_lg me-4 add-to-cart text-uppercase fw-medium js-add-cart js-open-aside"
                                                            data-aside="cartDrawer" id="addtocart{{$product->id}}" title="Add To Cart">Add To
                                                            Cart</button> --}}
                                                        <button
                                                            class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                                            data-bs-toggle="modal"
                                                            data-bs-target="#quickViewff{{ $product->id }}"
                                                            title="Quick view">
                                                            <span class="d-none d-xxl-block">Quick View</span>
                                                            <span class="d-block d-xxl-none"><svg width="18"
                                                                    height="18" viewBox="0 0 18 18" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <use href="#icon_view" />
                                                                </svg></span>
                                                        </button>
                                                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                                            data-target="#{{ $product->id }}" title="Add To Wishlist">
                                                            <svg width="16" height="16" viewBox="0 0 20 20"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <use href="#icon_heart" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        @endif
                                    @endforeach

                                    {{-- <div class="swiper-slide product-card product-card_style3">
                    <div class="pc__img-wrapper">
                      <a href="product1_simple.html">
                        <img loading="lazy" src="Users/images/home/demo3/product-1-1.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img">
                        <img loading="lazy" src="Users/images/home/demo3/product-1-2.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                      </a>
                    </div>

                    <div class="pc__info position-relative">
                      <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                      <div class="product-card__price d-flex align-items-center">
                        <span class="money price-old">$79</span>
                        <span class="money price text-secondary">$62</span>
                      </div>

                      <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                          <span class="d-none d-xxl-block">Quick View</span>
                          <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                        </button>
                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide product-card product-card_style3">
                    <div class="pc__img-wrapper">
                      <a href="product1_simple.html">
                        <img loading="lazy" src="Users/images/home/demo3/product-2-1.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img">
                        <img loading="lazy" src="Users/images/home/demo3/product-2-2.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                      </a>
                    </div>

                    <div class="pc__info position-relative">
                      <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                      <div class="product-card__price d-flex align-items-center">
                        <span class="money price-old">$79</span>
                        <span class="money price text-secondary">$62</span>
                      </div>

                      <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                          <span class="d-none d-xxl-block">Quick View</span>
                          <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                        </button>
                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide product-card product-card_style3">
                    <div class="pc__img-wrapper">
                      <a href="product1_simple.html">
                        <img loading="lazy" src="Users/images/home/demo3/product-3-1.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img">
                        <img loading="lazy" src="Users/images/home/demo3/product-3-2.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                      </a>
                    </div>

                    <div class="pc__info position-relative">
                      <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                      <div class="product-card__price d-flex align-items-center">
                        <span class="money price-old">$129</span>
                        <span class="money price text-secondary">$99</span>
                      </div>

                      <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                          <span class="d-none d-xxl-block">Quick View</span>
                          <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                        </button>
                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide product-card product-card_style3">
                    <div class="pc__img-wrapper">
                      <a href="product1_simple.html">
                        <img loading="lazy" src="Users/images/home/demo3/product-0-1.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img">
                        <img loading="lazy" src="Users/images/home/demo3/product-0-2.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                      </a>
                    </div>

                    <div class="pc__info position-relative">
                      <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                      <div class="product-card__price d-flex align-items-center">
                        <span class="money price-old">$39</span>
                        <span class="money price text-secondary">$29</span>
                      </div>

                      <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                          <span class="d-none d-xxl-block">Quick View</span>
                          <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                        </button>
                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide product-card product-card_style3">
                    <div class="pc__img-wrapper">
                      <a href="product1_simple.html">
                        <img loading="lazy" src="Users/images/home/demo3/product-1-1.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img">
                        <img loading="lazy" src="Users/images/home/demo3/product-1-2.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                      </a>
                    </div>

                    <div class="pc__info position-relative">
                      <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                      <div class="product-card__price d-flex align-items-center">
                        <span class="money price-old">$79</span>
                        <span class="money price text-secondary">$62</span>
                      </div>

                      <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                          <span class="d-none d-xxl-block">Quick View</span>
                          <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                        </button>
                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide product-card product-card_style3">
                    <div class="pc__img-wrapper">
                      <a href="product1_simple.html">
                        <img loading="lazy" src="Users/images/home/demo3/product-2-1.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img">
                        <img loading="lazy" src="Users/images/home/demo3/product-2-2.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                      </a>
                    </div>

                    <div class="pc__info position-relative">
                      <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                      <div class="product-card__price d-flex align-items-center">
                        <span class="money price-old">$79</span>
                        <span class="money price text-secondary">$62</span>
                      </div>

                      <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                          <span class="d-none d-xxl-block">Quick View</span>
                          <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                        </button>
                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="swiper-slide product-card product-card_style3">
                    <div class="pc__img-wrapper">
                      <a href="product1_simple.html">
                        <img loading="lazy" src="Users/images/home/demo3/product-3-1.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img">
                        <img loading="lazy" src="Users/images/home/demo3/product-3-2.jpg" width="258" height="313" alt="Cropped Faux leather Jacket" class="pc__img pc__img-second">
                      </a>
                    </div>

                    <div class="pc__info position-relative">
                      <h6 class="pc__title"><a href="product1_simple.html">Cableknit Shawl</a></h6>
                      <div class="product-card__price d-flex align-items-center">
                        <span class="money price-old">$129</span>
                        <span class="money price text-secondary">$99</span>
                      </div>

                      <div class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside" data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                        <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view" data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                          <span class="d-none d-xxl-block">Quick View</span>
                          <span class="d-block d-xxl-none"><svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_view" /></svg></span>
                        </button>
                        <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist" title="Add To Wishlist">
                          <svg width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><use href="#icon_heart" /></svg>
                        </button>
                      </div>
                    </div>
                  </div> --}}


                                </div><!-- /.swiper-wrapper -->
                            </div><!-- /.swiper-container js-swiper-slider -->
                        </div><!-- /.position-relative -->
                    </div>
                </div>
            </section>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="category-banner container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="category-banner__item border-radius-10 mb-5">
                            <img loading="lazy" class="h-auto" src="Users/images/home/demo3/category_9.jpg"
                                width="690" height="665" alt="">
                            <div class="category-banner__item-mark">
                                Starting at $19
                            </div>
                            <div class="category-banner__item-content">
                                <h3 class="mb-0">Blazers</h3>
                                <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop
                                    Now</a>
                            </div>
                        </div>
                        <div class="pb-2"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="category-banner__item border-radius-10 mb-5">
                            <img loading="lazy" class="h-auto" src="Users/images/home/demo3/category_10.jpg"
                                width="690" height="665" alt="">
                            <div class="category-banner__item-mark">
                                Starting at $19
                            </div>
                            <div class="category-banner__item-content">
                                <h3 class="mb-0">Sportswear</h3>
                                <a href="shop1.html" class="btn-link default-underline text-uppercase fw-medium">Shop
                                    Now</a>
                            </div>
                        </div>
                        <div class="pb-2"></div>
                    </div>
                </div>
            </section>

            <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

            <section class="products-grid container">
                <h2 class="section-title text-center mb-3 pb-xl-3 mb-xl-4">Featured Products</h2>

                <div class="row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-4.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price text-secondary">$29</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-5.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price text-secondary">$62</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-6.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                                <div class="product-label text-uppercase bg-white top-0 left-0 mt-2 mx-2">New</div>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price text-secondary">$17</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-7.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                                <div class="product-label bg-red text-white right-0 top-0 left-auto mt-2 mx-2">-67%</div>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title">Cableknit Shawl</h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price text-secondary">$99</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-8.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title"><a href="product1_simple.html">Cropped Faux Leather Jacket</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price text-secondary">$29</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-9.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title"><a href="product1_simple.html">Calvin Shorts</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price text-secondary">$62</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-10.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title"><a href="product1_simple.html">Kirby T-Shirt</a></h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price text-secondary">$17</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="product-card product-card_style3 mb-3 mb-md-4 mb-xxl-5">
                            <div class="pc__img-wrapper">
                                <a href="product1_simple.html">
                                    <img loading="lazy" src="Users/images/home/demo3/product-11.jpg" width="330"
                                        height="400" alt="Cropped Faux leather Jacket" class="pc__img">
                                </a>
                            </div>

                            <div class="pc__info position-relative">
                                <h6 class="pc__title">Cableknit Shawl</h6>
                                <div class="product-card__price d-flex align-items-center">
                                    <span class="money price-old">$129</span>
                                    <span class="money price text-secondary">$99</span>
                                </div>

                                <div
                                    class="anim_appear-bottom position-absolute bottom-0 start-0 d-none d-sm-flex align-items-center bg-body">
                                    <button
                                        class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-add-cart js-open-aside"
                                        data-aside="cartDrawer" title="Add To Cart">Add To Cart</button>
                                    <button class="btn-link btn-link_lg me-4 text-uppercase fw-medium js-quick-view"
                                        data-bs-toggle="modal" data-bs-target="#quickView" title="Quick view">
                                        <span class="d-none d-xxl-block">Quick View</span>
                                        <span class="d-block d-xxl-none"><svg width="18" height="18"
                                                viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_view" />
                                            </svg></span>
                                    </button>
                                    <button class="pc__btn-wl bg-transparent border-0 js-add-wishlist"
                                        title="Add To Wishlist">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.row -->

                <div class="text-center mt-2">
                    <a class="btn-link btn-link_lg default-underline text-uppercase fw-medium" href="#">Load
                        More</a>
                </div>
            </section>
        </div>

        <div class="mb-3 mb-xl-5 pt-1 pb-4"></div>

        <section class="instagram px-1 position-relative">
            <h2 class="d-none">Instagram</h2>
            <div class="row row-cols-2 row-cols-md-4 row-cols-xl-8">
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta5.jpg"
                            width="232" height="232" alt="Insta image 5">
                    </a>
                </div>
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta7.jpg"
                            width="232" height="232" alt="Insta image 7">
                    </a>
                </div>
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta8.jpg"
                            width="232" height="232" alt="Insta image 8">
                    </a>
                </div>
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta9.jpg"
                            width="232" height="232" alt="Insta image 9">
                    </a>
                </div>
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta10.jpg"
                            width="232" height="232" alt="Insta image 10">
                    </a>
                </div>
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta11.jpg"
                            width="232" height="232" alt="Insta image 11">
                    </a>
                </div>
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta12.jpg"
                            width="232" height="232" alt="Insta image 12">
                    </a>
                </div>
                <div class="instagram__tile">
                    <a href="https://instagram.com/" target="_blank"
                        class="position-relative overflow-hidden d-block effect overlay-plus">
                        <img loading="lazy" class="instagram__img" src="Users/images/instagram/insta6.jpg"
                            width="232" height="232" alt="Insta image 6">
                    </a>
                </div>
            </div>
            <button class="btn position-absolute position-center fw-medium px-4 d-flex align-items-center gap-2">
                <svg class="svg-icon svg-icon_instagram" width="14" height="13" viewBox="0 0 14 13"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M7.125 3.2959C5.375 3.2959 3.98047 4.71777 3.98047 6.44043C3.98047 8.19043 5.375 9.58496 7.125 9.58496C8.84766 9.58496 10.2695 8.19043 10.2695 6.44043C10.2695 4.71777 8.84766 3.2959 7.125 3.2959ZM7.125 8.49121C6.00391 8.49121 5.07422 7.58887 5.07422 6.44043C5.07422 5.31934 5.97656 4.41699 7.125 4.41699C8.24609 4.41699 9.14844 5.31934 9.14844 6.44043C9.14844 7.58887 8.24609 8.49121 7.125 8.49121ZM11.1172 3.18652C11.1172 2.77637 10.7891 2.44824 10.3789 2.44824C9.96875 2.44824 9.64062 2.77637 9.64062 3.18652C9.64062 3.59668 9.96875 3.9248 10.3789 3.9248C10.7891 3.9248 11.1172 3.59668 11.1172 3.18652ZM13.1953 3.9248C13.1406 2.94043 12.9219 2.06543 12.2109 1.35449C11.5 0.643555 10.625 0.424805 9.64062 0.370117C8.62891 0.31543 5.59375 0.31543 4.58203 0.370117C3.59766 0.424805 2.75 0.643555 2.01172 1.35449C1.30078 2.06543 1.08203 2.94043 1.02734 3.9248C0.972656 4.93652 0.972656 7.97168 1.02734 8.9834C1.08203 9.96777 1.30078 10.8154 2.01172 11.5537C2.75 12.2646 3.59766 12.4834 4.58203 12.5381C5.59375 12.5928 8.62891 12.5928 9.64062 12.5381C10.625 12.4834 11.5 12.2646 12.2109 11.5537C12.9219 10.8154 13.1406 9.96777 13.1953 8.9834C13.25 7.97168 13.25 4.93652 13.1953 3.9248ZM11.8828 10.0498C11.6914 10.5967 11.2539 11.0068 10.7344 11.2256C9.91406 11.5537 8 11.4717 7.125 11.4717C6.22266 11.4717 4.30859 11.5537 3.51562 11.2256C2.96875 11.0068 2.55859 10.5967 2.33984 10.0498C2.01172 9.25684 2.09375 7.34277 2.09375 6.44043C2.09375 5.56543 2.01172 3.65137 2.33984 2.83105C2.55859 2.31152 2.96875 1.90137 3.51562 1.68262C4.30859 1.35449 6.22266 1.43652 7.125 1.43652C8 1.43652 9.91406 1.35449 10.7344 1.68262C11.2539 1.87402 11.6641 2.31152 11.8828 2.83105C12.2109 3.65137 12.1289 5.56543 12.1289 6.44043C12.1289 7.34277 12.2109 9.25684 11.8828 10.0498Z">
                    </path>
                </svg>
                <span>Instagram</span>
            </button>
        </section><!-- /.instagram container -->
    </main>



    @if ($product_lists)
        @foreach ($product_lists as $key => $product)
            @php
                $imagePaths = explode(',', $product->photo);
            @endphp
            <div class="modal fade" id="quickViewff{{ $product->id }}" tabindex="-1">
                <div class="modal-dialog quick-view modal-dialog-centered">
                    <div class="modal-content">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        <div class="product-single">
                            <div class="product-single__media m-0">
                                <div class="product-single__image position-relative w-100">
                                    <div class="swiper-container js-swiper-slider"
                                        data-settings='{
                                            "slidesPerView": 1,
                                            "slidesPerGroup": 1,
                                            "effect": "none",
                                            "loop": false,
                                            "navigation": {
                                                "nextEl": ".modal-dialog.quick-view .product-single__media .swiper-button-next",
                                                "prevEl": ".modal-dialog.quick-view .product-single__media .swiper-button-prev"
                                            }
                                            }'>
                                        <div class="swiper-wrapper">
                                            @foreach ($imagePaths as $imagePath)
                                                <div class="swiper-slide product-single__image-item">
                                                    <img loading="lazy" src="{{ trim($imagePath) }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="swiper-button-prev"><svg width="7" height="11"
                                                viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_prev_sm" />
                                            </svg></div>
                                        <div class="swiper-button-next"><svg width="7" height="11"
                                                viewBox="0 0 7 11" xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_next_sm" />
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-single__detail">
                                <h1 class="product-single__name">{{ $product->title }}</h1>
                                <div class="product-single__price">
                                    @php
                                        $after_discount =
                                            $product->price - ($product->price * $product->discount) / 100;
                                    @endphp
                                    <span class="current-price"><del>${{ number_format($product->price, 2) }}<del></span>
                                    <span class="current-price" id="Product_price-{{$product->id}}">${{ number_format($after_discount, 2) }}</span>

                                </div>
                                <div class="product-single__short-desc">
                                    <p>{!! html_entity_decode($product->summary) !!}</p>
                                </div>

                                <div class="product-single__swatches">
                                    @if ($product->size)
                                        <div class="product-swatch text-swatches">
                                            <label>Sizes</label>
                                            <div class="swatch-list">
                                                @php
                                                    $sizes = explode(',', $product->size);
                                                    $inCart = isset(session('cart')[$product->id]);
                                                @endphp
                                                @foreach ($sizes as $sizesh)
                                                    <input type="radio" name="size_{{ $product->id }}"
                                                        id="swatch-{{ $product->id }}-{{ $loop->index }}"
                                                        data-product-id="{{ $product->id }}"
                                                        value="{{ $sizesh }}">
                                                    <label class="swatch js-swatch"
                                                        for="swatch-{{ $product->id }}-{{ $loop->index }}"
                                                        aria-label="{{ $sizesh }}" data-bs-toggle="tooltip"
                                                        data-bs-placement="top"
                                                        title="{{ $sizesh }}">{{ $sizesh }}</label>
                                                @endforeach
                                            </div>
                                            <a href="#" class="sizeguide-link" data-bs-toggle="modal"
                                                data-bs-target="#sizeGuide">Size Guide</a>
                                        </div>
                                    @endif
                                    <div class="product-swatch color-swatches">
                                        <label>Color</label>
                                        <div class="swatch-list">
                                            <input type="radio" name="color" id="swatch-11">
                                            <label class="swatch swatch-color js-swatch" for="swatch-11"
                                                aria-label="Black" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Black" style="color: #222"></label>
                                            <input type="radio" name="color" id="swatch-12" checked>
                                            <label class="swatch swatch-color js-swatch" for="swatch-12" aria-label="Red"
                                                data-bs-toggle="tooltip" data-bs-placement="top" title="Red"
                                                style="color: #C93A3E"></label>
                                            <input type="radio" name="color" id="swatch-13">
                                            <label class="swatch swatch-color js-swatch" for="swatch-13"
                                                aria-label="Grey" data-bs-toggle="tooltip" data-bs-placement="top"
                                                title="Grey" style="color: #E4E4E4"></label>
                                        </div>
                                    </div>
                                </div>
                                <div class="product-single__addtocart">
                                    @if ($inCart)
                                    <a href="{{ route('Cart.Page') }}" class="btn btn-primary">Go to Cart</a>
                                @else
                                    <button type="submit" class="btn btn-primary btn-addtocart add-to-cart js-add-cart"
                                            data-product-id="{{ $product->id }}" id="addtocart{{ $product->id }}">Add to
                                        Cart</button>
                                @endif
                                </div>
                                <div class="product-single__addtolinks">
                                    <a href="#" class="menu-link menu-link_us-s add-to-wishlist"><svg
                                            width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <use href="#icon_heart" />
                                        </svg><span>Add to Wishlist</span></a>
                                    <share-button class="share-button">
                                        <button
                                            class="menu-link menu-link_us-s to-share border-0 bg-transparent d-flex align-items-center">
                                            <svg width="16" height="19" viewBox="0 0 16 19" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <use href="#icon_sharing" />
                                            </svg>
                                        </button>
                                        <details id="Details-share-template__main" class="m-1 xl:m-1.5" hidden="">
                                            <summary class="btn-solid m-1 xl:m-1.5 pt-3.5 pb-3 px-5">+</summary>
                                            <div id="Article-share-template__main"
                                                class="share-button__fallback flex items-center absolute top-full left-0 w-full px-2 py-4 bg-container shadow-theme border-t z-10">
                                                <div class="field grow mr-4">
                                                    <label class="field__label sr-only" for="url">Link</label>
                                                    <input type="text" class="field__input w-full" id="url"
                                                        value="https://uomo-crystal.myshopify.com/blogs/news/go-to-wellness-tips-for-mental-health"
                                                        placeholder="Link" onclick="this.select();" readonly="">
                                                </div>
                                                <button class="share-button__copy no-js-hidden">
                                                    <svg class="icon icon-clipboard inline-block mr-1" width="11"
                                                        height="13" fill="none" xmlns="http://www.w3.org/2000/svg"
                                                        aria-hidden="true" focusable="false" viewBox="0 0 11 13">
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M2 1a1 1 0 011-1h7a1 1 0 011 1v9a1 1 0 01-1 1V1H2zM1 2a1 1 0 00-1 1v9a1 1 0 001 1h7a1 1 0 001-1V3a1 1 0 00-1-1H1zm0 10V3h7v9H1z"
                                                            fill="currentColor"></path>
                                                    </svg>
                                                    <span class="sr-only">Copy link</span>
                                                </button>
                                            </div>
                                        </details>
                                    </share-button>

                                </div>
                                <div class="product-single__meta-info mb-0">
                                    <div class="meta-item">
                                        <label>SKU:</label>
                                        <span>N/A</span>
                                    </div>
                                    <div class="meta-item">
                                        <label>Categories:</label>
                                        <span>Casual & Urban Wear, Jackets, Men</span>
                                    </div>
                                    <div class="meta-item">
                                        <label>Tags:</label>
                                        <span>biker, black, bomber, leather</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.modal-dialog -->
            </div>
        @endforeach
    @endif


<script>
$(document).ready(function() {
    $('.btn-addtocart').on('click', function(e) {
        e.preventDefault();
        let button = $(this);
        let productId = button.data('product-id');
        let size = $('input[name="size_' + productId + '"]:checked').val();
        let price = $('#Product_price-' + productId).text().replace('$', '');
        let quantity=1;
        console.log(price);


        $.ajax({
            url: "{{ route('cart.add') }}",
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                product_id: productId,
                size: size,
                price: price,
                quantity:quantity
            },
            success: function(response) {
                button.replaceWith('<a href="{{ route('Cart.Page') }}" class="btn btn-primary">Go to Cart</a>');
                loadCartCount();
                alert(response.message);
            },
            error: function(xhr) {
                alert('An error occurred.');
            }
        });
    });
});
</script>



    {{-- @include('frontend.layouts.newsletter') --}}


    {{-- <script>
        $(document).ready(function() {
            $('.js-add-cart').on('click', function(e) {
                e.preventDefault();
                var productId = $(this).attr('id').replace('addtocart', '');

                var selectedSize = $('input[name="size_' + productId + '"]:checked').val();
                var quantity = 1;
                $('#quickViewff' + productId).modal('hide');
                if (selectedSize) {
                $.ajax({
                    url: '{{ route('cart.add') }}',
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        product_id: productId,
                        size: selectedSize,
                        quantity: quantity
                    },
                    success: function(response) {
                        if (response.success) {
                            loadCartCount();
                        } else {
                            alert('Unable to add item to cart.');
                        }
                    },
                    error: function() {
                        alert('Error adding item to cart.');
                    }
                });
            }
            else
            {
                alert('Please select a size before adding to cart.');

            }
            });
        });
    </script> --}}


@endsection

@push('styles')
@endpush
