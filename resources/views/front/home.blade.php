@extends('layouts.front.master')
@section('title','Home')
@section('custom-js')
    <script src="{{ asset('assets/front/js/cart.js') }}"></script>
@endsection
@section('spotlight-1')

    <!-- Block Spotlight1  -->
    <section class="so-spotlight1 ">
        <div class="container">
            <div class="row">
                <div class="sidebar-menu col-md-3 col-sm-12 hidden-xs ">
                    <div class="responsive so-megamenu ">
                        <div class="so-vertical-menu no-gutter compact-hidden">
                            <nav class="navbar-default">
                                <div class="container-megamenu vertical open">
                                    <div id="menuHeading-1">
                                        <div class="megamenuToogle-wrapper">
                                            <div class="megamenuToogle-pattern">
                                                <div class="container">
                                                    <div>
                                                        <span></span>
                                                        <span></span>
                                                        <span></span>
                                                    </div>
                                                    All Categories

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="navbar-header">
                                        <button   id="show-verticalmenu" data-toggle="collapse" class="navbar-toggle fa fa-list-alt">

                                        </button>

                                    </div>
                                    <div class="vertical-wrapper " style="display: block;">
                                        <span id="remove-verticalmenu" class="fa fa-times"></span>
                                        <div class="megamenu-pattern">
                                            <div class="container">
                                                <ul class="megamenu">
                                                    @foreach($categories as $category)
                                                        <a href="{{ route('category.product',$category->id) }}">
                                                            <li style="padding: 11px 15px;">
                                                                <i class="fa fa-plus-square-o"></i>
                                                                <span class="more-view">{{ $category->name }}</span>
                                                            </li>
                                                        </a>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>

                </div>
                <div id="yt_header_right" class="col-sm-12 col-md-9 col-lg-9 ">
                    <div class="slider-container ">
                        <div class="owl-carousel owl-slider-1 owl" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="1" data-items_md="1" data-margin="0" >
                            <div class="img-slider">
                                <a href="#"><img src="{{ asset('assets/front/img/slider/slider-1.jpg') }}" alt=""></a>
                            </div>
                            <div class="img-slider">
                                <a href="#"><img src="{{ asset('assets/front/img/slider/slider-2.jpg') }}" alt=""></a>
                            </div>
                            <div class="img-slider">
                                <a href="#"><img src="{{ asset('assets/front/img/slider/slider-3.jpg') }}" alt=""></a>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 four-block">
                    <div class="modcontent clearfix">
                        <div class="policy-detail">
                            <div class="banner-policy">
                                <div class="policy policy1">
                                    <a href="#">
                                        <span class="ico-policy"></span>
                                        <div class="service-info">
                                            <span class="title">Free Shipping & Return</span> <br> <span>Free shipping on orders over $49</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="policy policy2">
                                    <a href="#">
                                        <span class="ico-policy"></span>
                                        <div class="service-info">
                                            <span class="title">Money Guarantee</span> <br><span>30 days money back guarantee</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="policy policy3">
                                    <a href="#">
                                        <span class="ico-policy"></span>
                                        <div class="service-info">
                                            <span class="title">Online Support</span> <br><span>We support online 24/24 on day</span>
                                        </div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Block Spotlight1  -->
@endsection
@section('spotlight-2')

    <!-- Block Spotlight3  -->
    <section class="so-spotlight3">
        <div class="container">
            <div class="row">
                <div id="so_categories_173761471880018" class="so-categories module titleLine preset01-4 preset02-3 preset03-3 preset04-1 preset05-1">
                    <div class="wrap-categories">
                        <div class="col-xs-12 col-sm-6  col-md-3 col-lg-3 new-arrivals ">
                            <div class="module latest-product titleLine">
                                <h3 class="modtitle">New Arrivals</h3>
                                <hr>
                                <hr>
                                <hr>
                                <div class="modcontent owl-carousel owl-new-arrivals " data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="1" data-items_md="1" data-margin="10">
                                    <div class="product-latest-item">
                                        @foreach($new_arrivals as $product)
                                            @include('front._product_list1')
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 bestsellers">
                            <div class="module latest-product titleLine">
                                <h3 class="modtitle">Bestsellers</h3>
                                <hr>
                                <hr>
                                <hr>
                                <div class="modcontent">
                                    <div class="owl-carousel owl-bestsellers" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
                                        <div class="product-latest-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Sunt Molup</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$98.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Et Spare</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$165.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Cisi Chicken</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$59.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-latest-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-3.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Sunt Molup</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$98.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-1.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Et Spare</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$165.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-2.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Cisi Chicken</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$59.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 featured">
                            <div class="module latest-product titleLine">
                                <h3 class="modtitle">Featured</h3>
                                <hr>
                                <hr>
                                <hr>
                                <div class="modcontent">
                                    <div class="owl-carousel owl-featured" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
                                        <div class="product-latest-item">
                                            @foreach($featured_products as $product)
                                                @include('front._product_list1')
                                            @endforeach
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 hot-sale">
                            <div class="module latest-product titleLine">
                                <h3 class="modtitle">Hot Sale</h3>
                                <hr>
                                <hr>
                                <hr>
                                <div class="modcontent">
                                    <div class="owl-carousel owl-hot-sale" data-nav="yes" data-loop="yes" data-margin="0" data-items_xs="1" data-items_sm="1" data-items_md="1">
                                        <div class="product-latest-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Sunt Molup</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$132.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Et Spare</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$87.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Cisi Chicken</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$63.00</span>
                                                            <span class="price-old">$84.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="product-latest-item">
                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-6.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Sunt Molup</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$132.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-7.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Et Spare</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star "></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$87.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>

                                            <div class="media">
                                                <div class="media-left">
                                                    <a href="product.html"><img src="#" custag="img/demo/shop/product/product-8.jpg" alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive" style="width: 78px; height: 104px;"></a>
                                                </div>
                                                <div class="media-body">
                                                    <div class="caption">
                                                        <h4><a href="product.html">Cisi Chicken</a></h4>


                                                        <div class="ratings">
                                                            <div class="rating-box">
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class=""><i class="fa fa-star "></i></span>
                                                                <span class="gray"><i class="fa fa-star"></i></span>
                                                            </div>
                                                        </div>
                                                        <div class="price">
                                                            <span class="price-new">$63.00</span>
                                                            <span class="price-old">$84.00</span>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="brands">
                        <h3>Fetured brands</h3>
                        <hr><hr><hr>
                        <div class="owl-carousel owl-fetured-brand" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="2" data-items_sm="4" data-items_md="6" data-margin="10" >
                            <div class="img-brand">
                                <a href="#"><img src="#" custag="img/demo/brands/brand-1.jpg" alt=""></a>
                            </div>
                            <div class="img-brand">
                                <a href="#"><img src="#" custag="img/demo/brands/brand-2.jpg" alt=""></a>
                            </div>
                            <div class="img-brand">
                                <a href="#"><img src="#" custag="img/demo/brands/brand-3.jpg" alt=""></a>
                            </div>
                            <div class="img-brand">
                                <a href="#"><img src="#" custag="img/demo/brands/brand-4.jpg" alt=""></a>
                            </div>
                            <div class="img-brand">
                                <a href="#"><img src="#" custag="img/demo/brands/brand-5.jpg" alt=""></a>
                            </div>
                            <div class="img-brand">
                                <a href="#"><img src="#" custag="img/demo/brands/brand-6.jpg" alt=""></a>
                            </div>
                            <div class="img-brand">
                                <a href="#"><img src="#" custag="img/demo/brands/brand-1.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- //Block Spotlight3  -->
@endsection
@section('content')
    <div class="row">
        <div id="content" class="col-xs-12 col-sm-12">

            <div class="module tab-slider titleLine">
                <h3 class="modtitle">Deals Of The Week</h3>
                <hr>
                <hr>
                <hr>

                <div class="owl-carousel owl-dead-week" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="2" data-items_md="2" data-margin="15" >
                    <div class="product-layout ">
                        <div class="product-item-container">
                            <div class=" left-block col-lg-6 col-md-6 col-sm-12  col-xs-12">
                                <div class="product-image-container  second_img ">
                                    <a href="product.html" class="product-img"><img src="#" custag="img/demo/shop/product/product-1.jpg" alt=""></a>
                                    <!--Sale Label-->
                                    <span class="sale">-20%</span>

                                    <div class="hover">
                                        <ul>
                                            <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                            <li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                            <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="time-offer-end">
                                    <div class="title">Hurry Up! Offer ends in:</div>

                                    <div class="time-box">

                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="product.html">Dummy product #1</a></h4>
                                    <div class="description item-desc">
                                        <p>Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class="gray"><i class="fa fa-star "></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$74.00</span>
                                        <span class="price-old">$122.00</span>
                                    </div>

                                </div>

                                <div class="button-group">
                                    <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                </div>
                            </div><!-- right block -->
                        </div>
                    </div>

                    <div class="product-layout ">
                        <div class="product-item-container ">
                            <div class=" left-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-image-container  second_img ">
                                    <a href="product.html" class="product-img"><img src="#" custag="img/demo/shop/product/product-2.jpg" alt=""></a>
                                    <!--Sale Label-->
                                    <span class="sale">-15%</span>

                                    <div class="hover">
                                        <ul>
                                            <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                            <li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                            <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="time-offer-end">
                                    <div class="title">Hurry Up! Offer ends in:</div>

                                    <div class="time-box time-box-2">

                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="product.html">Dummy product #2</a></h4>
                                    <div class="description item-desc">
                                        <p>Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat . </p>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class="gray"><i class="fa fa-star "></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$87.00</span>
                                        <span class="price-old">$122.00</span>
                                    </div>

                                </div>

                                <div class="button-group">
                                    <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                </div>
                            </div><!-- right block -->
                        </div>
                    </div>

                    <div class="product-layout ">
                        <div class="product-item-container ">
                            <div class=" left-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="product-image-container  second_img ">
                                    <a href="product.html" class="product-img"><img src="#" custag="img/demo/shop/product/product-3.jpg" alt=""></a>
                                    <!--Sale Label-->
                                    <span class="sale">-25%</span>

                                    <div class="hover">
                                        <ul>
                                            <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                            <li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                            <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="right-block col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                <div class="time-offer-end">
                                    <div class="title">Hurry Up! Offer ends in:</div>

                                    <div class="time-box">
                                        <div class="day-time time">
                                            <div class="num-day num-time">356</div>
                                            <div class="name-day name-time">Days</div>
                                        </div>
                                        <div class="hour-time time">
                                            <div class="num-hour num-time">23</div>
                                            <div class="name-hour name-time">Hours</div>
                                        </div>
                                        <div class="min-time time">
                                            <div class="num-min num-time">56</div>
                                            <div class="name-min name-time">Mins</div>
                                        </div>
                                        <div class="sec-time time">
                                            <div class="num-sec num-time">33</div>
                                            <div class="name-sec name-time">Secs</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="caption">
                                    <h4><a href="product.html">Dummy product #01</a></h4>
                                    <div class="description item-desc">
                                        <p>Lorem ipsum dolor sit amet, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. </p>
                                    </div>
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class=""><i class="fa fa-star "></i></span>
                                            <span class="gray"><i class="fa fa-star "></i></span>
                                        </div>
                                    </div>

                                    <div class="price">
                                        <span class="price-new">$68.00</span>
                                        <span class="price-old">$122.00</span>
                                    </div>

                                </div>

                                <div class="button-group">
                                    <button class="addToCart btn btn-default "   data-toggle="tooltip" title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart"> <span class="">Add to Cart</span></button>
                                </div>
                            </div><!-- right block -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="module col-sm-12 hidden-xs">
            <div class="modcontent clearfix">
                <div class="banner-wraps ">
                    <div class="m-banner ">
                        <div class="banners htmlconten1 row">
                            <div class="banners banner1-1 col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div>
                                    <a href="#"><img src="#" custag="img/demo/banner/banner1-1.jpg" alt="banner1"></a>
                                </div>
                            </div>
                            <div class=" banners banner1-2 col-sm-6 col-xs-12">
                                <div>
                                    <a href="#"><img src="#" custag="img/demo/banner/banner1-2.jpg" alt="banner1"></a>
                                </div>
                            </div>
                        </div>
                        <div class="htmlconten2 row">
                            <div class="banners banner2-1 col-sm-3 col-xs-12">
                                <div>
                                    <a href="#"><img src="#" custag="img/demo/banner/banner2-1.jpg" alt="banner1"></a>
                                </div>
                            </div>
                            <div class="banners banner2-2 col-sm-6 col-xs-12">
                                <div>
                                    <a href="#"><img src="#" custag="img/demo/banner/banner2-2.jpg" alt="banner1"></a>
                                </div>
                            </div>
                            <div class="banners banner2-3 col-sm-3 col-xs-12">
                                <div>
                                    <a href="#"><img src="#" custag="img/demo/banner/banner2-3.jpg" alt="banner1"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="smartphone-tablet col-sm-12">
            <h3 class="modtitle">{{ $featured_category_products->name }}  </h3>
            <hr>
            <hr>
            <hr>
            <div class="smartphone-tablet-owl">
                <div class=" owl-carousel related-owl " data-dots="yes" data-nav="yes" data-loop="no" data-items_xs="1" data-items_sm="3" data-items_md="5" data-margin="10" >
                    @foreach($featured_category_products->products as $product)
                        <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a href="{{ route('product.details',$product->id) }}" class="product-img">
                                            @if(isset($product->product_images[0]))
                                                <img src="{{ config('system.image_path').$product->product_images[0]->image }}" alt="">
                                            @else
                                                <img src="{{ config('system.image_path').'image/default/default-image.png' }}" alt="">
                                            @endif
                                        </a>
                                        <!--Sale Label-->
                                        <span class="new">Latest</span>featured_category_products

                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist"   data-toggle="tooltip" title="" onclick="wishlist.add('42');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i></a></li>
                                                <li class="icon-exchange"><a class="compare"   data-toggle="tooltip" title="" onclick="compare.add('42');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></a></li>
                                                <li class="icon-search"><a class="quickview iframe-link " data-fancybox-type="iframe" href="quickview.html">  <i class="fa fa-search" aria-hidden="true"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="product.html">{{ $product->name }}</a></h4>
                                        <div class="ratings">
                                            <div class="rating-box">
                                                <span class=""><i class="fa fa-star "></i></span>
                                                <span class=""><i class="fa fa-star "></i></span>
                                                <span class=""><i class="fa fa-star "></i></span>
                                                <span class=""><i class="fa fa-star "></i></span>
                                                <span class="gray"><i class="fa fa-star "></i></span>
                                            </div>
                                        </div>

                                        <div class="price">
                                            <span class="price-new">{{ $product->unit_price }}</span>
                                        </div>
                                        <div class="description item-desc hidden">
                                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est . </p>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart btn btn-default"
                                                cus-product-price="{{ $product->unit_price }}"
                                                cus-product-name="{{ $product->name }}"
                                                @if(isset($product->product_images[0]))
                                                cus-product-image="{{ config('system.image_path').$product->product_images[0]->image }}"
                                                @else
                                                cus-product-image="{{ config('system.image_path').'image/default/default-image.png' }}"
                                                @endif
                                                cus-product-id="{{ $product->id }}" title="Add to Cart">
                                            <span class="">Add to Cart</span>
                                        </button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="module no-margin titleLine col-sm-12 latest-blog">
            <h3 class="modtitle">Latest Blog</h3>
            <hr><hr><hr>
            <div class="latest-blog-owl">
                <div class="owl-carousel latest-owl" data-dots="yes" data-nav="yes" data-loop="yes" data-items_xs="1" data-items_sm="3" data-items_md="4" data-margin="10" >
                    <div class="itemBlogImg">
                        <div class="article-image ">
                            <div>
                                <div class="day">
                                    <p>24</p>
                                    <p>Dec</p>
                                </div>

                                <a class="popup-gallery" href="blog-detail.html"><img src="#" custag="img/demo/blog/blog-1.jpg" alt="Kire tuma demonstraverunt lector">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="itemBlogImg">
                        <div class="article-image ">
                            <div>
                                <div class="day">
                                    <p>24</p>
                                    <p>Dec</p>
                                </div>

                                <a class="popup-gallery" href="blog-detail.html"><img src="#" custag="img/demo/blog/blog-2.jpg" alt="Kire tuma demonstraverunt lector">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="itemBlogImg">
                        <div class="article-image ">
                            <div>
                                <div class="day">
                                    <p>24</p>
                                    <p>Dec</p>
                                </div>

                                <a class="popup-gallery" href="blog-detail.html"><img src="#" custag="img/demo/blog/blog-3.jpg" alt="Kire tuma demonstraverunt lector">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="itemBlogImg">
                        <div class="article-image ">
                            <div>
                                <div class="day">
                                    <p>24</p>
                                    <p>Dec</p>
                                </div>

                                <a class="popup-gallery" href="blog-detail.html"><img src="#" custag="img/demo/blog/blog-4.jpg" alt="Kire tuma demonstraverunt lector">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="itemBlogImg">
                        <div class="article-image ">
                            <div>
                                <div class="day">
                                    <p>24</p>
                                    <p>Dec</p>
                                </div>

                                <a class="popup-gallery" href="blog-detail.html"><img src="#" custag="img/demo/blog/blog-5.jpg" alt="Kire tuma demonstraverunt lector">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
                            </div>
                        </div>
                    </div>
                    <div class="itemBlogImg">
                        <div class="article-image ">
                            <div>
                                <div class="day">
                                    <p>24</p>
                                    <p>Dec</p>
                                </div>

                                <a class="popup-gallery" href="blog-detail.html"><img src="#" custag="img/demo/blog/blog-6.jpg" alt="Kire tuma demonstraverunt lector">
                                    <p class="text">Lorem Ipsum is simply dummy text of the printing.</p></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection