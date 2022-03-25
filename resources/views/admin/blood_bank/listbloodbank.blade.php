@extends('admin.layouts.master')
@section('title','List Blood Bank | MyBlood')
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
                <h3>All Blood Bank</h3>
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
                        <h2 class="float-right"> <a href="{{route('Add-Blood-Bank')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add Blood Bank</button></a></h2>
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
                                                <th>Name</th>
                                                <th>Location</th>
                                                <th>Pin</th>
                                                <th>Contact Number</th>
                                                <th>Contact Person</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bloodbanks as $key=>$bloodbank)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$bloodbank->name}}</td>
                                                <td>{{$bloodbank->location}}</td>
                                                <td>{{$bloodbank->pin}}</td>
                                                <td>{{$bloodbank->number}}</td>
                                                <td>{{$bloodbank->contact_person}}</td>
                                                <td></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#view_{{$bloodbank->id}}"><img src="{{asset('admin/icon/eye.png')}}" alt="" title="View Detail"></a>&nbsp;
                                                    <a onclick="return confirm('Are you sure want to delete?')" href="{{route('Delete-Blood-Bank',$bloodbank->id)}}"><img src="{{asset('admin/icon/delete.png')}}" alt="" title="Delete"></a>
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
@foreach($bloodbanks as $bloodbank)
<!-- Modal Starts-->
<div class="modal fade" id="view_{{$bloodbank->id}}" tabindex="-1" role="dialog" aria-labelledby="MetatypeModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="MetaTypeModaleditLongTitle"><small>Blood Bank Details</small></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('Update-Blood-Bank',$bloodbank->id)}}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Name :-</label>
                                <input type="text" name="name" value="{{$bloodbank->name}}" class="form-control" required>
                                @if($errors->has('name'))
                                <div class="error text-danger">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Number :-</label>
                                <input type="text" name="number" value="{{$bloodbank->number}}" class="form-control" required>
                                @if($errors->has('number'))
                                <div class="error text-danger">{{ $errors->first('number') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Contact Person :-</label>
                                <input type="text" name="contact_person" value="{{$bloodbank->contact_person}}" class="form-control" required>
                                @if($errors->has('contact_person'))
                                <div class="error text-danger">{{ $errors->first('contact_person') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Pin :-</label>
                                <input type="text" id="pin" name="pin" required="required" class="form-control" value="{{$bloodbank->pin}}">
                                @if($errors->has('pin'))
                                <div class="error text-danger">{{ $errors->first('pin') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Input1">Location :-</label>
                                <textarea name="location" id="location" cols="30" rows="2" required="required" class="form-control">{{ $bloodbank->location }}</textarea>
                                @if($errors->has('location'))
                                <div class="error text-danger">{{ $errors->first('location') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Modal Ends-->
@endforeach
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