@extends('admin.layouts.master')
@section('title','User Profile | MyBlood')
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
                <h3>User Profile</h3>
            </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_content">                         
                        <br />
                        <label for="">Last Login at   <input type="datetime-local" value="{{!empty($users->last_login_at) ?  date('Y-m-d\TH:i', strtotime($users->last_login_at)) : 'N/A' }}" class="form-control" readonly></label>
                      
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Name <span class="required"></span>
                                    </label>
                                    <input type="text" id="name" name="name" readonly class="form-control" value="{{ $users->name }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email">Email <span class="required"></span>
                                    </label>
                                    <input type="email" id="email" name="email" readonly class="form-control" value="{{ $users->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="mobile">Mobile <span class="required"></span>
                                    </label>
                                    <input type="text" id="mobile" name="mobile" readonly class="form-control" value="{{ $users->mobile }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Blood Group </label>
                                    <input type="text" id="blood_group" name="blood_group" readonly class="form-control" value="{{ $users->blood_group }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Address <span class="required"></span>
                                    </label>
                                    <textarea name="address" id="address" cols="30" rows="2" readonly class="form-control">{{ $users->address }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="pin">Pin <span class="required"></span>
                                    </label>
                                    <input type="text" id="pin" name="pin" value="{{ $users->pin }}" readonly class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Gender </label>
                                    <input type="text" id="gender" name="gender" value="{{ $users->gender }}" readonly class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align">Date Of Birth <span class="required"></span>
                                    </label>
                                    <input type="text" id="birthday" name="dob" class="date-picker form-control" readonly value="{{ $users->dob }}">
                                </div>
                            </div>
                        </div>
                        <div class="ln_solid"></div>
                    </div>
                    <div class="x_content">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="x_title">
                                    <h2 class="float-left">Donate</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="card-box table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:50%">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Date</th>
                                                <th>Place</th>
                                                <th>Picture</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($donors as $key=>$donor)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$donor->date}}</td>
                                                <td>{{$donor->place}}</td>
                                                <td>{{$donor->image}}</td>
                                                <td><a href="{{route('Receiver-Profile',$donor->id)}}"><img src="{{asset('admin/icon/eye.png')}}" title="View Detail"></a>&nbsp;
                                                    <a onclick="return confirm('Are you sure want to delete?')" href=""><img src="{{asset('admin/icon/delete.png')}}" title="Delete"></a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="x_title">
                                    <h2 class="float-right">Received</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <br><br><br>
                                <div class="card-box table-responsive">
                                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:50%">
                                        <thead>
                                            <tr>
                                                <th>S.NO</th>
                                                <th>Date</th>
                                                <th>Place</th>
                                                <th>Picture</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($receivers as $key=>$receiver)
                                            <tr>
                                            <td>{{$key+1}}</td>
                                                <td>{{$receiver->date}}</td>
                                                <td>{{$receiver->place}}</td>
                                                <td>{{$receiver->image}}</td>
                                                <td><a href="{{route('Donor-Profile',$receiver->id)}}"><img src="{{asset('admin/icon/eye.png')}}" title="View Detail"></a>&nbsp;
                                                    <a onclick="return confirm('Are you sure want to delete?')" href=""><img src="{{asset('admin/icon/delete.png')}}" title="Delete"></a>
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