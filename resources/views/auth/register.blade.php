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
                    <h2>Sign Up</h2>
                    <p>Orci gravida felis imperdiet amet id mauris</p>
                </div>
                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="input-wrapper form-input-text">
                                <label for="">Name <sup>*</sup> </label>
                                <input type="text" name="name" class="form-control" value="{{old('name')}}" id="name" placeholder="Enter Your Name">
                                @if($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="input-wrapper form-input-email">
                                <label for="">Email Address <sup>*</sup> </label>
                                <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email" placeholder="abcd@gmail.com">
                                @if($errors->has('email'))
                                <div class="error text-danger">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="input-wrapper form-input-email">
                                <label for="">Mobile <sup>*</sup> </label>
                                <input type="text" class="form-control" name="mobile" value="{{old('mobile')}}" id="mobile" placeholder="+910000000000">
                                @if($errors->has('mobile'))
                                <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="input-wrapper">
                                <label for="myInput">Password <sup>*</sup> </label>
                                <input id="password-field" type="password" class="form-control" name="password" placeholder="Password">
                                <span toggle="#password-field" class="fa fa-eye toggle-password"></span>
                                @if($errors->has('password'))
                                <div class="error text-danger">{{ $errors->first('password') }}</div>
                                @endif
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="input-wrapper">
                                <label for="myInput">Confirm Password <sup>*</sup> </label>
                                <input id="password-field1" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Password">
                                <span toggle="#password-field1" class="fa fa-eye toggle-password"></span>
                            </div>
                        </div>


                        <div class="col-lg-12">
                            <div class="input-wrapper">
                                <button type="submit" class="btn w-100">Signup</button>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <p class="login-text">Already have an account? <strong><a href="{{route('login')}}">Login Here</a></strong></p>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
        $('#email,#name,#password-field,#password-field1').on('click', function() {
        $('.error').hide();
    });
    </script>
</body>
</html>