@extends('layouts.app')

@section('content')
    <link href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet')}}" id="bootstrap-css">
    <script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset ('css/sidebar.css') }}">

    {{-- Style for Icons --}}
   <div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <br style="height: .5em;">
                    <a href="/hotels" class="btn btn-outline-success my-2 my-sm-0" style="padding: 8px; margin:15px; margin-top:15px; -webkit-border-radius: 10px;  width: 218px;">Back to Hotels</a>
                <br style="height: .5em;">
                <li class="sidebar-brand">
                    <a style="font-size: 25px; margin:10px;">
                            {{$hotels->name}}
                    </a>
                </li>
                <li>
                    <a href="/hotels/{{$hotels->id}}"><i class="fa fa-home" style="color: #008000; font-size: 20px;" ></i> Hotel Information</a>
                </li>
                <li>
                    <a href="{{ URL('/gallery/'.$hotels->id) }}"><i class="fa fa-images" style="color: #008000; font-size: 20px;"></i> Browse Images</a>
                </li>
                <li>
                    <a href="{{ URL('/rooms/'.$hotels->id) }}"><i class="fa fa-bed" style="color: #008000; font-size: 20px;"></i> Book a room</a>
                </li>
                <li>
                    <a href="{{ URL('/contact/'.$hotels->id) }}"><i class="fa fa-globe" style="color: #008000; font-size: 20px;"></i> Contact Details</a>
                </li>
            </ul>
        </div>
    </div>
        <!-- Page Content -->
        <div class="content-wrapper" style="margin-left:150px;">
            <br>
            <h4>Image Gallery</h4> 

        </div>
               
        <!-- /#page-content-wrapper -->


    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
@endsection
