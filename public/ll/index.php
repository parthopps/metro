<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title>Dhaka Metro Rail Online Ticket</title>
		

		
		 <!-- Font Awesome CSS File -->
		<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">

		<!-- Bootstrap CSS File -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

		<!-- Theme CSS File -->
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" type="text/css" href="css/responsive.css">

	</head>

	<body>
	  
	<!--- Navigation bar------>
	  
	 <section id="nav-bar">
	 
	 
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
     <a class="navbar-brand" href="../index.html"><img class="" src="images/Picture3.png" alt="no"><span style="color:white">    Dhaka Metro Rail</span></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.html">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">ABOUT ME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#resume">RESUME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../index.html">WORKS</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#service">SERVICE</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#contact-us">CONTACT</a>
      </li>
    </ul>
  </div>
</nav>
	 
	 </section> 
	 
	 
	 
	<section class="banner"> 
	 
<div class="container" id="container">
<!--div class="row">
<div class="col-md-6">
<h1>pps</h1>
</div>
<div class="col-md-6"-->
	<div class="form-container sign-up-container">
		<form action="" method="POST">
			<h1>Create Account</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your email for registration</span>
			<input type="text" name="username" placeholder="Name" required/>
			<input type="email" name="email" placeholder="Email" required/>
			<input type="password" name="password" placeholder="Password" required/>
			<button name="reg" type="submit" value="Submit"> Sign Up</button>
			
		</form>
		<?php
			
			if(isset($_POST['reg']){
				$username = $_POST['username'];
				$email = $_POST['email'];
				$password = $_POST['password'];
				$phone = $_POST['phone'];
				if (!empty($username) || !empty($password) || !empty($gender) || !empty($email) || !empty($phoneCode) || !empty($phone)) {
				 $host = "localhost";
					$dbUsername = "root";
					$dbPassword = "";
					$dbname = "dhaka_metro";
					//create connection
					$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
					if (mysqli_connect_error()) {
					 die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
					} else {
					 $SELECT = "SELECT email From user Where email = ? Limit 1";
					 $INSERT = "INSERT Into user (username, email, password, phone) values(?, ?, ?, ?)";
					 //Prepare statement
					 $stmt = $conn->prepare($SELECT);
					 $stmt->bind_param("s", $email);
					 $stmt->execute();
					 $stmt->bind_result($email);
					 $stmt->store_result();
					 $rnum = $stmt->num_rows;
					 if ($rnum==0) {
					  $stmt->close();
					  $stmt = $conn->prepare($INSERT);
					  $stmt->bind_param("sssi", $username, $email, $password, $phone);
					  $stmt->execute();
					  echo "New record inserted sucessfully";
					 } else {
					  echo "Someone already register using this email";
					 }
					 $stmt->close();
					 $conn->close();
					}
				} else {
				 echo "All field are required";
				 die();
				}
			
			}
			else{
			
			}
		?>
	</div>
	<div class="form-container sign-in-container">
		<form action="#">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="social"><i class="fa fa-facebook-official"></i></a>
				<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
				<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
			</div>
			<span>or use your account</span>
			<input type="email" placeholder="Email" />
			<input type="password" placeholder="Password" />
			<a href="#">Forgot your password?</a>
			<button>Sign In</button>
			 
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1></h1>
				<p>Sign up & forget about the queue up for long hours to buy tickets</p>

				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Dhaka Metro Rail </h1>
				<p>The Dhaka Metro Rail Line-6 consists of 16 elevated stations each of 180m long and 20.1 km of electricity powered light rail tracks.</p>
				<h2>There’s a smarter way to DML around</h2>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
	
</div>
</section>


<!-- footer>
	<p>
		Created with <i class="fa fa-heart"></i> by
		<a target="_blank" href="https://florin-pop.com">Florin Pop</a>
		- Read how I created this and how you can join the challenge
		<a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
	</p>
</footer -->
	 
	 
	 
	
	    <!-- JS/JQ Library File -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

		<!-- Bootstrap JS File -->
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<!-- Theme Main JS File -->
		<script type="text/javascript" src="js/main.js"></script> 
	</body>
</html>