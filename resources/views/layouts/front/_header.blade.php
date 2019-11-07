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
                            <img src="#" custag="img/demo/flags/gb.png" alt="English" title="English">
                            <span class="hidden-xs">English</span>
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="dropdown-menu" >
                            <li><a href="index.html"><img class="image_flag" src="#" custag="img/demo/flags/gb.png" alt="English" title="English"> English </a></li>
                            <li> <a href="html_width_RTL/index.html"> <img class="image_flag" src="#" custag="img/demo/flags/lb.png" alt="Arabic" title="Arabic"> Arabic </a> </li>
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
                <a href="index.html"><img src="#" custag="img/demo/logo/logo.png" title="Your Store" alt="Your Store"></a>
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
                            <span class="handle pull-left" style="background-image: url('{{ asset("assets/front/img/cart.png") }}')"></span>
                            <span class="number-shopping-cart">0</span>
                            <span class="title">My Cart</span>
                            <p class="text-shopping-cart cart-total"> $0.00 </p>
                        </div>
                    </a>

                    <ul class="tab-content content dropdown-menu pull-right shoppingcart-box" role="menu">

                        <li>
                            <table class="table table-striped cart-table">

                            </table>
                        </li>
                        <li>
                            <div>
                                <table class="table table-bordered">
                                    <tbody>

                                    <tr>
                                        <td class="text-left"><strong>Total</strong>
                                        </td>
                                        <td class="text-right cart-total">0</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-right"> <a class="btn view-cart" href="{{ route('checkout') }}"><i class="fa fa-shopping-cart"></i>Checkout</a></p>
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