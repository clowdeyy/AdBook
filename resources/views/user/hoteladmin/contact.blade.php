@extends('layouts.d-adm')

@section('content')
<div class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">
      <!-- Main Header -->
      <header class="main-header">
    
        <!-- Logo -->
        <a href="/user" class="logo">
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
          </a>
          <!-- Navbar Right Menu -->
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
                  <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="user-image" alt="User Image">
                  <!-- hidden-xs hides the username on small devices so only the image appears. -->
                  <span class="hidden-xs">{{auth()->user()->name}}</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- The user image in the menu -->
                  <li class="user-header">
                    <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
    
                    <p>
                    {{auth()->user()->fname}} {{auth()->user()->lname}}- Hotel Admin </p>
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
              <img src="{{asset('dist/img/user3-128x128.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>{{auth()->user()->fname}} {{auth()->user()->lname}}</p>
              <!-- Status -->
              <a><i class="fa fa-circle text-success"></i> Hotel Admin</a>
            </div>
          </div>
    
          <!-- search form (Optional) -->
    
          <!-- /.search form -->
    <br>
          <!-- Sidebar Menu -->
          <ul class="sidebar-menu">
            <li class="header"><h4>{{auth()->user()->hotel_id}}</h4></li>
            <!-- Optionally, you can add icons to the links -->
            <li class="treeview">
            <a href="{{route('viewrequests')}}"><i class="fa fa-bell" style="color:darkgreen; font-size:20px;"></i> <span> Booking Requests</span></a>
            </li>
            <li class="treeview">
                <a href="#"><i class="fa fa-building" style="color:darkgreen; font-size:20px;"></i> <span> Manage Rooms</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                  <li><a href="{{route('viewcategory')}}">Create Room Categories</a></li>
                  <li><a href="{{route('viewroom')}}">Create new Room </a></li>
                  <li><a href="#">Update Room Availability </a></li>
                </ul>
              </li>
            <li class="treeview">
              <a href="#"><i class="fa fa-info" style="color:darkgreen; font-size:20px;"></i> <span>Manage Hotel Information</span> <i class="fa fa-angle-left pull-right"></i></a>
              <ul class="treeview-menu">
                  <li><a href="{{route('geninfo')}}">General Information</a></li>
                  <li><a href="{{route('dispinfo')}}">Display Information</a></li>
                  <li><a href="{{route('galinfo')}}">Image Gallery</a></li>
                  <li><a href="{{route('coninfo')}}">Contact Details</a></li>
                </ul>
              </li>
              <li class="treeview">
                <a href="{{route('repinfo')}}"><i class="fa fa-print" style="color:darkgreen; font-size:20px;"></i> <span> Bookings Report</span></a>
              </li>
              <li class="treeview">
                  <a href=""><i class="fa fa-globe" style="color:darkgreen; font-size:20px;"></i> <span>Configure Google Map</span></a>
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
                            <h3 class="text-center">Update Contact Details</h3>
                        </div>
                        <div class="panel-body">
                            @if(Session::has('yes'))
                            <div class="alert alert-info alert-dismissable">
                              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                              <strong>Information: </strong>{{Session::get('yes')}}
                            </div>
                         @endif
                         @include('includes.errormessage')
                          {!! Form::open(['action' => 'ContactController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                          <div class="form-group {{$errors->has('contact') ? 'has-error': ''}}">
                              {{Form::label('contact', 'Telephone')}}
                              {{Form::text('contact', '', ['class' => 'form-control', 'placeholder' => ''])}}
                              <div class="pull-right hidden-xs">
                              <span class="help-block"><i>Telephone Number here</i></span>
                              </div>
                              @if ($errors->has('contact'))
                              <span class="invalid-feedback" role="alert">
                                  <i class="help-block">{{$errors->first('contact')}}</i>
                              </span>
                            @endif
                          </div>
                          <div class="form-group {{$errors->has('email') ? 'has-error': ''}}">
                              {{Form::label('email', 'Email Address')}}
                              {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => ''])}}
                              <div class="pull-right hidden-xs">
                              <span class="help-block"><i>Email Address here</i></span>
                              </div>
                              @if ($errors->has('email'))
                              <span class="invalid-feedback" role="alert">
                                  <i class="help-block">{{$errors->first('email')}}</i>
                              </span>
                            @endif
                          </div>
                          <div class="form-group {{$errors->has('address') ? 'has-error': ''}}">
                              {{Form::label('address', 'Hotel Address')}}
                              {{Form::textarea('address', '', ['class' => 'form-control', 'rows' => 6])}}
                              <div class="pull-right hidden-xs">
                              <span class="help-block"><i>Hotel Address Here</i></span>
                              </div>
                              @if ($errors->has('address'))
                              <span class="invalid-feedback" role="alert">
                                  <i class="help-block">{{$errors->first('address')}}</i>
                              </span>
                            @endif
                          </div>
                            {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
                        </div>
                        {!! Form::close() !!}       
                      </div>
            </section>
      </div>
      <!-- /.content-wrapper -->
</div>
    
    <!-- jQuery 2.2.0 -->
        <script src="{{asset('plugins/jQuery/jQuery-2.2.0.min.js')}}"></script>
        <!-- Bootstrap 3.3.6 -->
        <script src="{{asset('bootstrap/js/bootstrap.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('dist/js/app.min.js')}}"></script>
@endsection
