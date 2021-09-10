<!DOCTYPE html>
<!--
Template Name: The Billtro  
Version: 1.0.0
Author: 
Website: 
Purchase:
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->

<head>
    <meta charset="utf-8" />
    <title>@yield('titulo')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="smart pest" />
    <meta name="keywords" content="The Billtro /construction/ builder" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--start theme style -->
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/animate.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/meanmenu.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/slicknav.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/owl.carousel.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/magnific-popup.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/venobox/css/venobox.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/owl.theme.default.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/flaticon.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/fonts.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/camera.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('Frontend/css/responsive.css')}}" />
    <!-- favicon link-->
    <link rel="shortcut icon" type="image/icon" href="{{asset('Frontend/images/logos/favicon.png')}}" />
    @stack('css')
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="{{asset('Frontend/images/preloader.gif')}}" id="preloader_image" alt="loader">
        </div>
    </div>
    <a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- tb header Start -->
    <header>
    

        <!--bottom header wrappper start-->
        <div class="transparent-menu header-area hidden-menu-bar stick">

            <div class="container">
                <div class="row">
                    <div class="bt_main_menu_wrapper">
                        <div class="main-menu-wrapper clear-fix">

                            <div class="logo float-left">
                                <a href="index.html"><img src="{{asset('Frontend/images/logos/LOGO_C1.png')}}" alt="LOGO"></a>
                            </div>
                        </div>
                        <div class="sc_navigation hidden-sm hidden-xs">
                            <nav id="primary-nav" class="dropdown nav_left_margin">
                                <ul class="dropdown menu cart_dropdown_wrapper">
                                    <li><a href="{{route('inicio')}}" title="">INICIO</a></li>
                                    <li><a href="#" title="">NOSOTROS</a></li>
                                    <li><a href="{{url('/#botonera')}}" title="">PRODUCTOS</a></li>
                                    <li><a href="#" title="">TUTORIALES</a></li>
                                    <li><a href="#" title="">EXPERTOS</a></li>
                                    <li><a href="#" title="">BLOG</a></li>
                                    <li><a href="#" title="">CONTACTO</a></li>
                                    <li>
                                        <a href="https://we.tl/t-5qO7s5OWh7"><i class="fa fa-whatsapp"></i></a>
                                        <a href="https://www.facebook.com/texturplast.mex/"><i class="fa fa-facebook"></i></a>
                                        <a href="https://instagram.com/textu.rplast?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                                        <a href="https://vm.tiktok.com/ZMR2HV3qv/"><span class="iconify" data-icon="fa-brands:tiktok"></span></a>
                                    </li>                                                                        
                                </ul>
                            </nav>
                            <!-- Menu -->
                           
                        </div>
                        <!-- /.main-menu-wrapper -->
                        <!-- mobile menu area start -->
                        <div class="mobile-menu-area visible-sm visible-xs">
                            <div class="container">
                                <div class="row">

                                    <div class="col-xs-12 cc_menu_top_margin">
                                        <!-- mobile menu start -->
                                        <div class="mobile-menu">
                                            <nav>
                                                <ul class="nav">
                                                    <li><a href="{{route('inicio')}}" title="">INICIO</a></li>
                                                    <li><a href="#" title="">NOSOTROS</a></li>
                                                    <li><a href="{{url('/#botonera')}}" title="">PRODUCTOS</a></li>
                                                    <li><a href="#" title="">TUTORIALES</a></li>
                                                    <li><a href="#" title="">EXPERTOS</a></li>
                                                    <li><a href="#" title="">BLOG</a></li>
                                                    <li><a href="#" title="">CONTACTO</a></li>
                                                    <li>
                                                        <a href=""><i class="fa fa-whatsapp"></i></a>
                                                        <a href="https://www.facebook.com/texturplast.mex/"><i class="fa fa-facebook"></i></a>
                                                        <a href="https://instagram.com/textu.rplast?utm_medium=copy_link"><i class="fa fa-instagram"></i></a>
                                                        <a href="https://vm.tiktok.com/ZMR2HV3qv/"><span class="iconify" data-icon="fa-brands:tiktok"></span></a>
                                                    </li>

                                                </ul>
                                            </nav>
                                        </div>
                                        <!-- mobile menu end -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- mobile menu area end -->
                    </div>
                    <!-- /.main-menu-wrapper -->
                </div>
            </div>
        </div>

        <!--header section end-->
    </header>
    <!-- tb header end -->