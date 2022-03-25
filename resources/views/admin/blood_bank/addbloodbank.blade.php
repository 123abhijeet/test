@extends('admin.layouts.master')
@section('title','Add Blood Bank | MyBlood')
@section('body')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Blood Bank</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('Store-Blood-Bank')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required="required" class="form-control" value="{{ old('name') }}">
                                    @if($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile">Contact Number <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="number" name="number" required="required" class="form-control" value="{{ old('number') }}">
                                    @if($errors->has('number'))
                                    <div class="error text-danger">{{ $errors->first('number') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="contact_person">Contact Person <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="contact_person" name="contact_person" required="required" class="form-control" value="{{ old('contact_person') }}">
                                    @if($errors->has('contact_person'))
                                    <div class="error text-danger">{{ $errors->first('contact_person') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Location <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="location" id="location" cols="30" rows="2" required="required" class="form-control">{{ old('location') }}</textarea>
                                    @if($errors->has('location'))
                                    <div class="error text-danger">{{ $errors->first('location') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="pin">Pin <span class="required" value="{{ old('pin') }}">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="pin" name="pin" required="required" class="form-control">
                                    @if($errors->has('pin'))
                                    <div class="error text-danger">{{ $errors->first('pin') }}</div>
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