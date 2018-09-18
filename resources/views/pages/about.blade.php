@extends('layouts.app')

@section('content')
    <link href="{{asset('vends/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <h1 class="my-4">AdBooK
    <small style="font-size: 0.5em;">A Hotel Booking System Kiosk.</small>
  </h1>
  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam aliquam inventore corrupti eveniet quisquam quod totam laudantium repudiandae obcaecati ea consectetur debitis velit facere nisi expedita vel?</p>

  <!-- Team Members Row -->
  <div class="row">
    <div class="col-lg-12">
      <h2 class="my-4">Meet the team!</h2>
    </div>
    <div class="col-lg-4 col-sm-6 text-center mb-4">
      <img class="rounded-circle img-fluid d-block mx-auto" src="image/sample.jpg" style="width:200px; height:200px;" alt="">
      <h3>Carlo Gatchalian
        <small style="font-size: 0.50em;">System Programmer</small>
      </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam!</p>
    </div>
    <div class="col-lg-4 col-sm-6 text-center mb-4">
      <img class="rounded-circle img-fluid d-block mx-auto" src="image/sample.jpg" style="width:200px; height:200px;" alt="">
      <h3>Sabreen Amil
        <small style="font-size: 0.50em;">Project Manager</small>
      </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam!</p>
    </div>
    <div class="col-lg-4 col-sm-6 text-center mb-4">
      <img class="rounded-circle img-fluid d-block mx-auto" src="image/sample.jpg" style="width:200px; height:200px;" alt="">
      <h3 >Christian Reyes
        <small style="font-size: 0.50em;">System Analyst</small>
      </h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sint, explicabo dolores ipsam!</p>
    </div>
  </div>
<!-- /.container -->

   <!-- Bootstrap core JavaScript -->
   <script src="{{asset('vends/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('vends/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@endsection
