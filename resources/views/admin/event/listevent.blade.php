@extends('admin.layouts.master')
@section('title','List Event | MyBlood')
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
                <h3>All Event</h3>
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
                        <h2 class="float-right"> <a href="{{route('Add-Event')}}"><button class="btn btn-primary"><i class="fa fa-plus"></i> Add Event</button></a></h2>
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
                                                <th>Event Name</th>
                                                <th>Event Date & Time</th>
                                                <th>Event Place</th>
                                                <th>Organizer Name</th>
                                                <th>Picture</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($events as $key=>$event)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$event->name}}</td>
                                                <td>{{ date('d-M-Y\ h:i A', strtotime($event->date))}}</td>
                                                <td>{{$event->place}}</td>
                                                <td>{{$event->organizer}}</td>
                                                <td><img src="{{asset ('storage/'. $event->image) }}" alt="" width="100px" height="100px"></td>
                                                <td>
                                                    <a data-toggle="modal" data-target="#view_{{$event->id}}"><img src="{{asset('admin/icon/eye.png')}}" alt="" title="View Detail"></a>&nbsp;
                                                    <a data-toggle="modal" data-target="#update_{{$event->id}}"><img src="{{asset('admin/icon/edit.png')}}" alt="" title="Edit Detail"></a>&nbsp;
                                                    <a onclick="return confirm('Are you sure want to delete?')" href="{{route('Delete-Event',$event->id)}}"><img src="{{asset('admin/icon/delete.png')}}" alt="" title="Delete"></a>
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
@foreach($events as $event)
<!--View Modal Starts-->
<div class="modal fade" id="view_{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="MetatypeModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="MetaTypeModaleditLongTitle"><small>Event Details</small></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Input1">Event Name :-</label>
                            <input type="text" value="{{$event->name}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Input1">Event Date :-</label>
                            <input type="datetime-local" value="{{ date('Y-m-d\TH:i', strtotime($event->date))}}" class="form-control" readonly>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Input1">Event Organizer :-</label>
                            <input type="text" value="{{$event->organizer}}" class="form-control" readonly>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Input1">Event Place :-</label>
                            <textarea class="form-control" readonly>{{$event->place}}</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="Input1">Picture:-</label>
                            <img src="{{asset ('storage/'. $event->image) }}" alt="" width="200px" height="100px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal Ends-->
@endforeach
@foreach($events as $event)
<!-- Update Modal Starts-->
<div class="modal fade" id="update_{{$event->id}}" tabindex="-1" role="dialog" aria-labelledby="MetatypeModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h5 class="modal-title text-light" id="MetaTypeModaleditLongTitle"><small>Event Details</small></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route('Update-Event',$event->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Event Name :-</label>
                                <input type="text" name="name" value="{{$event->name}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Event Date :-</label>
                                <input type="datetime-local" id="date" name="date" value="{{ date('Y-m-d\TH:i', strtotime($event->date))}}" class="form-control" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Event Organizer :-</label>
                                <input type="text" name="organizer" value="{{$event->organizer}}" class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Event Place :-</label>
                                <textarea class="form-control" name="place" required>{{$event->place}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Picture:-</label>
                                <input type="file" name="image" class="form-control p-1" id="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="Input1">Uploaded Picture:-</label>
                                <img src="{{asset ('storage/'. $event->image) }}" alt="" width="200px" height="100px">
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