@extends('layout')

@section('content')

 <!-- Side Navbar -->
<nav class="side-navbar">
    <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
        <div class="sidenav-header d-flex align-items-center justify-content-center">
            <!-- User Info-->
            <div class="sidenav-header-inner text-center"><img src="{{ url('img/man.png') }}" alt="person"
class="img-fluid rounded-circle">
<h2 class="h5">Kenneth Laqui</h2><span>Administrator</span>
</div>
<!-- Small Brand information, appears on minimized sidebar-->
<div class="sidenav-header-logo"><a href="index.html" class="brand-small text-center">
        <strong>B</strong><strong class="text-primary">D</strong></a></div>
</div>
<!-- Sidebar Navigation Menus-->
<div class="main-menu">
    <h5 class="sidenav-heading">General</h5>
    <ul id="side-main-menu" class="side-menu list-unstyled">
        <li><a href="dashboard.html"> <i class="fa fa-tachometer"></i>Dashboard</a></li>
        <li><a href="#employeesdropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-user"></i>Employees</a>
            <ul id="employeesdropdown" class="collapse list-unstyled">
                <li><a href="{{ route('employees.index') }}">View Employees</a></li>
                <li><a href="{{ route('employees.create') }}">New Employee</a></li>
            </ul>
        </li>
        <li><a href="#attendancedropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-clock-o"></i>Attendance</a>
            <ul id="attendancedropdown" class="collapse list-unstyled">
                <li><a href="#">Attendance Log</a></li>
                <li><a href="#">Upload</a></li>
            </ul>
        </li>
        <li><a href="#leavedropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-bed"></i>Leave</a>
            <ul id="leavedropdown" class="collapse list-unstyled ">
                <li><a href="#">View Leave</a></li>
                <li><a href="#">Leave Types</a></li>
                <li><a href="#">Add Leave Types</a></li>
            </ul>
        </li>
        <li><a href="#departmentdropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-users"></i>Department</a>
            <ul id="departmentdropdown" class="collapse list-unstyled ">
                <li><a href="#">View Department</a></li>
                <li><a href="#">Add Department</a></li>
            </ul>
        </li>
        <li><a href="#reportdropdown" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-bar-chart"></i>Reports</a>
            <ul id="reportdropdown" class="collapse list-unstyled ">
                <li><a href="#">Attendance</a></li>
                <li><a href="#">Leave</a></li>
            </ul>
        </li>
        <li>
            <a href="#sendemail" aria-expanded="false" data-toggle="collapse">
                <i class="fa fa-bar-chart"></i>Feedback</a>
            <ul id="sendemail" class="collapse list-unstyled ">
                <li><a href="{{ route('sendemail.index') }}">Email</a></li>
                <li><a href="#">SMS</a></li>
            </ul>
        </li>
    </ul>
</div>
<div class="admin-menu">
    <h5 class="sidenav-heading">Maintenance</h5>
    <ul id="side-admin-menu" class="side-menu list-unstyled">

    </ul>
</div>
</div>
</nav>



<div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars">
                            </i></a><a href="index.html" class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong
                                    class="text-primary">Dashboard</strong></div>
                        </a></div>

                </div>
            </div>
        </nav>
    </header>
    <!-- Breadcrumb-->

</div>
<section class="dashboard-counts section-padding">

</section>


{{-- <footer class="main-footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <p>Your company &copy; 2017-2019</p>
            </div>
            <div class="col-sm-6 text-right">
                <p>Design by <a href="https://bootstrapious.com/p/bootstrap-4-dashboard"
                        class="external">Bootstrapious</a></p>
                <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions and it helps me to run Bootstrapious. Thank you for understanding :)-->
            </div>
        </div>
    </div>
</footer> --}}
{{-- <div class="page">
    <!-- navbar-->
    <header class="header">
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                    <div class="navbar-header"><a id="toggle-btn" href="#" class="nav-btn"><i class="fa fa-bars">
                            </i></a><a href="index.html" class="navbar-brand">
                            <div class="brand-text d-none d-md-inline-block"><span>Bootstrap </span><strong
                                    class="text-primary">Dashboard</strong></div>
                        </a></div>
                </div>
            </div>
        </nav>
    </header>

</div> --}}

{{-- <div class="page">
        <!-- navbar-->
        <header class="header">
            <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-holder d-flex align-items-center justify-content-between">
                <div class="navbar-header">
                    <a id="toggle-btn" href="#" class="fa fa-bars"><i class=""> </i></a><a href="index.html" class="navbar-brand">
                    <div class="brand-text d-none d-md-inline-block"><span></span><strong class="text-primary"> Dashboard</strong></div></a>
                </div>
                </div>
            </div>
            </nav>
        </header>

    </div> --}}



@yield('sidebar')

@endsection
