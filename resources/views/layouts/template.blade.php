<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home Page</title>
    <link rel="stylesheet" href="{{asset('assets/styles/bootstrap5v/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/styles/fonts/fontawesome5v/css/all.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/styles/root.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/styles/style.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/styles/plugins/slick/slick.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/styles/plugins/slick/slick-theme.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/styles/slick-slider.css')}}" />
</head>

<body>
@component('sat_frontend.common.header')
    Header
@endcomponent
@component('sat_frontend.common.top-menu')
    top menu
@endcomponent

@yield('content')


@component('sat_frontend.common.footer')
    Footer
@endcomponent

@component('sat_frontend.common.login-register')
    login register model
@endcomponent

@component('sat_frontend.common.svg-icon')
    svg icons
@endcomponent

<!-- custom script js files -->
<script src="{{asset('assets/js/jquery.js')}}"></script>
<script src="{{asset('assets/js/bootstrap5v/js/bootstrap.bundle.min.js')}}"></script>

<!-- slider-js-->
<script src="{{asset('assets/js/plugins/slick/slider-query.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick/slick.min.js')}}"></script>
<script src="{{asset('assets/js/plugins/slick/slider-script.js')}}"></script>

<script src="{{asset('assets/js/like-dislike.js')}}"></script>

<script src="{{asset('assets/js/script_h.js')}}"></script>
<script src="{{asset('assets/js/script_w.js')}}"></script>
<!-- jquery -->

@yield('custom_js')
</body>

</html>
