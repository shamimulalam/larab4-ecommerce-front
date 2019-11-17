@extends('layouts.front.master')

@section('title','product details')

@section('custom-js')
    <script src="{{ asset('assets/font/js/cart.js') }}"></script>
@endsection

@section('content')
    <!-- Main Container  -->
    <div class="main-container container">
        <ul class="header-main type-1">
            <li class="home"><a href="{{ route('home') }}">Home<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
            <li class="home"><a href="#">{{ $product_details->category->name }}<i class="fa fa-angle-right" aria-hidden="true"></i></a>
            </li>
            <li><a href="#">{{ $product_details->name }}</a></li>
        </ul>

        <div class="row">
            <!--Middle Part Start-->
            <div id="content " class="col-md-12 col-sm-12 type-1">
                <div class="product-view row">
                    <div class="left-content-product col-lg-9 col-xs-12">
                        <div class="row">
                            <div class="content-product-left class-honizol col-md-6 col-sm-12 col-xs-12 ">
                                <div class="large-image">
                                    <img itemprop="image" class="product-image-zoom"
                                         src="{{ asset($product_images[0]->image) }}"
                                         data-zoom-image="{{ asset($product_images[0]->image) }}" title="Bint Beef"
                                         alt="Bint Beef">
                                </div>
                                <div id="thumb-slider" class="owl-theme owl-loaded owl-drag full_slider owl-carousel "
                                     data-nav='yes' data-loop="yes" data-margin="10" data-items_xs="2" data-items_sm="3"
                                     data-items_md="4">
                                    @foreach($product_images as $key=>$product_image)
                                        <a data-index="{{ $key }}" class="img thumbnail "
                                           data-image="{{ asset($product_image->image) }}" title="Bint Beef">
                                            <img src="{{ asset($product_image->image) }}" title="Bint Beef"
                                                 alt="Bint Beef">
                                        </a>
                                    @endforeach
                                </div>
                            </div>

                            <div class="content-product-right col-md-6 col-sm-12 col-xs-12">
                                <div class="title-product">
                                    <h1>{{ $product_details->name }}</h1>
                                </div>
                                <!-- Review -->
                                <div class="box-review form-group">
                                    <div class="ratings">
                                        <div class="rating-box">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star gray"></i>
                                        </div>
                                    </div>

                                </div>
                                <div class="product-box-desc">
                                    <ul>
                                        <li>{{ $product_details->description }}</li>
                                    </ul>
                                </div>
                                <div class="product-label form-group">
                                    <div class="stock">
                                        <span>Availability:</span> <span class="instock">In Stock</span>
                                        <p>SKU: 3721 -Vlk</p>
                                    </div>
                                    <div class="product_page_price price" itemprop="offerDetails" itemscope=""
                                         itemtype="http://data-vocabulary.org/Offer">
                                        <span class="price-new"
                                              itemprop="price">${{ $product_details->unit_price }}</span>
                                    </div>

                                </div>
                                <div id="product">
                                    <div class="form-group box-info-product">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on"
                                                 style="-webkit-user-select: none;">
                                                <label>Qty: </label>
                                                <input class="form-control" type="text" name="quantity" value="1">
                                                <input type="hidden" name="product_id" value="50">
                                                <span class="input-group-addon product_quantity_down"><i
                                                        class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                <span class="input-group-addon product_quantity_up"><i
                                                        class="fa fa-angle-up" aria-hidden="true"></i></span>

                                            </div>
                                        </div>
                                        <div class="info-product-right">
                                            <div class="cart">
                                                <input type="button" data-toggle="tooltip" title="" value="Add to Cart"
                                                       data-loading-text="Loading..." id="button-cart"
                                                       class="btn btn-mega btn-lg" onclick="cart.add('42', '1');"
                                                       data-original-title="Add to Cart">
                                            </div>
                                            <div class="add-to-links wish_comp">
                                                <ul class="blank list-inline">
                                                    <li class="wishlist">
                                                        <a class="icon" data-toggle="tooltip" title=""
                                                           onclick="wishlist.add('50');"
                                                           data-original-title="Add to Wish List"><i
                                                                class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a class="icon" data-toggle="tooltip" title=""
                                                           onclick="compare.add('50');"
                                                           data-original-title="Compare this Product"><i
                                                                class="fa fa-exchange"></i>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>


                                    </div>

                                </div>
                                <!-- end box info product -->
                                <div class="share">
                                    <p>Share This:</p>
                                    <div class="share-icon">
                                        <ul>
                                            <li class="facebook"><a href=""><i class="fa fa-facebook"
                                                                               aria-hidden="true"></i></a></li>
                                            <li class="twitter"><a href=""><i class="fa fa-twitter"
                                                                              aria-hidden="true"></i></a></li>
                                            <li class="google"><a href=""><i class="fa fa-google-plus"
                                                                             aria-hidden="true"></i></a></li>
                                            <li class="skype"><a href=""><i class="fa fa-skype" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sx-12">
                                <div class="producttab">
                                    <div class="tabsslider  col-xs-12">
                                        <ul class="nav nav-tabs">
                                            <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
                                            <li class="item_nonactive "><a data-toggle="tab" href="#tab-review">Reviews
                                                    (1)</a></li>
                                            <li class="item_nonactive"><a data-toggle="tab" href="#tab-5">Custom Tab</a>
                                            </li>
                                        </ul>

                                        <div class="tab-content col-xs-12">
                                            <div id="tab-1" class="tab-pane fade active in">
                                                <p>{{ $product_details->description }}</p>
                                            </div>

                                            <div id="tab-review" class="tab-pane fade in">
                                                <form>
                                                    <div id="review">
                                                        <table class="table table-striped table-bordered">
                                                            <tbody>
                                                            <tr>
                                                                <td style="width: 50%;"><strong>Super
                                                                        Administrator</strong></td>
                                                                <td class="text-right">29/07/2015</td>
                                                            </tr>

                                                            <tr>
                                                                <td colspan="2">
                                                                    <p>Best this product opencart</p>
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star gray"></i>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                        <div class="text-right"></div>
                                                    </div>

                                                    <h2 id="review-title">Write a review</h2>
                                                    <div class="contacts-form">
                                                        <div class="form-group"><span class="icon icon-user"></span>
                                                            <input type="text" name="name" class="form-control"
                                                                   value="Your Name"
                                                                   onblur="if (this.value == '') {this.value = 'Your Name';}"
                                                                   onfocus="if(this.value == 'Your Name') {this.value = '';}">
                                                        </div>
                                                        <div class="form-group"><span
                                                                class="icon icon-bubbles-2"></span>
                                                            <textarea class="form-control" name="text"
                                                                      onblur="if (this.value == '') {this.value = 'Your Review';}"
                                                                      onfocus="if(this.value == 'Your Review') {this.value = '';}">Your Review</textarea>
                                                        </div>
                                                        <span style="font-size: 11px;"><span
                                                                class="text-danger">Note:</span>						HTML is not translated!</span>

                                                        <div class="form-group">
                                                            <b>Rating</b>
                                                            <span>Bad</span>&nbsp;
                                                            <input type="radio" name="rating" value="1"> &nbsp;
                                                            <input type="radio" name="rating" value="2"> &nbsp;
                                                            <input type="radio" name="rating" value="3"> &nbsp;
                                                            <input type="radio" name="rating" value="4"> &nbsp;
                                                            <input type="radio" name="rating" value="5"> &nbsp;
                                                            <span>Good</span>
                                                        </div>
                                                        <div class="buttons clearfix"><a id="button-review"
                                                                                         class="btn buttonGray">Continue</a>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>

                                            <div id="tab-5" class="tab-pane fade">
                                                <p>{{ $product_details->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="col-lg-3 hidden-sm hidden-md hidden-xs slider-products">
                        <div class="module latest-product titleLine">
                            <h3 class="modtitle">Latest Product</h3>
                            <hr>
                            <hr>
                            <hr>
                            <div class="modcontent">
                                @foreach($lest_products as $lest_product)
                                    <div class="product-latest-item">
                                        <div class="media">
                                            <div class="media-left">
                                                @if($lest_product->productimages[0])
                                                    <a href="{{ route('product.details',$lest_product->id) }}">
                                                        <img src="{{ asset($lest_product->productimages[0]->image) }}"
                                                             alt="Cisi Chicken" title="Cisi Chicken" class="img-responsive"
                                                             style="width: 78px; height: 104px;">
                                                    </a>
                                                @endif
                                            </div>
                                            <div class="media-body">
                                                <div class="caption">
                                                    <h4>
                                                        <a href="{{ route('product.details',$lest_product->id) }}">{{ $lest_product->name }}</a>
                                                    </h4>

                                                    <div class="price">
                                                        <span class="price-new">${{ $lest_product->unit_price }}</span>
                                                    </div>

                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <span class=""><i class="fa fa-star "></i></span>
                                                            <span class=""><i class="fa fa-star "></i></span>
                                                            <span class=""><i class="fa fa-star "></i></span>
                                                            <span class=""><i class="fa fa-star "></i></span>
                                                            <span class=""><i class="fa fa-star "></i></span>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>
                </div>
            </div>
            <!-- Related Products -->
            <div class="related-product">
                <h3 class="modtitle">Related Products</h3>
                <hr>
                <hr>
                <hr>
                <div class="related-product-owl">
                    <div class=" owl-carousel related-owl " data-nav="yes" data-loop="yes" data-margin="30"
                         data-items_xs="1" data-items_sm="4" data-items_md="5">
                        @foreach($related_products as $product)
                            <div class="product-layout">
                            <div class="product-item-container">
                                <div class="left-block">
                                    <div class="product-image-container  second_img ">
                                        <a href="{{ route('product.details',$product->id) }}" class="product-img"><img
                                                src="img/demo/shop/product/product-1.jpg" alt=""></a>
                                        <!--Sale Label-->

                                        <span class="sale">-25%</span>
                                        <div class="hover">
                                            <ul>
                                                <li class="icon-heart"><a class="wishlist" type="button"
                                                                          data-toggle="tooltip" title=""
                                                                          onclick="wishlist.add('42');"
                                                                          data-original-title="Add to Wish List"><i
                                                            class="fa fa-heart"></i></a></li>
                                                <li class="icon-exchange"><a class="compare" type="button"
                                                                             data-toggle="tooltip" title=""
                                                                             onclick="compare.add('42');"
                                                                             data-original-title="Compare this Product"><i
                                                            class="fa fa-exchange"></i></a></li>
                                                <li class="icon-search"><a class="quickview iframe-link "
                                                                           data-fancybox-type="iframe"
                                                                           href="{{ route('quick.view',$product->id) }}"> <i class="fa fa-search"
                                                                                                     aria-hidden="true"></i></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <div class="caption">
                                        <h4><a href="{{ route('product.details',$product->id) }}">{{ $product->name }}</a></h4>
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
                                            <span class="price-new">${{ $product->unit_price }}</span>
                                        </div>
                                    </div>

                                    <div class="button-group">
                                        <button class="addToCart btn btn-default " type="button" data-toggle="tooltip"
                                                title="" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                            <span class="">Add to Cart</span></button>
                                    </div>
                                </div><!-- right block -->
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- end Related  Products-->
        </div>
    </div>
    </div>
    <!-- //Main Container -->
@endsection
