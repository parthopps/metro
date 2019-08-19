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
    <link rel="stylesheet" type="text/css" href="{{asset('css/search.css')}}">
  </head>

  <body>


  <!--- Navigation bar------>

	 <section id="nav-bar">


	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="{{url('/ ')}}"><img class="" src="{{asset('images/Picture3.png')}}" alt="no"><span style="color:white">    Dhaka Metro Rail</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="{{url('/ ')}}">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/ ')}}">ABOUT US </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/ ')}}">SERVICES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{url('/ ')}}">GALLERY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/lost/found/view')}}">LOST & FOUND</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/search')}}">BUY TICKET</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/ ')}}">CONTACT US</a>
      </li>
    </ul>
  </div>
</nav>

	 </section>

    <!-- Header Section Start -->
    <!--header class="key">
	<div class="container">
	 <div class="row">
	 <div class="col-md-6 pp">

	 <form action="" method="">
	 <label>From</label> <br>
	 <select class="form-control">
	  <option value="select">Motijheel</option>
	  <option value="Dhaka Airport">Dhaka Airport</option>
	  <option value="Ashulia">	Ashulia</option>
	  <option value="Mirpur">Mirpur</option>
</select>
	 <br>
	  <label>To</label> <br>
	 <select class="form-control">
	  <option value="select">Motijheel</option>
	  <option value="Dhaka Airport">Dhaka Airport</option>
	  <option value="Ashulia">	Ashulia</option>
	  <option value="Mirpur">Mirpur</option>
</select><br>
	  <label>Date of Journey</label><br>
	 <input class="form-control" type="date" name="lname">
	 <label> Date of Return (Optional)</label> <br>
	 <input class="form-control" type="date" name="lname"><br>

	  <div class="button">
	  <i class="fa fa-search" aria-hidden="true"></i>
	 <button type="submit" class="b1">Search Train</button>

			</div>
			<!--button type="submit" class="btn btn-default btn-block"><span class="glyphicon glyphicon-search"></span> Search Buses </button--->

	 <!--/form>

	 </div>

	  <div class="col-md-6 pps">
	  <img src="images/train.png" alt="psd Logo" class="img-fluid">

	  </div>

	 </div>
	<hr class="p">


	</div>
    </header>
    <!-- Header Section End -->



	<section class="pps2">
	 <div class="container">
	  <div class="row">
	    <div class="col-md-12">

		<div class="back">
		  <p>ONWARD JOURNEY<br>
              Abdullahpur To Motijheel On 19-Aug-2019  Monday</p>
		  </div>
		  <div class="row">
		  <div class="col-md-4 trd">
		 <button class="button">Motijheel Train : 10:30 am</button>
		  </div>
		  <div class="col-md-4 trd">
		   <button class="button">Uttara Train : 10:45 am</button>
		  </div>
		  <div class="col-md-4 trd">
		  <button class="button">Total Customer : 11542 </button>
		  </div>

    </div>

		</div>

	  </div>



	 </div>
	 </section>

		 <section >

	 <div class="container">
	 <div class="row">
	 <div class="col-md-12 hala">
	 <h1>Book Your Ticket Now</h1>
	 </div>
	 </div>
	 </div>
	 <div class="rt">

	 <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">From</th>
      <th scope="col">To</th>
      <th scope="col">Fare</th>
      <th scope="col">Departure Time</th>
      <th scope="col">Action</th>


    </tr>
  </thead>
  <tbody>
    @forelse($all_searches as $all_searche)
    <tr>
      <td>{{ $all_searche->from}}</td>
      <td>{{ $all_searche->to}}</td>
      <td>{{ $all_searche->fare}}</td>
      <td>{{ $all_searche->departure_time}}</td>
      <td><a href="{{ url('edit/search') }}/{{ $all_searche->id }}" class="btn  btn-success">Book now</a>
    </tr>
    @empty
    <tr class="text-center bg-danger">
      <td colspan="8"> NO DATA AVAILABLE </td>
    </tr>
  @endforelse
  </tbody>
</table>

	 </div>
	 </section>
	 <hr>


	<section class="goko">
     <hr>
	 <h3>Buy train tickets in 3 easy steps</h3>
	 <hr>
	 <div class="container">
	   	  <div class="row">

		  <div class="col-md-4 ou">

		  <i class="fa fa-search" style="font-size:50px;padding-top:20px;color:#D2D2D2;"></i>
		   <h3 class="select"> Search </h3>
			<p class="select-p">Choose your origin, destination, journey dates and search for train</p>
		  </div>

		  <div class="col-md-4">
		  <i class="fa fa-train" style="font-size:50px;padding-top:20px;color:#D2D2D2;"></i>
		   <h3 class="select"> Select Train </h3>
			<p class="select-p">Choose your suitable time & price for train</p>
		  </div>

		  <div class="col-md-4">
		  <i class="fa fa-shopping-cart" style="font-size:50px;padding-top:20px;color:#D2D2D2;"></i>
		   <h3 class="select"> Pay </h3>
			<p class="select-p">Choose your payment option from many</p>
		  </div>


		</div>
		<div class="row">
		<div class="col-md-5 pps">

         <i class="fa fa-lock" style="color:#079d49;font-size:21px;margin-right: 5px;"></i>
           <p> Safe and Secure online payment.</p>


		</div>
		<div class="col-md-1 ">

		</div>
		<div class="col-md-5 pps">

         <i class="fa fa-home" style="color:#079d49;font-size:21px;margin-right: 5px;"></i>
           <p>  Package System Available .</p>


		</div>

		</div>



	 </div>


   </section>

   <section>
   <hr>
   <div class="container">
   <div class="row">
   <div class="col-md-6">
   <h4 class="ticket">Why Train tickets from us?</h4>
   <ul>
   <li> <b> Buy Train tickets </b> anytime from anywhere </li>
   <li> Pay by credit card, mobile banking or cash </li>
   <li>Get QR code at your mail</li>
   <li> Dependable customer service <b>( 24 Hours)</b></li>
   </ul>
   </div>

    <div class="col-md-6">
		 <div class="owl-carousel owl-theme">
		   <div class="item">

		 <h5>--- Customer Testimonials ---</h5>
		 <a href="www.mealkoyta.cf">Partho Protim Saha : </a>
		 <p>From my experience, I can say that Dhaka Metro Rail Online Ticket is reliable,safe,easy to use and their prices are one of the best out there.
		 Every time I got best service from Dhaka Metro Rail Online Ticket.I surely will buy ticket again and I can only recommend it to everyone..</p>


		   </div>

		    <div class="item">

		 <h5>--- Customer Testimonials ---</h5>
		 <a href="www.mealkoyta.cf">Tithi Datta : </a>
		 <p>From my experience, I can say that Dhaka Metro Rail Online Ticket is reliable,safe,easy to use and their prices are one of the best out there.
		 Every time I got best service from Dhaka Metro Rail Online Ticket.I surely will buy ticket again and I can only recommend it to everyone..</p>


		   </div>

		    <div class="item">

		<h5>--- Customer Testimonials ---</h5>
		<a href="www.mealkoyta.cf">Fuad Bin Rahman : </a>
		 <p>From my experience, I can say that Dhaka Metro Rail Online Ticket is reliable,safe,easy to use and their prices are one of the best out there.
		 Every time I got best service from Dhaka Metro Rail Online Ticket.I surely will buy ticket again and I can only recommend it to everyone..</p>
		

		   </div>

		     <div class="item">
		    <!--i class="fa fa-quote-left"></i-->
		 <h5>--- Customer Testimonials ---</h5>
		 <a href="www.mealkoyta.cf">Anita Rahman : </a>
		 <p>From my experience, I can say that Dhaka Metro Rail Online Ticket is reliable,safe,easy to use and their prices are one of the best out there.
		 Every time I got best service from Dhaka Metro Rail Online Ticket.I surely will buy ticket again and I can only recommend it to everyone..</p>

		   </div>

		 </div>


		 </div>

   </div>
   </div>

   </section>

   <section>
   <hr>
   <div class="container">
    <h4 class="train">Available Train Operators</h4>
	<hr>
   <div class="row">
   <div class="col-md-3 train1">
    <ul>
   <li> Motijheel </li>
   <li> Bangladesh Secretariat </li>
   <li> Shahbag</li>
   <li> Karwan Bazar</li>
   </ul>
   </div>
   <div class="col-md-3 train1">
    <ul>
   <li> Farmgate  </li>
   <li> Bijoy Sarani </li>
   <li> Agargaon</li>
   <li> Shewrapara </li>
   </ul>
   </div>
   <div class="col-md-3 train1">
    <ul>
   <li> Uttara North </li>
   <li> Uttara Centre </li>
   <li>Uttara South</li>
   <li>Abdullahpur </li>
   </ul>
   </div>
   <div class="col-md-3 train1">
    <ul>
   <li> Pallabi </li>
   <li> Mirpur 11 </li>
   <li> Mirpur-10</li>
   <li> Kazipara </li>
   </ul>
   </div>

   <div>
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

    <!-- Optional JavaScript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Bootstrap JS FIle -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Owl Carousel -->
    <script src="js/j/owl.carousel.min.js"></script>

	<!-- smoothscroll -->
    <script src="js/j/smoothscroll.js" type="text/javascript"></script>

    <!-- Counter Up JS -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="js/j/jquery.counterup.min.js"></script>

    <!-- Theme Main JS File -->
    <script src="js/j/main.js"></script>
  </body>
</html>
