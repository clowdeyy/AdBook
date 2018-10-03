@extends('layouts.app')

@section('content')
<link href="{{asset('vends/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<br>
    <center><h3  style="font-color:green;">List of Hotels</h3></center>
         <center>
            @if(count($hotels) > 0)
                @foreach($hotels as $hotel)
                        <div class="card border border-success" style="width: 18rem; display:inline-block; margin:10px; ">
                                        <img class="card-img-top border border-primary" style="width:250px; border-radius:50%; height:250px; object-fit:cover;" src="/storage/cover_images/{{$hotel->cover_image}}">
                                        <div class="card-body">
                                          <h4 class="card-title">{{$hotel->name}}</h4>
                                          <p class="card-text" style="font-size:15px;">{{$hotel->description}}</p>
                                          <a href="/hotels/{{$hotel->id}}" class="btn btn-primary">View More</a>  <a href="#" class="btn btn-success">Book Now!</a>
                                        </div>
                        </div>
                @endforeach
                {{$hotels->links()}}
            @else  
                    <p>No hotel(s) added.</p>
            @endif
        </center>
@endsection
