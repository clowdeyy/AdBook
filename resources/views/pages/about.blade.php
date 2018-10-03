@extends('layouts.app')

@section('content')
    <link href="{{asset('vends/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

  <h1 class="my-4">AdBooK
    <small style="font-size: 0.5em;">A Hotel Booking System Kiosk.</small>
  </h1>
  <p  style="font-size:15px;">Adbook is a software disigned  to solve problems encountered and lessen the time consumption during the onsite booking or reservation. The syetem aims to design and develop a user-friendly Hotel Booking System Kiosk for the purpose of  enhancing the process and flow of the manual system. The system is intended for Zamboanga City Integrated Bus Terminal, Zamboanga City International Airport, and Zamboanga City Port, it will be installed with the function to browse different hotels in Zamboanga City.
  </p>

  <!-- Team Members Row -->
  <div class="row">
    <div class="col-lg-12">
      <h2 class="my-4">Meet the team!</h2>
    </div>
    <div class="col-lg-4 col-sm-6 text-center mb-4">
        <img class="card-img-top border border-success" style="width:180px; border-radius:50%; height:180px; object-fit:cover;" src="image/carlo.jpg">
      <h3>Carlo Gatchalian
        <small style="font-size: 0.50em;">System Programmer</small>
      </h3>
      <p  style="font-size:15px;">Responsible for understanding the business requirements, design and actual building of the solution. </p>
    </div>
    <div class="col-lg-4 col-sm-6 text-center mb-4">
      <img class="card-img-top border border-success" style="width:180px; border-radius:50%; height:180px; object-fit:cover;" src="image/sab.jpg">
      <h3>Sabreen Amil
        <small style="font-size: 0.50em;">Project Manager</small>
      </h3>
      <p  style="font-size:15px;">Manage, leads, and plan the overall project deliverables during the development phase.</p>
    </div>
    <div class="col-lg-4 col-sm-6 text-center mb-4">
      <img class="card-img-top border border-success" style="width:180px; border-radius:50%; height:180px; object-fit:cover;" src="image/chan.jpg">
      <h3 >Christian Reyes
        <small style="font-size: 0.50em;">System Analyst</small>
      </h3>
      <p  style="font-size:15px;">The one who ensures that the requirements of the research are captured and documented correctly.</p>
    </div>
  </div>
<!-- /.container -->

   <!-- Bootstrap core JavaScript -->
   <script src="{{asset('vends/vendor/jquery/jquery.min.js')}}"></script>
   <script src="{{asset('vends/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
@endsection

