<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.front._head')
</head>

<body class="common-home res layout-home1">



<div id="wrapper" class="wrapper-full banners-effect-7">



    <!-- Header Container  -->
    <header id="header" class=" variantleft type_1">
        @include('layouts.front._header')
    </header>
    <!-- //Header Container  -->
    @yield('spotlight-1')

    <!-- Main Container  -->
    <div class="main-container container">
        @yield('content')
    </div>
</div>
<!-- //Main Container -->
    @yield('spotlight-2')

<script type="text/javascript"><!--
    var $typeheader = 'header-home1';
    //-->
</script>

<!-- Footer Container -->
<footer class="footer-container type_footer1">
    @include('layouts.front._footer')
</footer>
<!-- //end Footer Container -->

@include('layouts.front._scripts')

</body>
</html>