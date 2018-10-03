@extends('layouts.app')

@section('content')
    <link href="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet')}}" id="bootstrap-css">
    <script src="{{asset('//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('//code.jquery.com/jquery-1.11.1.min.js')}}"></script>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> --}}
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
            <h3>Contact us</h3>
            @if(isset($cont))
            <h5 style="margin-left:20px;"><i class="fa fa-phone" style="color: #008000; font-size: 20px;"></i> {{$cont->contact}}</h5>
            <h5 style="margin-left:20px;"><i class="fa fa-envelope" style="color: #008000; font-size: 20px;"></i> {{$cont->email}}</h5>
            <h5 style="margin-left:20px;"><i class="fa fa-map-marker-alt" style="color: #008000; font-size: 20px;"></i> {{$cont->address}}</h5><br>
            @endif
                <h3>Our Location</h3>
                @if(isset($map))
                <div style="width: 100%; height: 350px;" id="map"></div>
                @endif
        </div>
        <!-- /#page-content-wrapper -->
        <script type="text/javascript">
            function initMap()
            {
                // var myLatlng = new google.maps.LatLng($('#lat').val(),$('#lng').val());
                try {
                var myLatlng = new google.maps.LatLng({{$map->lat}},{{$map->lng}});
                var mapOptions =
                {
                    zoom: 18,
                    center: myLatlng,
                    scrollwheel:true
                }
                var map = new google.maps.Map(document.getElementById("map"), mapOptions);
          
                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    draggable: false
                });
                } catch (error) {
                    console.log(error)
                }
               
            }
          
          </script>
          
          <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAwG2FvuLOl_rGjp4LHR6XSeLIG_ZjjJ0M&callback=initMap"></script>
   
   <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
@endsection
