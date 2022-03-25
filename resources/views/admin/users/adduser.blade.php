@extends('admin.layouts.master')
@section('title','Add User | MyBlood')
@section('body')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add user</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('Store-User')}}">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required="required" class="form-control" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="email" id="email" name="email" required="required" class="form-control" value="{{old('email')}}">
                                    @if($errors->has('email'))
                                    <div class="error text-danger">{{ $errors->first('email') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile">Mobile <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="mobile" name="mobile" required="required" class="form-control" value="{{old('mobile')}}">
                                    @if($errors->has('mobile'))
                                    <div class="error text-danger">{{ $errors->first('mobile') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Blood Group *:</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select class="form-control" name="blood_group" required>
                                        <option value="A+"> A+</option>
                                        <option value="A-"> A-</option>
                                        <option value="B+"> B+</option>
                                        <option value="B-"> B-</option>
                                        <option value="O+"> O+</option>
                                        <option value="O-"> O-</option>
                                        <option value="AB+"> AB+</option>
                                        <option value="AB-"> AB-</option>
                                    </select>
                                    @if($errors->has('blood_group'))
                                    <div class="error text-danger">{{ $errors->first('blood_group') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="address" id="address" cols="30" rows="2" required="required" class="form-control">{{old('address')}}</textarea>
                                    @if($errors->has('address'))
                                    <div class="error text-danger">{{ $errors->first('address') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="pin">Pin <span class="required" value="{{old('pin')}}">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="pin" name="pin" required="required" class="form-control">
                                    @if($errors->has('pin'))
                                    <div class="error text-danger">{{ $errors->first('pin') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Gender *:</label>
                                <div class="col-md-6 col-sm-6 ">
                                    <select id="gender" class="form-control" name="gender" required>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                        <option value="Others">Others</option>
                                    </select>
                                    @if($errors->has('gender'))
                                    <div class="error text-danger">{{ $errors->first('gender') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="date" id="birthday" name="dob" class="date-picker form-control" placeholder="dd-mm-yyyy" required="required" value="{{ old('dob') }}">
                                    @if($errors->has('dob'))
                                    <div class="error text-danger">{{ $errors->first('dob') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="item form-group">
                                <div class="col-md-6 col-sm-6 offset-md-3">
                                    <button class="btn btn-primary" type="button" onclick="window.history.back();">Cancel</button>
                                    <button class="btn btn-primary" type="reset">Reset</button>
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
     $('.form-control').on('click', function() {
        $('.error').hide();
    });
</script>
@endsection