@extends('layouts.app')

@section('content')
<link href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet')}}" id="bootstrap-css">
<script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
<script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- Ionicons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
<!-- Theme style -->
<link rel="stylesheet" href="{{asset ('css/sidebar.css') }}">
<!------ Include the above in your HEAD tag ---------->

   <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a>
                        Options
                    </a>
                </li>
                <li><a href="{{route('transac')}}"><i class="fa fa-history" style="color: #008000; font-size: 20px;"></i> Transactions</a></li>
                <li><a href="{{route('guestedit')}}"><i class="fa fa-user" style="color: #008000; font-size: 20px;"></i> Edit Profile</a></li>
                <li><a href=""><i class="fa fa-envelope" style="color: #008000; font-size: 20px;"></i> Message</a></li>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <section class="content-header">
                    <div class="content-body">
                        @if(Session::has('yes'))
                  <div class="alert alert-info alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    <strong>Information!</strong>{{Session::get('yes')}}
                  </div>
               @endif
                <h3> Edit Profile</h3><br>
               <form>
                  <div class="form-row">
                        <div class="form-group col-md-5">
                          <label>First Name</label>
                          <input type="fname" class="form-control" placeholder="{{ Auth::user()->fname }}">
                        </div>
                        <div class="form-group col-md-5">
                          <label>Last Name</label>
                          <input type="lname" class="form-control" placeholder="{{ Auth::user()->lname }}">
                        </div>
                      
                      <div class="form-group col-md-10">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="{{ Auth::user()->email }}">
                      </div>
                      <div class="form-group col-md-10">
                          <label>Contact Number</label>
                          <input type="contact" class="form-control" placeholder="{{ Auth::user()->contact }}">
                      </div>
                      <div class="form-group col-md-10">
                            <label>Old Password</label>
                            <input type="old" class="form-control" placeholder="Old Password">
                        </div>
                      <div class="form-group col-md-5">
                          <label>New Password</label>
                          <input type="pass" class="form-control" placeholder="New Password">
                        </div>
                        <div class="form-group col-md-5">
                          <label>Confirm Password</label>
                          <input type="confirm" class="form-control" placeholder="Confirm Password">
                        </div>
                      </div>
                    </div>
                      {{csrf_field()}}
                      <button type="submit" class="btn btn-primary btn-md">Save Changes</button>
                    </form>   
                    </div>
              </section>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->
     <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
@endsection
