<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>@yield('title') </title>
  <!-- Favicon -->
  <link rel="icon" type="image/png" href="{{asset('favicon.png')}}">
  <!-- Bootstrap -->
  <link href="{{asset('admin/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="{{asset('admin/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
  <!-- NProgress -->
  <link href="{{asset('admin/vendors/nprogress/nprogress.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <!-- bootstrap-progressbar -->
  <link href="{{asset('admin/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
  @stack('css')
  <!-- Custom Theme Style -->
  <link href="{{asset('admin/build/css/custom.min.css')}}" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">