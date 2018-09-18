@extends('layouts.app')

@section('content')
<link href="{{asset('vends/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <center><h1>List of Hotels</h1></center>
         <center>
            @if(count($hotels) > 0)
                @foreach($hotels as $hotel)
                       <div class="card" style="width: 18rem; display:inline-block; margin:10px; ">
                                <img class="card-img-top" src="{{('image/sam.jpg')}}" alt="Card image cap">
                                <div class="card-body">
                                  <h4 class="card-title">{{$hotel->name}}</h4>
                                  <p class="card-text">{{$hotel->description}}</p>
                                  <a href="/hotels/{{$hotel->id}}" class="btn btn-primary">View More</a>  <a href="{{$hotel->id}}" class="btn btn-success">Book Now!</a>
                                </div>
                        </div>
                @endforeach
                {{$hotels->links()}}
            @else  
                    <p>No hotel(s) added.</p>
            @endif
        </center>
@endsection
