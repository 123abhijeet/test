@extends('admin.layouts.master')
@section('title','Add Blood Request | MyBlood')
@section('body')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Request</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="POST" action="{{route('Store-Request')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="request_number">Request Number <span class="required">*</span>
                                        </label>
                                        <input type="text" id="request_number" name="request_number" required="required" class="form-control" value="{{ $number }}" readonly>
                                        @if($errors->has('request_number'))
                                        <div class="error text-danger">{{ $errors->first('request_number') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="patient_name">Patients name <span class="required">*</span>
                                        </label>
                                        <input type="text" id="patient_name" name="patient_name" required="required" class="form-control" value="{{ old('patient_name') }}">
                                        @if($errors->has('patient_name'))
                                        <div class="error text-danger">{{ $errors->first('patient_name') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Request Type *:</label>
                                        <select class="form-control" name="type" required>
                                            <option value="Blood"> Blood</option>
                                            <option value="Palates"> Palates</option>
                                        </select>
                                        @if($errors->has('type'))
                                        <div class="error text-danger">{{ $errors->first('type') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="unit">Number Unit <span class="required">*</span>
                                        </label>
                                        <input type="number" id="unit" name="unit" required="required" class="form-control" value="{{ old('unit') }}">
                                        @if($errors->has('unit'))
                                        <div class="error text-danger">{{ $errors->first('unit') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Blood Group *:</label>
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
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="required_date">Required Date & Time <span class="required" value="{{ old('required_date') }}">*</span>
                                        </label>
                                        <input type="datetime-local" id="required_date" name="required_date" required="required" class="form-control">
                                        @if($errors->has('required_date'))
                                        <div class="error text-danger">{{ $errors->first('required_date') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Requisition Form from doctor *:</label>
                                        <input type="file" id="requisition_form" name="requisition_form" class="date-picker form-control p-1" required="required">
                                        @if($errors->has('requisition_form'))
                                        <div class="error text-danger">{{ $errors->first('requisition_form') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Pin <span class="required">*</span>
                                        </label>
                                        <input type="text" id="pin" name="pin" class="date-picker form-control" required="required" value="{{ old('pin') }}">
                                        @if($errors->has('pin'))
                                        <div class="error text-danger">{{ $errors->first('pin') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Hospital Name <span class="required">*</span>
                                        </label>
                                        <input type="text" id="hospital" name="hospital" class="date-picker form-control" required="required" value="{{ old('hospital') }}">
                                        @if($errors->has('hospital'))
                                        <div class="error text-danger">{{ $errors->first('hospital') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align">Patients Status *:</label>
                                        <select id="patient_status" class="form-control" name="patient_status" required>
                                            <option value="Normal">Normal</option>
                                            <option value="Critical">Critical</option>
                                        </select>
                                        @if($errors->has('patient_status'))
                                        <div class="error text-danger">{{ $errors->first('patient_status') }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12 col-sm-12 ">
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-1 col-sm-1 label-align">Location <span class="required">*</span>
                                        </label>
                                        <textarea name="location" id="" cols="30" rows="2" class="form-control"></textarea>
                                        @if($errors->has('location'))
                                        <div class="error text-danger">{{ $errors->first('location') }}</div>
                                        @endif
                                    </div>
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