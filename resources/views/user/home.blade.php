<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Jong-Kran</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="style.css">
    <!-- User Stylesheet-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <style>
        html,
        body {
            position: relative;
            height: 100%;
        }

        body {
            background: #eee;
            font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
            font-size: 14px;
            color: #000;
            margin: 0;
            padding: 0;
        }

        .swiper {
            width: 80%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 50%;
            height: 80%;
        }

        .swiper-slide img {
            display: block;
        }
    </style>

</head>

<body>
<!-- Preloader -->
<div id="preloader">
    <i class="circle-preloader"></i>
    <img src="img/core-img/salad.png" alt="">
</div>

<!-- Search Wrapper -->
<div class="search-wrapper">
    <!-- Close Btn -->
    <div class="close-btn"><i class="fa fa-times" aria-hidden="true"></i></div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="#" method="post">
                    <input type="search" name="search" placeholder="Type any keywords...">
                    <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ##### Header Area Start ##### -->
<header class="header-area">

    <!-- Top Header Area -->
    <div class="top-header-area" id="close1">
        <div class="container h-100">
            <div class="row h-100 align-items-center justify-content-between">
                <!-- Breaking News -->
                <div class="col-12 col-sm-6">
                    <div class="breaking-news">
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <li><a href="#">Hello World!</a></li>
                                <li><a href="#">Welcome to Colorlib Family.</a></li>
                                <li><a href="#">Hello Delicious!</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Top Social Info -->
                <div class="col-12 col-sm-6">
                    <div class="top-social-info text-right">
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Navbar Area -->
    <div class="delicious-main-menu">
        <div class="classy-nav-container breakpoint-off">
            <div class="container">
                <!-- Menu -->
                <nav class="classy-navbar justify-content-between" id="deliciousNav">

                    <!-- Logo -->
                    <a class="nav-brand" href="{{ url('/') }}"><img height="180" width="180" src="img/core-img/logo.png" alt=""></a>

                    <!-- Navbar Toggler -->
                    <div class="classy-navbar-toggler">
                        <span class="navbarToggler"><span></span><span></span><span></span></span>
                    </div>

                    <!-- Menu -->
                    <div class="classy-menu">

                        <!-- close btn -->
                        <div class="classycloseIcon">
                            <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                        </div>

                        <!-- Nav Start -->
                        <div class="classynav" id="close">
                            <ul>
                                <li class="active"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="#">Pages</a>
                                    <ul class="dropdown">
                                        <li><a href="{{ url('/') }}">Home</a></li>
                                        <li><a href="{{ url('/about') }}">About Us</a></li>
                                        <li><a href="{{ url('/blog') }}">Blog Post</a></li>
                                        <li><a href="{{ url('/fullrecipe') }}">Receipe Post</a></li>
                                        <li><a href="{{ url('/contact') }}">Contact</a></li>

                                    </ul>
                                </li>
                                <li><a href="#">Mega Menu</a>
                                    <div class="megamenu">
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">Europe</li>
                                            <li><a href="{{route('england')}}">England</a></li>
                                            <li><a href="{{route('germany')}}">Germany</a></li>
                                            <li><a href="{{route('italy')}}">Italy</a></li>
                                            <li><a href="{{route('france')}}">France</a></li>

                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">ASEA</li>
                                            <li><a href="{{route('cam')}}">Cambodia</a></li>
                                            <li><a href="{{route('thai')}}">Thailand</a></li>
                                            <li><a href="{{route('viet')}}">Vietnam</a></li>
                                            <li><a href="{{route('loa')}}">Loa</a></li>
                                            <li><a href="{{route('indo')}}">Indonesia</a></li>
                                        </ul>
                                        <ul class="single-mega cn-col-4">
                                            <li class="title">North Africa</li>
                                            <li><a href="{{route('us')}}">United State</a></li>
                                            <li><a href="{{route('canada')}}">Canada</a></li>
                                            <li><a href="{{route('mexico')}}">Mexico</a></li>

                                        </ul>
                                        <div class="single-mega cn-col-4">
                                            <div class="receipe-slider owl-carousel">
                                                <a href="#"><img src="img/bg-img/bg1.jpg" alt=""></a>
                                                <a href="#"><img src="img/bg-img/bg6.jpg" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                @if (Route::has('login'))

                                        @auth
                                            <li><a href="#" >{{ Auth::user()->name }}</a>
                                                <ul class="dropdown">
                                                    <li><a href="{{ url('/user/profile') }}">Profile</a></li>
                                                    <li><a href="{{route('info')}}">User</a></li>
                                                    <li><a href="{{ url('/recipe') }}">Add Recipe</a></li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                        @csrf

                                                        <x-dropdown-link :href="route('logout')"
                                                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                            {{ ('Log Out') }}
                                                        </x-dropdown-link>
                                                    </form>

                                                </ul>
                                            </li>

                                        @else
                                        <li><a href="#" >Profile</a>
                                            <ul class="dropdown">
                                                <li><a href="{{ route('login') }}" >Log in</a></li>

                                                @if (Route::has('register'))
                                                    <li><a href="{{ route('register') }}" >Register</a></li>
                                                @endif

                                            </ul>
                                        </li>


                                        @endauth

                                @endif


                                </li>


                            </ul>

                            <!-- Newsletter Form -->
                            <div class="search-btn">
                                <i class="fa fa-search" aria-hidden="true"></i>
                            </div>



                        </div>
                        <!-- Nav End -->
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ##### Header Area End ##### -->
@yield('main-content')
<!-- ##### Footer Area Start ##### -->
<footer class="footer-area">
    <div class="container h-100">
        <div class="row h-100">
            <div class="col-12 h-100 d-flex flex-wrap align-items-center justify-content-between">
                <!-- Footer Social Info -->
                <div class="footer-social-info text-right">
                    <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-telegram" aria-hidden="true"></i></a>
                    <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </div>
                <!-- Footer Logo -->
                <div class="footer-logo">
                    <a href="{{ url('/') }}"><img height="120" width="120" src="img/core-img/logo.png" alt=""></a>
                </div>
                <!-- Copywrite -->
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved by Jong-Kran</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
        </div>
    </div>
</footer>
<!-- ##### Footer Area Start ##### -->

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="js/active.js"></script>

<!-- User js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
        coverflowEffect: {
            rotate: 50,
            stretch: 0,
            depth: 100,
            modifier: 1,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
        },
    });
</script>

{{--<script>--}}
{{--    if (window.location.pathname === "/info") {--}}
{{--        document.getElementById("close").style.display = "none";--}}
{{--    } else {--}}
{{--        document.getElementById("close").style.display = "block";--}}
{{--    }</script>--}}

{{--<script>--}}
{{--    if (window.location.pathname === "/info") {--}}
{{--        document.getElementById("close1").style.display = "none";--}}
{{--    } else {--}}
{{--        document.getElementById("close1").style.display = "block";--}}
{{--    }</script>--}}
</body>

</html>
