<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta name="author" content="flexkit">
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="https://uomo-html.flexkitux.com/Users/images/favicon.ico" type="image/x-icon">
<link rel="preconnect" href="https://fonts.gstatic.com/">

<!-- Fonts -->
<link
    href="https://fonts.googleapis.com/css2?family=Exo+2:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
    rel="stylesheet">

<!-- Stylesheets -->
<link rel="stylesheet" href="{{asset('Users/css/plugins/swiper.min.css')}}" type="text/css">
<link rel="stylesheet" href="{{asset('Users/css/style.css')}}" type="text/css">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="{{asset('Users/js/Userstyle.js')}}"></script>


