@extends('admin.layouts.master')
@section('title','Dashboard | MyBlood')
@section('body')
<div class="right_col" role="main">
    <div class="">
        <div class="row">
            <div class="col-md-12">
                <div class="">
                    <div class="x_content">
                        <div class="row">
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-user"></i>
                                    </div>
                                    <div class="count">{{$users}}</div>

                                    <h3>Total users</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-user text-danger"></i>
                                    </div>
                                    <div class="count">{{$receivers}}</div>

                                    <h3>Total receivers</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-user text-success"></i>
                                    </div>
                                    <div class="count">{{$donors}}</div>

                                    <h3>Total donors</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-arrow-down text-danger"></i>
                                    </div>
                                    <div class="count">{{$bloodrequests}}</div>

                                    <h3>Total blood request</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-arrow-down text-danger"></i>
                                    </div>
                                    <div class="count">179</div>

                                    <h3>New blood request</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-arrow-up text-success"></i>
                                    </div>
                                    <div class="count">179</div>

                                    <h3>Completed blood request</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-arrow-down text-danger"></i>
                                    </div>
                                    <div class="count">179</div>

                                    <h3>Failure blood request</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-medkit text-danger"></i>
                                    </div>
                                    <div class="count">{{$bloodbanks}}</div>

                                    <h3>Total blood bank</h3>
                                </div>
                            </div>
                            <div class="animated flipInY col-lg-4 col-md-4 col-sm-6  ">
                                <div class="tile-stats">
                                    <div class="icon"><i class="fa fa-hospital-o text-danger"></i>
                                    </div>
                                    <div class="count">{{$hospitals}}</div>

                                    <h3>Total hospital</h3>
                                </div>
                            </div>
                        </div>

                        <br />
                        <div class="row">
                            <div class="col-md-3   widget widget_tally_box">
                                <div class="x_panel fixed_height_390">
                                    <div class="x_title">
                                        <h2>Tally Design</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                                            <canvas id="canvas_line1" height="200"></canvas>
                                        </div>

                                        <div style="text-align: center; margin-bottom: 15px;">
                                            <div class="btn-group" role="group" aria-label="First group">
                                                <button type="button" class="btn btn-default btn-sm">Day</button>
                                                <button type="button" class="btn btn-default btn-sm">Month</button>
                                                <button type="button" class="btn btn-default btn-sm">Year</button>
                                            </div>
                                        </div>

                                        <div>
                                            <ul class="list-inline widget_tally">
                                                <li>
                                                    <p>
                                                        <span class="month">12 December 2014 </span>
                                                        <span class="count">+12%</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="month">29 December 2014 </span>
                                                        <span class="count">+12%</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p>
                                                        <span class="month">16 January 2015 </span>
                                                        <span class="count">+12%</span>
                                                    </p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3   widget widget_tally_box">
                                <div class="x_panel fixed_height_390">
                                    <div class="x_title">
                                        <h2>Sales Close</h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                    <a class="dropdown-item" href="#">Settings 1</a>
                                                    <a class="dropdown-item" href="#">Settings 2</a>
                                                </div>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div style="text-align: center; margin-bottom: 17px">
                                            <ul class="verticle_bars list-inline" style="display: flex;">
                                                <li>
                                                    <div class="progress vertical progress_wide bottom">
                                                        <div class="progress-bar progress-bar-dark" role="progressbar" data-transitiongoal="65"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="progress vertical progress_wide bottom">
                                                        <div class="progress-bar progress-bar-gray" role="progressbar" data-transitiongoal="85"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="progress vertical progress_wide bottom">
                                                        <div class="progress-bar progress-bar-info" role="progressbar" data-transitiongoal="45"></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="progress vertical progress_wide bottom">
                                                        <div class="progress-bar progress-bar-success" role="progressbar" data-transitiongoal="75"></div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="divider"></div>

                                        <ul class="legend list-unstyled">
                                            <li>
                                                <p>
                                                    <span class="icon"><i class="fa fa-square dark"></i></span> <span class="name">Item One Name</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span class="icon"><i class="fa fa-square grey"></i></span> <span class="name">Item Two Name</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span class="icon"><i class="fa fa-square blue"></i></span> <span class="name">Item Three Name</span>
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    <span class="icon"><i class="fa fa-square green"></i></span> <span class="name">Item Four Name</span>
                                                </p>
                                            </li>
                                        </ul>

                                    </div>
                                </div>
                            </div>


                            <div class="col-md-3   widget widget_tally_box">
                                <div class="x_panel ui-ribbon-container fixed_height_390">
                                    <div class="ui-ribbon-wrapper">
                                        <div class="ui-ribbon">
                                            30% Off
                                        </div>
                                    </div>
                                    <div class="x_title">
                                        <h2>User Mail</h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div style="text-align: center; margin-bottom: 17px">
                                            <span class="chart" data-percent="86">
                                                <span class="percent"></span>
                                            </span>
                                        </div>

                                        <h3 class="name_title">Finance</h3>
                                        <p>Short Description</p>

                                        <div class="divider"></div>

                                        <p>If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.</p>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3   widget widget_tally_box">
                                <div class="x_panel fixed_height_390">
                                    <div class="x_content">

                                        <div class="flex">
                                            <ul class="list-inline widget_profile_box">
                                                <li>
                                                    <a>
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <img src="{{asset('admin/images/user.png')}}" alt="..." class="img-circle profile_img">
                                                </li>
                                                <li>
                                                    <a>
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <h3 class="name">Musimbi</h3>

                                        <div class="flex">
                                            <ul class="list-inline count2">
                                                <li>
                                                    <h3>123</h3>
                                                    <span>Articles</span>
                                                </li>
                                                <li>
                                                    <h3>1234</h3>
                                                    <span>Followers</span>
                                                </li>
                                                <li>
                                                    <h3>123</h3>
                                                    <span>Following</span>
                                                </li>
                                            </ul>
                                        </div>
                                        <p>
                                            If you've decided to go in development mode and tweak all of this a bit, there are few things you should do.
                                        </p>
                                    </div>
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