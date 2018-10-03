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

        <!-- Page Content -->
        <div id="page-content-wrapper">
                <h1 class="text-center">{{$hotels->name}}</h1>
                <p class="text-center">{{$hotels->description}}</p>
                
                <form>
                {{-- {!! Form::open(['action' => '', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
                    <div class="row">
                        <div class="col-md-3">
                            <label for="time_from"><b>Check-in date:</b></label>
                            <input class="form-control border border-success"  type="date" name="time_from" id="">
                        </div>
                            @if($errors->has('time_from'))
                                <p class="help-block">
                                    {{ $errors->first('time_from') }}
                                </p>
                            @endif
                        <div class="col-md-3">
                            <label for="time_to"><b>Check-out date:</b></label>
                            <input class="form-control border border-success" type="date" name="time_to" id="">
                        </div>
                            @if($errors->has('time_to'))
                                <p class="help-block">
                                    {{ $errors->first('time_to') }}
                                </p>
                            @endif
                        <div class="col-md-3">
                            <label for="guest"><b>Number of Guests:</b></label>
                            <select class="form-control border border-success" name="guest" id="">
                                @for ($i = 1; $i <= 10; $i++)
                                    <option value="">{{$i}}</option>
                                @endfor                
                            </select>
                        </div>
                            <div class="col-md-3">
                            <label for=""> </label>
                            
                            <button type="submit" class="btn btn-success btn-block mt-2 ">Check Available Room</button> 
                        </div>
                    </div>                      
                {{-- {!! Form::close() !!} --}}
                </form>
                    
            {{-- @if (isset($rooms) && is_null($rooms)) --}}
                <div class="form-group" style="text-align: center">
                    <label>No rooms found</label>
                </div>
            {{-- @endif
            @if (!is_null($rooms)) --}}
            <div class="panel-body table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                    <tr>
                            <th></th>
                        <th>Room Number</th>
                        <th>Floor</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                        {{-- @foreach ($rooms as $room) --}}
                            <tr data-entry-id="">  {{--{{ $room->id }}--}}
                                <td></td>
                                <td field-key='room_number'></td>
                                <td field-key='floor'></td>
                                <td>
                                        <button class="btn btn-outline-success">
                                            {{-- <a style="color: #ffffff;" href="{{ route('admin.bookings.create',
                                            ['room_id' => $room->id,'time_from' => $time_from, 'time_to' => $time_to]) }}">
                                                {!!trans('quickadmin.find-room.book_room')!!}</a> --}}
                                               Book Now
                                        </button>
                                </td>
                            </tr>
                        {{-- @endforeach
                    @endif --}}
                    </tbody>
                </table>
            </div>
        </div>  
        <!-- /#page-content-wrapper -->

 
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>
@endsection
