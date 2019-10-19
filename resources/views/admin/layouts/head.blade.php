<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="CMS-tudm" name="description">
    <meta content="CMS-tudm" name="tudm">

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/brand/favicon.ico') }}" />

    <!-- Title -->
    <title>CMS - TUDM</title>

    <!--Bootstrap.min css-->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">

    <!-- Dashboard css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{ asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!-- Sidemenu css -->
    <link href="{{ asset('assets/plugins/toggle-sidebar/full-sidemenu.css') }}" rel="stylesheet" />

    <!--Daterangepicker css-->
    <link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet" />

    <!-- Rightsidebar css -->
    <link href="{{ asset('assets/plugins/sidebar/sidebar.css') }}" rel="stylesheet">

    <!-- Sidebar Accordions css -->
    <link href="{{ asset('assets/plugins/accordion1/css/easy-responsive-tabs.css') }}" rel="stylesheet">

    <!-- Owl Theme css-->
    <link href="{{ asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet">

    <!-- Morris  Charts css-->
    <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" />

    <!---Font icons css-->
    <link href="{{ asset('assets/plugins/iconfonts/plugin.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/iconfonts/icons.css') }}" rel="stylesheet" />
    <link  href="{{ asset('assets/fonts/fonts/font-awesome.min.css') }}" rel="stylesheet">
    @stack('css')
</head>
