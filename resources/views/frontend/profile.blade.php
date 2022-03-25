@extends('frontend.layouts.master')
@section('title','Profile | MyBlood')
@section('body')
<section class="common-hero p-0">
    <div class="container-fluid p-0">
        <div class="hero-card">
            <figure class="hero-img"><img src="{{asset('frontend/images/hero-1.jpg')}}" alt=""></figure>
            <div class="container">
                <div class="hero-info">
                    <h1>Profile</h1>
                    <p>Augue fringilla aliquam arcu dui. Morbi nunc libero lectus scelerisque neque. Et diam massa sed arcu est risus.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="clearfix">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="profile-card">
                    <figure class="profile-card-img">
                        @if(!empty($user->image))
                        <img src="{{asset($user->image)}}" alt="">
                        @else
                        <img src="{{asset('frontend/images/profile_image.jpg')}}" alt="">
                        @endif
                    </figure>
                    <div class="profile-card-content">
                        <h3 class="pp-name"><strong> Name :</strong> <span>{{$user->name}}</span></h3>
                        <h4 class="pp-email"><strong> Email :</strong> <span>{{$user->email}}</span></h4>
                        <h4 class="pp-contact"><strong> Contact No. :</strong> <span>{{$user->mobile}}</span></h4>
                        <h4 class="pp-pin"><strong> Pin :</strong> <span>{{!empty($user->pin) ? $user->pin : 'N/A' }}</span></h4>
                        <h4 class="pp-gender"><strong> Gender :</strong> <span>{{!empty($user->gender) ? $user->gender : 'N/A' }}</span></h4>
                        <h4 class="pp-bld-grp"><strong> Blood Group : </strong><span>{{!empty($user->blood_group) ? $user->blood_group : 'N/A'}}</span></h4>
                        <h4 class="pp-dob"><strong> Date of Birth : </strong><span>{{!empty($user->dob) ?  date('d-M-Y', strtotime($user->dob)) : 'N/A'}}</span></h4>
                        <h4 class="pp-address"><strong> Address : </strong><span>{{!empty($user->address) ? $user->address : 'N/A'}}</span></h4>
                        <a href="#update_profile" class="btn">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clearfix">
    <div class="container" id="update_profile">
        <div class="row">
            <div class="col-12">
                <div class="section-heading text-center">
                    <h2>Lorem ipsum is simply</h2>
                    <p>Nothing makes us happier than hearing how happy we make you!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="profile-form">
                    <form action="{{route('Update-Profile')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Name <sup>*</sup></label>
                                    <input type="text" name="name" value="{{$user->name}}" class="form-control" placeholder="Enter Your Name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Email address <sup>*</sup></label>
                                    <input type="email" id="email" name="email" value="{{$user->email}}" class="form-control" placeholder="Enter Your Email address">
                                    @if($errors->has('email'))
                                    <div class="error text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Contact No <sup>*</sup></label>
                                    <input type="text" id="mobile" name="mobile" value="{{$user->mobile}}" class="form-control" placeholder="Contact No">
                                    @if($errors->has('mobile'))
                                    <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Pin <sup>*</sup></label>
                                    <input type="text" id="pin" name="pin" value="{{$user->pin}}" class="form-control" placeholder="Enter Your Pin">
                                    @if($errors->has('pin'))
                                    <div class="error text-danger">{{ $errors->first('pin') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Gender <sup>*</sup></label>
                                    <select name="gender" id="gender">
                                        <option value="Male" @if ($user->gender == 'Male') {{ 'selected' }}@endif>Male</option>
                                        <option value="Female" @if ($user->gender == 'Female') {{ 'selected' }}@endif>Female</option>
                                        <option value="Others" @if ($user->gender == 'Others') {{ 'selected' }}@endif>Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Gender <sup>*</sup></label>
                                    <select name="blood_group" id="blood_group">
                                        <option value="A+" @if ($user->blood_group == 'A+') {{ 'selected' }}@endif>A+</option>
                                        <option value="A-" @if ($user->blood_group == 'A-') {{ 'selected' }}@endif> A-</option>
                                        <option value="B+" @if ($user->blood_group == 'B+') {{ 'selected' }}@endif> B+</option>
                                        <option value="B-" @if ($user->blood_group == 'B-') {{ 'selected' }}@endif> B-</option>
                                        <option value="O+" @if ($user->blood_group == 'O+') {{ 'selected' }}@endif> O+</option>
                                        <option value="O-" @if ($user->blood_group == 'O-') {{ 'selected' }}@endif> O-</option>
                                        <option value="AB+" @if ($user->blood_group == 'AB+') {{ 'selected' }}@endif> AB+</option>
                                        <option value="AB-" @if ($user->blood_group == 'AB-') {{ 'selected' }}@endif> AB-</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Date of Birth <sup>*</sup></label>
                                    <input type="date" name="dob" id="dob" value="<?php echo date('Y-m-d', strtotime($user["dob"])) ?>" class="form-control" placeholder="">
                                    @if($errors->has('dob'))
                                    <div class="error text-danger">{{ $errors->first('dob') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Upload Profile Image</label>
                                    <input type="file" name="image" class="form-control" accept="image/*">
                                    @if($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="input-wrapper">
                                    <label for="" class="form-label">Address <sup>*</sup></label>
                                    <textarea name="address" id="" placeholder="Enter Your Address">{{$user->address}}</textarea>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-wrapper mb-0">
                                    <button class="btn" type="submit">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
    $('#email,#mobile,#pin,#dob').on('click', function() {
        $('.error').hide();
    });
</script>
@endsection