<!doctype html>
<html>

<head>
    @include('layout.meta')
    <title>@yield('title')</title>
</head>

<body class="sticky-header header-classic footer-parallax">

    <div id="main-container">

        @include('layout.header')

        @section('cuerpo')
        @show

        @include('layout.footer')

    </div><!-- MAIN CONTAINER -->

    <!-- SCROLL UP -->
    <a id="scroll-up" class="waves"><i class="fa fa-angle-up"></i></a>

    @include('layout.scripts')

</body>

</html>