<div class="col-md-3 left_col">
    <div class="left_col">
        <div class="navbar nav_title" style="border: 0;">
            <a href="" class="site_title"><img src="{{asset('admin/images/logo1.jpg')}}" alt="" height="40px" width="50px"> &nbsp;<span class="text-danger">MyBlood</span></a>
        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="{{asset('admin/images/img.jpg')}}" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Welcome,</span>
                <h2>{{Auth::user()->name}}</h2>
            </div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a href="{{route('Dashboard')}}"><i class="fa fa-home"></i> Dashboard</a></li>
                    <li><a href="{{route('List-User')}}"><i class="fa fa-user"></i> Users</a>
                        <!-- <span class="fa fa-chevron-down"></span></a> -->
                        <!-- <ul class="nav child_menu">
                            <li><a href="{{route('Add-User')}}">Add User</a></li>
                            <li><a href="{{route('List-User')}}">List users</a></li>
                        </ul> -->
                    </li>
                    <li><a href="{{route('List-Donor')}}"><i class="fa fa-user text-success"></i>Blood Donors </a>
                    </li>
                    <li><a href="{{route('List-Receiver')}}"><i class="fa fa-user text-danger"></i>Blood Receivers </a>
                    </li>
                    <li><a href="{{route('List-Request')}}"><i class="fa fa-arrow-down text-danger"></i>Blood Request</a>
                        <!-- <ul class="nav child_menu">
                            <li><a href="{{route('Add-Request')}}">Add Blood Request</a></li>
                            <li><a href="{{route('List-Request')}}">List Blood Request</a></li>
                        </ul> -->
                    </li>
                    <li><a href="{{route('List-Hospital')}}"><i class="fa fa-hospital-o text-danger"></i>Hospitals</a>
                    </li>
                    <li><a href="{{route('List-Blood-Bank')}}"><i class="fa fa-medkit text-danger"></i>Blood Banks</a>
                    </li>
                    <li><a href="{{route('List-Event')}}"><i class="fa fa-calendar"></i>Events</a>
                    </li>
                </ul>
            </div>
        </div>
        <!-- /sidebar menu -->
    </div>
</div>