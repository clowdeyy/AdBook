@extends('layouts.d-adm')

@section('content')
<div class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
    
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>Ad</b>B</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Ad</b>Book</span>
        </a>
    
        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown messages-menu">
                <!-- Menu toggle button -->

                    
              <!-- User Account Menu -->
              <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <!-- The user image in the navbar-->
                  <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{auth()->user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
    
                    <p>
                      {{auth()->user()->fname}} {{auth()->user()->lname}} - Admin </p>
                  </li>
                  <!-- Menu Body -->
                  <li class="user-body">
                    <div class="row">
                      <div class="col-xs-16 text-center">
                        <p>AdBook | Hotel Booking System</p>
                      </div>
                    <!-- /.row -->
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Settings</a>
                    </div>
                    <div class="pull-right">
                      <a href="{{ route('logout') }}" class="btn btn-default btn-flat" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">  Log out </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
    
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
    
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="{{asset('dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{auth()->user()->fname}} {{auth()->user()->lname}}</p>
              <!-- Status -->
              <a><i class="fa fa-circle text-success"></i> Administrator</a>
            </div>
          </div>
    
    
          <br>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header">Section</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
                <a href="{{route('viewuser')}}"><i class="fa fa-user" style="color:darkgreen; font-size:20px;"></i> <span>Manage Hotel Admins</span></a>
                </li>
            <li class="treeview">
                <a href="{{route('viewhotel')}}"><i class="fa fa-building" style="color:darkgreen; font-size:20px;"></i> <span>Manage Hotels</span></a>
              </li>
          </ul>
          <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
      </aside>
    

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
      <section class="content-header">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="text-center">Register Hotel Administrator</h3>
            </div>
            <div class="panel-body">
                @if(Session::has('yes'))
                  <div class="alert alert-info alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Information!</strong>{{Session::get('yes')}}
                  </div>
               @endif

               <form style="margin-left: 100px;">
                  <div class="form-row">
                        <div class="form-group col-md-5">
                          <label>First Name</label>
                          <input type="fname" class="form-control" placeholder="First Name">
                        </div>
                        <div class="form-group col-md-5">
                          <label>Last Name</label>
                          <input type="lname" class="form-control" placeholder="Last Name">
                        </div>
                      </div>
                      <div class="form-group col-md-10">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Email Address">
                      </div>
                      <div class="form-group col-md-10">
                          <label>Contact Number</label>
                          <input type="contact" class="form-control" placeholder="Contact Number">
                      </div>
                      <div class="form-group col-md-5">
                          <label>Password</label>
                          <input type="pass" class="form-control" placeholder="Password">
                        </div>
                        <div class="form-group col-md-5">
                          <label>Confirm Password</label>
                          <input type="confirm" class="form-control" placeholder="Confirm Password">
                        </div>
                      </div>
                      {{csrf_field()}}
                      <button type="submit" style="margin-left:128px; margin-bottom:20px;" class="btn btn-primary btn-md">Register Admin</button>
                    </form>   
                    
            </div>
          </div>
      </section>
    </div>

</div>
    <!-- jQuery 2.2.0 -->
        <script src="{{asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/app.min.js')}}"></script>
@endsection
