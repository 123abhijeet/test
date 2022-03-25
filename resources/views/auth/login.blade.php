<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title></title>
    <!-- ====================== Css file ================== -->

    <link rel="stylesheet" type="text/css" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/fonts.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/swiper.css')}}">
    <link type="text/css" rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

</head>

<body id="body">

    <section class="signup-container p-0">
        <div class="signup-left">
            <figure class="signup-left-bg">
                <img src="{{asset('frontend/images/hero-1.jpg')}}" alt="">
            </figure>
            <div class="signup-left-content">
                <a href="#" class="signup-logo"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
                <div class="signup-left-info">
                    <h1>Lorem ipsum is simply dolor sit amet ipiscing com</h1>
                    <p>Mollis sit parturient amet tortor sit netus commodo. Felis ornare in sagittis praesent et tortor
                        lorem leo mauris.</p>
                </div>
            </div>
        </div>
        <div class="signup-right">
            <div class="signup-right-content">
                <div class="mobile-logo">
                    <a href="#"><img src="{{asset('frontend/images/logo.png')}}" alt=""></a>
                </div>
                <div class="section-heading">
                    <h2>Login</h2>
                    <p>Condimentum eget gravida a urna in adipiscing suspendiss</p>
                </div>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="input-wrapper input-email-icon">
                                <input type="text" name="username" id="username" value="{{old('username')}}" class="form-control" placeholder="abcd@gmail.com">
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="input-wrapper input-password-icon">
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password">
                                @if ($alert = Session::get('error'))
                                <div class="alert alert-warning">
                                    {{ $alert }}
                                </div>
                                @endif
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="input-wrapper d-flex align-items-center justify-content-between">
                                <div class="form-check p-0">
                                    <input class="form-check-input" type="checkbox" name="remember"  id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">Remember Me</label>
                                </div>
                                <a href="{{ route('password.request') }}" class="forget-pass-link">Forgot Password?</a>
                            </div>

                        </div>

                        <div class="col-lg-12">
                            <div class="input-wrapper">
                                <button type="submit" class="btn w-100">Login</button>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <p class="login-text">Not registered yet? <strong><a href="{{route('register')}}">Create an Account</a></strong></p>
                        </div>

                    </div>


                </form>
            </div>
        </div>
    </section>
    <!-- ====================== Js file ================== -->

    <script type="text/javascript" src="{{asset('frontend/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/swiper.js')}}"></script>


    <!-- ====================== Custom Js file ================== -->

    <script type="text/javascript" src="{{asset('frontend/js/slider-scripts.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/custom-js.js')}}"></script>
    <script type="text/javascript" src="{{asset('frontend/js/scripts.js')}}"></script>



    <script type="text/javascript">
        $(".toggle-password").click(function() {

            $(this).toggleClass("fa-eye fa-eye-slash");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>


</body>

</html>