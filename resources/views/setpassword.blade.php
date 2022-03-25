<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Blood Admin Register</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
    <!-- Bootstrap -->
    <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- Animate.css -->
    <link href="{{asset('admin/vendors/animate.css')}}/animate.min.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<meta name="csrf-token" content="{{ csrf_token() }}" />

<body class="login">
    <div>
        <div class="login_wrapper">
            <div id="register" class="">
                <section class="login_content">
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h1>Set Password</h1>
                        <div>
                            <input type="hidden" name="" value="{{app('request')->input('email')}}" id="">
                            {{Session::put('email',app('request')->input('email'))}}
                        </div>
                        <div>
                            <input type="hidden" name="name" class="form-control" value="{{!empty($userdetails->name) ? $userdetails->name : ''}}" />
                        </div>
                        <div>
                            <input type="text" name="email" class="form-control" value="{{!empty($userdetails->email) ? $userdetails->email : '' }}" readonly />
                        </div>
                        <div>
                            <input type="hidden" name="mobile" class="form-control" value="{{!empty($userdetails->mobile) ? $userdetails->mobile : ''}}" />
                        </div>
                        <div>
                            <input type="text" id="username" name="username" value="{{old('username')}}" class="form-control" placeholder="Username" required />
                            @if($errors->has('username'))
                            <div class="error text-danger">{{ $errors->first('username') }}</div>
                            @endif
                        </div>
                        <div>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required />
                            @if($errors->has('password'))
                            <div class="error text-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div>
                            <input type="password" name="password_confirmation" class="form-control" placeholder="Retype Password" required />
                        </div>
                        <div>
                            <input type="submit" value="Submit" class="btn btn-primary ">
                        </div>
                        <div class="clearfix"></div>
                        <div class="separator">
                            <div class="clearfix"></div>
                            <br />
                            <div>
                                <h1><img src="{{asset('admin/images/blood-drop.png')}}" alt="" height="25px" width="25px"> MyBlood!</h1>
                                <p>Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#email,#name,#username,#password,#confirm-password').on('click', function() {
        $('.error').hide();
    });
    // $('#username').on('focusout', function() {
    //     var username = $('#username').val();
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });
    //     $.ajax({
    //         type: "POST",
    //         url: '/get-username/' + username,
    //         dataType: "json",
    //         success: function(data) {
    //             if(data != '')
    //             {
    //                 alert('test1');
    //             }
    //             else
    //             {
    //                 alert('test2');
    //             }
    //         }
    //     });
    // });
</script>