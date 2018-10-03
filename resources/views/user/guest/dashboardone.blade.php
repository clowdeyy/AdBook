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
                <h1>
                  Welcome Guest!
                </h1>
              </section>
              <section class="content">
                  <div class="panel panel-default">
                      <div class="panel-body">
                          @if (session('status'))
                              <div class="alert alert-success" role="alert">
                                  {{ session('status') }}
                              </div>
                          @endif
                          <h5>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</h5>
                         </div>
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
