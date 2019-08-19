

@extends('layouts.app')

@section('content')

<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Dhaka Metro Rail Online Ticket</title>

    <!-- Favicon -->
    <link type="image/gif" href="images/" sizes="32x32">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

	     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Owl Carousel CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.default.min.css">

    <!-- Font Awesome CDN Link -->
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Theme Main CSS File -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/search.css')}}">
  </head>

  <body>

<section>

  <div class="container">
    <div class="row">
      <div class="col-md-12">

        @if(session('status'))

        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
         @endif
<form action="{{url('add/search/insert')}}" method="post" enctype="multipart/form-data">
  @csrf
  <!-- New version -->
  <!-- {{csrf_field()}} old version -->


  <div class="form-group">
  <label> From </label>
  <input type="text" name="from" class="form-control">
</div>
<div class="form-group">
<label> to </label>
<input type="text" name="to" class="form-control"  >
</div>
<div class="form-group">
<label>Fare </label>
<input type="text" name="fare" class="form-control">
</div>
<div class="form-group">
<label>Departure time </label>
<input type="text" name="departure_time" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Add </button>



</form>
</div>
</div>
</div>
</section>
@endsection
<!-- Optional JavaScript -->
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

   <!-- Bootstrap JS FIle -->
   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

   <!-- Owl Carousel -->
   <script src="js/owl.carousel.min.js"></script>

 <!-- smoothscroll -->
   <script src="js/smoothscroll.js" type="text/javascript"></script>

   <!-- Counter Up JS -->
   <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>

   <!-- Theme Main JS File -->
   <script src="js/main.js"></script>


 </body>
</html>
