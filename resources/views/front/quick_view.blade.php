@include('layouts.front._head')
<div id="wrapper" class="wrapper-full">
    <!-- Main Container  -->
    <div class="main-container container">
        <div class="row">
            <!--Middle Part Start-->
            <div id="content" class="col-md-12 col-sm-12">

                <div class="product-view row">
                    <div class="left-content-product col-lg-12 col-xs-12">
                        <div class="row">
                            <div class="content-product-left  col-sm-6 col-xs-12 ">
                                <div class="large-image">
                                    <img itemprop="image" class="product-image-zoom" src="{{ config('system.image_path').$product_images[0]->image }}" data-zoom-image="{{ config('system.image_path').$product_images[0]->image }}" title="Bint Beef" alt="Bint Beef" />
                                </div>

                                <div id="thumb-slider" class="owl-carousel" data-nav="yes" data-loop="no" data-margin="10" data-items_xs="2" data-items_sm="4" data-items_md="4">
                                    @foreach($product_images as $key => $product_image)
                                        <div class="item">
                                            <a data-index="{{ $key }}" class="img thumbnail " data-image="{{ config('system.image_path').$product_image->image }}" title="Bint Beef">
                                                <img src="{{ config('system.image_path').$product_image->image }}" class="small-image" title="Bint Beef" alt="Bint Beef" />
                                            </a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>

                            <div class="content-product-right col-sm-6 col-xs-12">
                                <div class="title-product">
                                    <h1>{{ $quick_view->name }}</h1>
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
                                        <li>{{ $quick_view->description }}</li>
                                    </ul>
                                </div>
                                <div class="product-label form-group">
                                    <div class="stock">
                                        <span>Availability:</span> <span class="instock">In Stock</span>
                                        <p>SKU: 3721 -Vlk</p>
                                    </div>
                                    <div class="product_page_price price" itemprop="offerDetails" itemscope="" itemtype="http://data-vocabulary.org/Offer">
                                        <span class="price-new" itemprop="price">${{ $quick_view->unit_price }}</span>
                                    </div>

                                </div>
                                <div id="product">
                                    <div class="form-group box-info-product">
                                        <div class="option quantity">
                                            <div class="input-group quantity-control" unselectable="on" style="-webkit-user-select: none;">
                                                <label>Qty:  </label>
                                                <input class="form-control" type="text" name="quantity" value="1">
                                                <input type="hidden" name="product_id" value="50">
                                                <span class="input-group-addon product_quantity_down"><i class="fa fa-angle-down" aria-hidden="true"></i></span>
                                                <span class="input-group-addon product_quantity_up"><i class="fa fa-angle-up" aria-hidden="true"></i></span>

                                            </div>
                                        </div>
                                        <div class="info-product-right">
                                            <div class="cart">
                                                <input type="button" data-toggle="tooltip" title="" value="Add to Cart" data-loading-text="Loading..." id="button-cart" class="btn btn-mega btn-lg" onclick="cart.add('42', '1');" data-original-title="Add to Cart">
                                            </div>
                                            <div class="add-to-links wish_comp">
                                                <ul class="blank list-inline">
                                                    <li class="wishlist">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="wishlist.add('50');" data-original-title="Add to Wish List"><i class="fa fa-heart"></i>
                                                        </a>
                                                    </li>
                                                    <li class="compare">
                                                        <a class="icon" data-toggle="tooltip" title="" onclick="compare.add('50');" data-original-title="Compare this Product"><i class="fa fa-exchange"></i>
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
                                            <li class="facebook"><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                            <li class="twitter"><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                            <li class="google"><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                                            <li class="skype"><a href=""><i class="fa fa-skype" aria-hidden="true"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>


        </div>
        <!--Middle Part End-->

    </div>
    <!-- //Main Container -->

</div>
@include('layouts.front._scripts')
