
<?php
if (isset($_POST['submit'])) {
			$host="localhost";
			$db="mysql"; 
			$username="root";
			$pass="root";
			$con=new mysqli($host,$username,$pass,$db); 

			$F_Name=$_POST['F_Name'];
			$L_Name=$_POST['L_Name'];
			$Company=$_POST['Company'];
			$Email=$_POST['Email'];
			$option=$_POST['radio'];
			

			$insert="insert into contacts(First_name,Last_Name,Company,Email,Interest) values('$F_Name','$L_Name','$Company','$Email','$option')";


			$query=mysqli_query($con,$insert);
			//if($query)
				//echo "Done";
			//else
				//echo "Prob";

			
}
?>


<!DOCTYPE html>
<html>
<head>
<title>Training and Placement, IIIT Naya Raipur</title>
<link rel="icon" href="images/logo.png" type="images/png" />
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--css-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Studies Plus Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
</head>
<body>
	<!--header-->
		<div class="header">
			<div class="header-top">
				<div class="container">
					<div class="detail">
						<ul>
							<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>(0771) 2474040</li>
							<li><i class="glyphicon glyphicon-time" aria-hidden="true"></i> Mon-Sat 9:00 Am to 6:00 Pm </li>
						</ul>
					</div>
					<div class="indicate">
						<p><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>Sector 24,IIIT Naya Raipur,Uparwara 492002</p>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
				<!---Brand and toggle get grouped for better mobile display--->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>				  
							<div class="navbar-brand">
								<h1><a href="index.html"><img src="images/logo-footer.png" alt="" class="img-responsive" />
<span></span></a></h1>
							</div>
						</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<nav class="link-effect-2" id="link-effect-2">
								<ul class="nav navbar-nav">
									<li class="active"><a href="index.html"><span data-hover="Home">Home</span></a></li>
									<li><a href="about.html"><span data-hover="About">About</span></a></li>
									<li><a href="achievements.html"><span data-hover="Achievements">Achievements</span></a></li>
									<li><a href="recruiters.html"><span data-hover="For Recruiters">For Recruiters</span></a></li>	
									<li><a href="events.html"><span data-hover="Events">Events</span></a></li>

									<li><a href="contact.php"><span data-hover="Contact us">Contact us</span></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</nav>
			</div>
		</div>

			<!--contact-->
			<div class="contact-w3l">
				<div class="container">
					<h2 class="tittle">How To Find Us</h2>
					<div class="col-md contact-left cont">
						<div class="contct-info">
							<h4></h4>
							<form action="" method="post">
								<div class="row">
									<div class="col-md-6 row-grid">
									<input type="text" name="F_Name" placeholder="First Name" required>
									</div>
										<div class="col-md-6 row-grid">
											<input type="text" name="L_Name" placeholder="Last Name" required>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="row">
									<div class="col-md-6 row-grid">
									<input type="text" name="Company" placeholder="Company" required>
									</div>
										<div class="col-md-6 row-grid">
									<input type="text" name="Email" placeholder="Email" required>
									</div>
									<div class="clearfix"></div>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="Summer Internship" checked>
									<label class="form-check-label" for="gridRadios1">Summer Internship</label>
								</div>
								</br>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="6 Months Internship" checked>
									<label class="form-check-label" for="gridRadios1">6 Months Internship</label>
								</div>
								</br>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="Placement" checked>
									<label class="form-check-label" for="gridRadios1">Placement</label>
								</div>
								</br>
								<div class="form-check">
									<input class="form-check-input" type="radio" name="radio" id="gridRadios1" value="All of the above" checked>
									<label class="form-check-label" for="gridRadios1">All of the above</label>
								</div>
								</br>
								<input type="submit" name="submit" value="Submit" >
								<input type="reset" value="Clear" >
							</form>
						</div>
					</div>
					</br></br></br>
					<div class="col-md-4 contact-left">
						<div class="contct-info">
							<h4><br><br> Contact Information</h4>
							<p>IIIT–Naya Raipur, Plot No. 7, Sector 24, Near Purkhoti Muktangan ,Naya Raipur – 493661, Chhattisgarh</p>
							<ul>
								
								<li>Telephone :(0771) 2474040</li>
								
								<li><a href="mailto:iiit.nr@gov.in">iiitnr@iiitnr.ac.in</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-8 contact-left cont">
						<div class="contact-bottom">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3721.601085200859!2d81.7639767142047!3d21.12846438594446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a28c434ac2ae871%3A0x4e3568497a7e1d7e!2sInternational+Institute+Of+Information+Technology+Naya+Raipur!5e0!3m2!1sen!2sin!4v1517732323542" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					</div>
				</div>
			</div>
			<!--contact-->
		</div>

		<!---copy--->
			<div class="copy-section">
				<div class="container">
					<div class="social-icons">
						<a href="https://www.facebook.com/iiitnr21/"><i class="icon1"></i></a>
						<a href="#"><i class="icon2"></i></a>
						<a href="#"><i class="icon3"></i></a>
						<a href="#"><i class="icon4"></i></a>
					</div>
					<div class="copy">
<p>&copy; 2018  All rights reserved | Design by <a href="https://iiitnr.ac.in/">IIIT-NR</a></p>
					</div>
				</div>
			</div>
			<!---copy--->


				
</body>
</html>
