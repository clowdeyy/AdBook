@extends('layouts.app')

@section('content')
<link href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet')}}" id="bootstrap-css">
<script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
<script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
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
                <h3> My Transactions</h3><br>
                <table class="table">
                        <thead>
                          <tr>
                            <th>Hotel</th>
                            <th>Name</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                      {{-- @foreach() --}}
                          <tr class="{{--{{$user->status_id == 0 ? 'alert alert-danger': ''}}--}}   ">
  
                            </td>
                                <td></td> 
                                <td>{{--{{$user->fname}} {{$user->lname}}--}}</td>
                                <td></td>
                                <td></td>
                              <td>
                                <form action="{{--{{route('admin_lock_me', ['id'=> $user->id])}}" method="get" id="formDel{{$user->id}}--}}">
                                  <button type="button" value="" class="btn btn-success btn-s delMe"><i class="fa fa-print"></i></button>
                              </form>
                              </td>
                          </tr>
                        {{-- @endforeach --}}
                        </table>    
 
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
