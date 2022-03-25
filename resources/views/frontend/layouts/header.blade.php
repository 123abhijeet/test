<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
    <!-- ====================== Css file ================== -->

    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/swiper.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <!-- ====================== Font Inter & Manrope ================== -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">


</head>

<body id="body">

    <!-- ============== Header Start ============== -->

    <header class="fixed-top">
        <div class="container h-100">

            <nav class="navbar navbar-expand-lg h-100">

                <a class="navbar-brand" href="">
                    <img class="logo-lg" src="{{asset('frontend/images/logo.png')}}" alt="">
                    <img class="logo-sm" src="{{asset('frontend/images/logo-sm.png')}}" alt="">
                </a>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <div class="mobile-collsapse-logo">
                        <a href="#">
                            <img src="{{asset('frontend/images/logo.png')}}" alt="">
                        </a>
                    </div>

                    <div class="mobile-scrollbar w-100">


                        <div class="primary-nav">

                            <ul class="navbar-nav" id="myUL">

                                <li class="nav-item"><a href="{{route('HOME')}}">Home</a></li>
                                <li class="nav-item"><a href="{{route('About')}}">About Us</a></li>
                                <li class="nav-item"><a href="{{route('Blog')}}">Blog</a></li>
                                <li class="nav-item"><a href="#">Gallery</a></li>
                                <li class="nav-item"><a href="{{route('Contact')}}">Contact Us</a></li>
                                @if(Auth::user())
                                <li class="nav-item"><a href="{{route('Profile')}}">Profile</a></li>
                                <li class="nav-item"><a href="{{route('Blood-Bank')}}">Blood-bank</a></li>
                                <li class="nav-item"><a href="{{route('Hospital')}}">Hospital</a></li>
                                <li class="nav-item"><a href="{{route('History')}}">History</a></li>
                                @endif
                            </ul>
                        </div>

                        <div class="mobile-signin">
                            @if(Auth::user())
                            <div class="navbar-contact">
                                <span class="btn btn-sm">Welcome {!! Str::upper(Auth::user()->name) !!}</span>
                                <form action="{{route('logout')}}" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item btn btn-sm bg-danger">Log Out</button>
                                </form>
                            </div>
                            @else
                            <a class="btn btn-stroke-dark w-100" href="{{route('register')}}">Sign Up</a>
                            <a class="btn w-100" href="{{route('login')}}">Sign In</a>
                            @endif
                        </div>

                        <div class="mobile-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="collapse-close"><img src="{{asset('frontend/images/menu-cross.svg')}}" alt=""></div>
                </div>

                @if(Auth::user())
                <div class="navbar-contact">
                    <span class="btn btn-sm">Welcome {!! Str::upper(Auth::user()->name) !!}</span>
                    <form action="{{route('logout')}}" method="POST">
                        @csrf
                        <button type="submit" class="dropdown-item btn btn-sm bg-danger">Log Out</button>
                    </form>
                </div>
                @else
                <div class="navbar-contact">
                    <a class="btn btn-stroke-dark" href="{{route('login')}}">Sign In</a>
                    <a class="btn" href="{{route('register')}}">Sign Up</a>
                </div>
                @endif

                <div class="hamburger-menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

            </nav>


            <div class="overlay"></div>



        </div>
    </header>


    <!-- ============== Header End ============== -->


    <!-- ============== Outer Wrapper Start ============== -->

    <div class="outer-wrapper">

        <div class="main-wrapper">