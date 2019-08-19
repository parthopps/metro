<!doctype html>
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
    <link rel="stylesheet" type="text/css" href="{{asset('css/style1.css')}}">
  </head>

  <body>


  <!--- Navigation bar------>

	 <section id="nav-bar">


	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="{{url('/')}}"><img class="" src="{{asset('images/Picture3.png')}}" alt="no"><span style="color:white">    Dhaka Metro Rail</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/')}}">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">ABOUT US</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">SERVICE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">GALLERY</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/search')}}">BUY TICKET</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/lost/found/view')}}">LOST & FOUND</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/')}}">CONTACT US</a>
      </li>
	  
    </ul>
  </div>
</nav>
 </section>

	 <section class="pps">
	 <div class="container">
	  <div class="row">
	    <div class="col-md-12">

		<div class="back">
		  <p style="color: red;">Lost And Found<br>
              IF YOU LOST OR FOUND SOMETHING,<br> PUT IT HERE. </p>
		  </div>


		</div>

	  </div>



	 </div>
	 </section>


	 <section class="fb-style">
	 <div class="container">
	  <div class="row">


	    <div class="col-md-6 ">
  @foreach( $lostfounds as $lostfound )
		<div class="shado">

		<div class="left">
		<h4><i class="fa fa-address-book-o" aria-hidden="true"></i> : {{ $lostfound->user_name}} </h4>
		<p> <i class="fa fa-calendar" aria-hidden="true"></i> : {{ $lostfound->created_at}} </p>
		<p>{{ $lostfound->description}}</p>
		</div>
		<img src="{{ asset('uploads/product_photos') }}/{{ $lostfound->product_image }}" alt="Trulli" width="400" height="300">
		  <div class="row">
		  <div class="col-md-1">
		 <h5> <i class="fa fa-heart-o" aria-hidden="true"></i></h5>
		  </div>
		  <div class="col-md-1">
		 <h5> <i class="fa fa-comments-o" aria-hidden="true"></i></h5>
		  </div>
		  <div class="col-md-1">
		 <h5> <i class="fa fa-share-square-o" aria-hidden="true"></i></h5>
		  </div>
		  <div class="col-md-5">
		  </div>
		  <div class="col-md-1">
		  <h5><i class="fa fa-bookmark-o" aria-hidden="true"></i></h5>

		  </div>

		  </div>
		  <div class="row">
		  <div class="col-md-4">
		  <input class="form-control" type="text" name="lname" placeholder="comment here">
		  </div>

		  <div class="col-md-3">
		  <button type="button" class="btn btn-info">Post</button>
		  </div>

		  </div>

		</div>
  @endforeach

	  </div>


	  <div class="col-md-1">


	  </div>
	  <div class="col-md-4 ">
	  <div class="shado2">
      @if(session('status'))

      <div class="alert alert-success" role="alert">
          {{ session('status') }}
      </div>
       @endif
	  <h1> <i class="fa fa-user-circle" aria-hidden="true"></i></h1>
     <form action="{{ url('add/lostfound/insert') }}" method="post" enctype="multipart/form-data">
       @csrf
	    <label>User Name</label>
	  <input class="form-control" type="text" name="user_name" placeholder="User Name">
	  <label>Description</label>
	  <textarea name="description" class="form-control"  placeholder="Enter text here.."></textarea>   
    <div class="form-group">
    <label> Product Image_main </label>
    <input type="file"  class="form-control" name="product_image">
  </div>
	  <button type="submit" class="btn btn-info">Post</button>
  </form>
	  </div>
	  </div>

	  </div>

	 </div>
	 </section>

<!--- footer section start---->

	  <footer class="foot">
	  <div class="container">
	  <div class="row">
	    <div class="col-md-12">
	    <p>HelloWorld.com © 2019 All Rights Reserved by Mainul Fuad</p>

	   </div>
	   </div>
     </div>
	  </footer>


	    <!-- JS/JQ Library File -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Bootstrap JS File -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Theme Main JS File -->
		<script type="text/javascript" src="js/main.js"></script>
	</body>
</html>
