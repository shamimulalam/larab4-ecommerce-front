<!-- Header Top -->
<div class="header-top">
    <div class="container">
        <div class="row">
            <div class="header-top-left form-inline col-sm-6 col-xs-6 compact-hidden">
                <div class="form-group currencies-block">
                    <form action="index.html" method="post" enctype="multipart/form-data" id="currency">
                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                            <span class="icon icon-credit "></span> USD <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu btn-xs">
                            <li> <a href="#">(€)&nbsp;Euro</a></li>
                            <li> <a href="#">(£)&nbsp;Pounds</a></li>
                            <li> <a href="#">($)&nbsp;USD</a></li>
                        </ul>
                    </form>
                </div>
                <div class="form-group languages-block ">
                    <form action="index.html" method="post" enctype="multipart/form-data" id="bt-language">
                        <a class="btn btn-xs dropdown-toggle" data-toggle="dropdown">
                            <img src="img/demo/flags/gb.png" alt="English" title="English">
                            <span class="hidden-xs">English</span>
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu" >
                            <li><a href="index.html"><img class="image_flag" src="img/demo/flags/gb.png" alt="English" title="English"> English </a></li>
                            <li> <a href="html_width_RTL/index.html"> <img class="image_flag" src="img/demo/flags/lb.png" alt="Arabic" title="Arabic"> Arabic </a> </li>
                        </ul>
                    </form>
                </div>
            </div>
            <div class="header-top-right collapsed-block text-right  col-sm-6 col-xs-6 compact-hidden">
                <div class="tabBlock1" id="TabBlock-1">
                    <ul class="top-link list-inline">
                        <li class="wishlist hidden-xs"><a href="#" id="wishlist-total" class="top-link-wishlist" title="Welcome Customer!"><span>Welcome Customer!</span></a></li>
                        <li class="signin"><a href="login.html" class="top-link-checkout" title="Sign In"><span>Sign In</span></a></li>
                        <li class="register"><a href="register.html" title="Register"><span>Register</span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //Header Top -->

<!-- Header center -->
<div class="header-center left">
    <div class="container">
        <div class="row">
            <!-- Logo -->
            <div class="navbar-logo col-md-3 col-sm-12 col-xs-7">
                <a href="index.html"><img src="img/demo/logo/logo.png" title="Your Store" alt="Your Store"></a>
            </div>
            <!-- //end Logo -->

            <!-- Search -->
            <div id="sosearchpro" class="col-xs-12 col-sm-8 col-md-5 search-pro">

                <form method="GET" action="index.html">
                    <div id="search0" class="search input-group">
                        <input class="autosearch-input form-control" type="text" value="" size="50" autocomplete="off" placeholder="Search product..." name="search">
                        <span class="input-group-btn">
										<button type="submit" class="button-search btn btn-primary" name="submit_search"><i class="fa fa-search"></i></button>
									</span>
                    </div>

                </form>

            </div>
            <!-- //end Search -->

            <!-- Secondary menu -->
            <div class="col-md-4 col-sm-4 col-xs-5 shopping_cart pull-right">
                <div class="header-text hidden-xs">
                    <p><i class="fa fa-phone" aria-hidden="true"></i>	   Call Us: (888) 123456789</p>
                </div>
                <!--cart-->
                <div id="cart" class=" btn-group btn-shopping-cart">
                    <a data-loading-text="Loading..." class="top_cart dropdown-toggle" data-toggle="dropdown">
                        <div class="shopcart">
                            <span class="handle pull-left"></span>
                            <span class="number-shopping-cart">2</span>
                            <span class="title">My Cart</span>
                            <p class="text-shopping-cart cart-total-full"> $0.00 </p>
                        </div>
                    </a>

                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                        <li>
                            <table class="table table-striped">
                                <tbody>
                                <tr>
                                    <td class="text-center" style="width:70px">
                                        <a href="product.html"> <img src="img/demo/shop/product/35.jpg" style="width:70px" alt="Filet Mign" title="Filet Mign" class="preview"> </a>
                                    </td>
                                    <td class="text-left"> <a class="cart_product_name" href="product.html">Filet Mign</a> </td>
                                    <td class="text-center"> x1 </td>
                                    <td class="text-center"> $1,202.00 </td>
                                    <td class="text-right">
                                        <a href="product.html" class="fa fa-edit"></a>
                                    </td>
                                    <td class="text-right">
                                        <a onclick="cart.remove('2');" class="fa fa-times fa-delete"></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="width:70px">
                                        <a href="product.html"> <img src="img/demo/shop/product/141.jpg" style="width:70px" alt="Canon EOS 5D" title="Canon EOS 5D" class="preview"> </a>
                                    </td>
                                    <td class="text-left"> <a class="cart_product_name" href="product.html">Canon EOS 5D</a> </td>
                                    <td class="text-center"> x1 </td>
                                    <td class="text-center"> $60.00 </td>
                                    <td class="text-right">
                                        <a href="product.html" class="fa fa-edit"></a>
                                    </td>
                                    <td class="text-right">
                                        <a onclick="cart.remove('1');" class="fa fa-times fa-delete"></a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </li>
                        <li>
                            <div>
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr>
                                        <td class="text-left"><strong>Sub-Total</strong>
                                        </td>
                                        <td class="text-right">$1,060.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><strong>Eco Tax (-2.00)</strong>
                                        </td>
                                        <td class="text-right">$2.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><strong>VAT (20%)</strong>
                                        </td>
                                        <td class="text-right">$200.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-left"><strong>Total</strong>
                                        </td>
                                        <td class="text-right">$1,262.00</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-right"> <a class="btn view-cart" href="cart.html"><i class="fa fa-shopping-cart"></i>View Cart</a>&nbsp;&nbsp;&nbsp; <a class="btn btn-mega checkout-cart" href="checkout.html"><i class="fa fa-share"></i>Checkout</a> </p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!--//cart-->
            </div>
        </div>

    </div>
</div>
<!-- //Header center -->

<!-- Header Bottom -->
<div class="header-bottom">
    <div class="container">
        <div class="row">
            @include('layouts.front._mainNav')
        </div>
    </div>

</div>

<!-- Navbar switcher -->
<!-- //end Navbar switcher -->