@extends('admin.layouts.master')
@section('title','List Blood Request | MyBlood')
@section('body')
@push('css')
<!-- Datatables -->
<link href="{{asset('admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css')}}" rel="stylesheet">
@endpush
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>All Blood Request</h3>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-secondary" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="float-right"> <a href="{{route('Add-Request')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add Request</button></a></h2>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Request Number</th>
                                                <th>Patients name</th>
                                                <th>Request Type</th>
                                                <th>Number Unit</th>
                                                <th>Blood Group</th>
                                                <th>Required Date & Time</th>
                                                <th>Requisition Form from doctor</th>
                                                <th>Location</th>
                                                <th>Hospital Name</th>
                                                <th>Patients Status</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($requests as $key=>$request)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$request->request_number}}</td>
                                                <td>{{$request->patient_name}}</td>
                                                <td>{{$request->type}}</td>
                                                <td>{{$request->unit}}</td>
                                                <td>{{$request->blood_group}}</td>
                                                <td>{{$request->required_date}}</td>
                                                <td>{{$request->requisition_form}}</td>
                                                <td>{{$request->location}}</td>
                                                <td>{{$request->hospital}}</td>
                                                <td>{{$request->patient_status}}</td>
                                                <td>{{$request->status}}</td>
                                                <td>
                                                    <a href="{{route('View-Request')}}"><img src="{{asset('admin/icon/eye.png')}}" alt="" title="View Detail"></a>&nbsp;
                                                    <!-- <a href=""><img src="{{asset('admin/icon/edit.png')}}" alt="Edit"></a>&nbsp; -->
                                                    <a onclick="return confirm('Are you sure want to delete?')" href=""><img src="{{asset('admin/icon/delete.png')}}" alt="" title="Delete"></a>
                                                </td>
                                            </tr>
                                            @endforeach
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
@endsection
@push('js')
<!-- Datatables -->
<script src="{{asset('admin/vendors/datatables.net/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.flash.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js')}}"></script>
<script src="{{asset('admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js')}}"></script>
<script src="{{asset('admin/vendors/jszip/dist/jszip.min.js')}}"></script>
<script src="{{asset('admin/vendors/pdfmake/build/pdfmake.min.js')}}"></script>
<script src="{{asset('admin/vendors/pdfmake/build/vfs_fonts.js')}}"></script>
@endpush