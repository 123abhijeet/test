@extends('admin.layouts.master')
@section('title','View Blood Request | MyBlood')
@section('body')
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>View Blood Request</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">
                        <br />
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="request_number">Request Number<span class="required"></span>
                                    </label>
                                    <input type="text" id="request_number" readonly class="form-control" value="{{ old('request_number') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="patient_name">Patients name<span class="required"></span>
                                    </label>
                                    <input type="text" id="patient_name" readonly class="form-control" value="{{ old('patient_name') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="request_type">Request Type <span class="required"></span>
                                    </label>
                                    <input type="text" id="request_type" name="request_type" readonly class="form-control" value="{{ old('request_type') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Number Unit</label>
                                    <input type="text" id="number_unit" name="number_unit" readonly class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Blood Group </label>
                                    <input type="text" id="blood_group" name="blood_group" readonly class="form-control" value="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Required Date & Time </label>
                                    <input type="text" id="required_date" name="required_date" readonly class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="item form-group">
                                    <div class="col-md-2 col-sm-2">
                                        <label class="col-form-label label-align" for="location">Location <span class="required"></span>
                                        </label>
                                    </div>
                                    <div class="col-md-10">
                                        <textarea name="location" id="location" cols="30" rows="2" readonly class="form-control">{{ old('location') }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="pin">Pin <span class="required" value="{{ old('pin') }}"></span>
                                    </label>
                                    <input type="text" id="pin" name="pin" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Hospital Name </label>
                                    <input type="text" id="hospital_name" name="hospital_name" readonly class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Patients Status </label>
                                    <input type="text" id="patient_status" name="patient_status" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Requisition Form from doctor </label>
                                    <input type="text" id="requisition_form" name="requisition_form" readonly class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection