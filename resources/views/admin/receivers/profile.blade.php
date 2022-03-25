@extends('admin.layouts.master')
@section('title','Receiver Profile | MyBlood')
@section('body')
@push('css')
<!-- Datatables -->
<link href="{{asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endpush
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Receiver Profile</h3>
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
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required"></span>
                                    </label>
                                    <input type="text" id="name" name="name" readonly class="form-control" value="{{ old('name') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required"></span>
                                    </label>
                                    <input type="email" id="email" name="email" readonly class="form-control" value="{{ old('email') }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile">Mobile <span class="required"></span>
                                    </label>
                                    <input type="text" id="mobile" name="mobile" readonly class="form-control" value="{{ old('mobile') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Blood Group </label>
                                    <input type="text" id="blood_group" name="blood_group" readonly class="form-control" value="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address <span class="required"></span>
                                    </label>
                                    <textarea name="address" id="address" cols="30" rows="2" readonly class="form-control">{{ old('address') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="pin">Pin <span class="required" value="{{ old('pin') }}"></span>
                                    </label>
                                    <input type="text" id="pin" name="pin" readonly class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Gender </label>
                                    <input type="text" id="gender" name="gender" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required"></span>
                                    </label>
                                    <input type="text" id="birthday" name="dob" class="date-picker form-control" readonly value="{{ old('dob') }}">
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Mobile</th>
                                                <th>Gender</th>
                                                <th>Date</th>
                                                <th>Place</th>
                                                <th>Picture</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011/04/25</td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
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
@push('js')
<!-- Datatables -->
<script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
@endpush