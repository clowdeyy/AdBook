@extends('layouts.app')

@section('content')
<br>
    <h1>Hotels</h1>
    @if(count($hotels) > 0)
        @foreach($hotels as $hotel)
            <div class="card bg-faded">
                    <h3><a href="/hotels/{{$hotel->id}}">{{$hotel->name}}</a></h3>
                    <small>{{$hotel->description}}</small>
            </div>
        @endforeach
        {{$hotels->links()}}
    @else  
            <p>An error has occured. Please contact administrator</p>
    @endif
@endsection
