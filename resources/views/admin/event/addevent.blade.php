@extends('admin.layouts.master')
@section('title','Add Event | MyBlood')
@section('body')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Event</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('Store-Event')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Event Name <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="name" name="name" required="required" class="form-control" value="{{old('name')}}">
                                    @if($errors->has('name'))
                                    <div class="error text-danger">{{ $errors->first('name') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Event Date <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="datetime-local" id="date" name="date" required="required" class="form-control" value="{{old('date')}}">
                                    @if($errors->has('date'))
                                    <div class="error text-danger">{{ $errors->first('date') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile">Event Organizer <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="text" id="organizer" name="organizer" required="required" class="form-control" value="{{old('organizer')}}">
                                    @if($errors->has('organizer'))
                                    <div class="error text-danger">{{ $errors->first('organizer') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Event Place <span class="required">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <textarea name="place" id="place" cols="30" rows="2" required="required" class="form-control">{{old('place')}}</textarea>
                                    @if($errors->has('place'))
                                    <div class="error text-danger">{{ $errors->first('place') }}</div>
                                    @endif
                                </div>
                            </div>
                            <div class="item form-group">
                                <label class="col-form-label col-md-3 col-sm-3 label-align" for="image">Picture <span class="required" value="{{old('image')}}">*</span>
                                </label>
                                <div class="col-md-6 col-sm-6 ">
                                    <input type="file" id="image" name="image" required="required" class="form-control p-1">
                                    @if($errors->has('image'))
                                    <div class="error text-danger">{{ $errors->first('image') }}</div>
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