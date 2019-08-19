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
     <a class="navbar-brand" href="../index.html"><img class="" src="{{asset('images/Picture3.png')}}" alt="no"><span style="color:white">    Dhaka Metro Rail</span></a>
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
        <a class="nav-link" href="{{url('/ ')}}">GALLERY</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/lost/found/view')}}">LOST & FOUND</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="{{url('/search')}}">BUY TICKET</a>
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


    </tr>
  </thead>
  <tbody>
    <tr>
    <td>{{ $single_search_info->from }}</td>
      <td>{{ $single_search_info->to }}</td>
      <td>{{ $single_search_info->fare }}</td>
      <td>{{ $single_search_info->departure_time }}</td>
    </tr>


  </tbody>
</table>

	 </div>



	 </section>
	 <hr>
	 <section class="momo">
	 <div class="container">
	 <div class="row">
	 <div class="col-md-6 p">
	 <h4> Passenger Details </h4>
	 	 <form action="{{ url('add/buydata/insert') }}" method="post">
       @csrf
	 <label>Name</label> <br>
	 <input class="form-control" type="text" name="name" placeholder="Enter your name">
	 <br>
	  <label>Phone Number</label> <br>
	 <input class="form-control" type="text" maxlength="11" name="phone_number" placeholder="Enter your Phone Number"><br>
	 <label>E-mail Address</label> <br>
	 <input class="form-control" type="text"  name="email" placeholder="Enter your mail address"><br>
	  <label>Date of Journey</label><br>
	 <input class="form-control" type="Date" name="journey_date">
	 <!--<label> Date of Return (Optional)</label> <br>
	 <input class="form-control" type="date" name="return_date"><br>-->
   <!-- $a={{ $single_search_info->fare +50 }}; -->
   <input class="form-control" type="hidden" name="{{ $single_search_info->fare +50 }}"><br>
      <h6>...Payment By...</h6>
	  
	 <!--button class="bkash" type="submit" class="b1" >bKash</button>

  <!-- Button trigger modal -->
					<button type="submit" class="bkash" data-toggle="modal" data-target="#exampleModalCenter">
					  bKash
					</button>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
					  <div class="modal-dialog modal-dialog-centered" role="document">
						<div class="modal-content">
						  <div class="modal-header">
							<h5  style="color:red;" class="modal-title" align="center"  id="exampleModalLongTitle">      Congratulations</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							  <span aria-hidden="true"></span>
							</button>
						  </div>
						  <div class="modal-body">
							 You’ll be sent a mail containing a link to a barcode which our on-board staff will scan.
							 If it’s a return ticket, the barcode is valid for both legs.
							 Thanks 
						  </div>
						  <div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
						  </div>
						</div>
					  </div>
					</div>
			<!--button type="submit" class="btn btn-default btn-block"><span class="glyphicon glyphicon-search"></span> Search Buses </button--->

	 </form>
	 </div>
	 <div class="col-md-1">
	 </div>
	  <div class="col-md-5 p">
	 <h4> Fare Details </h4>
	<ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Ticket Price
    <span class="badge badge-primary badge-pill">{{ $single_search_info->fare }}</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Processing Fee
    <span class="badge badge-primary badge-pill">5</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    Total
    <span class="badge badge-primary badge-pill">{{ $single_search_info->fare +5 }}</span>
  </li>
</ul>
<div class="note">
<h5>Please Note</h5>
<p>1.The Processing Fee and Bank Charges are non-refundable</h5>
<p>2.You will find your Ticket QR in your Mail.</p>
<div>

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
