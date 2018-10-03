<?php
include('sqlconnect.php');

if(isset($_SESSION['user_id']))
{
	header("location:driverpanel.php");
}

$message = '';

if(isset($_POST["login"]))
{
	$query = "
	SELECT * FROM register_user 
		WHERE user_email = :user_email
	";
	$statement = $connect->prepare($query);
	$statement->execute(
		array(
				'user_email'	=>	$_POST["email"]
			)
	);
	$count = $statement->rowCount();
	if($count > 0)
	{
		$result = $statement->fetchAll();
		foreach($result as $row)
		{
			if($row['user_email_status'] == 'verified')
			{
				if(password_verify($_POST["password"], $row["user_password"]))
				//if($row["user_password"] == $_POST["user_password"])
				{
					$_SESSION['user_id'] = $row['register_user_id'];
					header("location:driverpanel.php");
				}
				else
				{
					$message = "<label class = 'text-danger'>Wrong Password</label>";
				}
			}
			else
			{
				$message = "<label class ='text-danger'>Please First Verify, your email address</label>";
			}
		}
	}
	else
	{
		$message = "<label class='text-danger'>Wrong Email Address</label>";
	}
}


  ?>
<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
	
	
	<title>Login</title>
	
	<link rel="stylesheet" href="css/theme-yellow.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> -->
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
	
  </head>
  
  <body>
    <!-- Header -->
	<header class="header" role="banner" style = "background:#191F26;">
		<div class="wrap">
			<!-- Logo -->
			<div class="logo">
				<a href="index.php" title="Transfers"><img src="logos/uwlogo.png" width = "40px" height = "40px" alt="" />UWRideShare</a>
			</div>
			<nav role="navigation" class="main-nav">
				<ul>
					
					<li class = "active"><a href = "" >Login</a></li>
					<li><a href="signup.php" title="Register">Sign Up</a></li>
					<li><a href="contact.php" title="Contact">Contact</a></li>
					
				</ul>
			</nav>
			
		</div>
	</header>
	<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		
		<br>
		<br>
		
		<div class="wrap">
			<div class="row">
				<!--- Content -->
				<div class="content one-half modal">
					<!--Login-->
					<div class="box">
						<form action = "" method = "post">
							<?php echo $message; ?>
							<div class="f-row">
								<div class="full-width">
									
									<input type="text" id="email" placeholder="Email Address" name = "email" required />
								</div>
							</div>
							<div class="f-row">
								<div class="full-width">
									
									<input type="password" placeholder="Password" id="password" name = "password" required />
								</div>
							</div>	
								<div class="f-row">
								<div class="full-width">
									<input type="submit" name = "login" value="Login" class="btn color medium full" />
								</div>
							</div>
								
							<div class = "imgContainer">
							
							<h3 style = "text-align:center; padding-top:20%;">You can also login using Facebook or Google</h3>
									<div class = "imgContent">
										<a target="_blank" href= "https://www.facebook.com"><img src="logos/fb_logo.png" alt="facebook" width ="80px" height = "80px" style = "margin-left:30%;"  /> </a>
										
										
										<a  target= "_blank" href="https://accounts.google.com/ServiceLogin">
										<img src = "logos/google_logo.png" alt = "google" width = "80px" height = "80px" style= "margin-left:10%"/> </a>
									</div>	
								</div>	
							
							
							
							
							
							<p><a href="#">Forgotten password?</a><br />Dont have an account yet? <a href="signup.php">Sign up</a>.</p>
						</form>
					</div>
					<!--//Login-->
				</div>
				<!--- //Content -->
			</div>
		</div>
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	<footer class="footer black" role="contentinfo" >
		<div class="wrap">
			<div class="row">
				<!-- Column -->
				<article class="one-half">
					<h6>UWRideshare Mission</h6>
					<p>We want to provide students and collegues a better, faster and more efficient form of transportation. So farewell to those long hours on the bus, it is time to get to your destination on time!</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Need help?</h6>
					<p>Contact us via phone or email:</p>
					<p class="contact-data"><span class="ico phone"></span> +1-519-781-3561</p>
					<p class="contact-data"><span class="ico email"></span> <a href="mailto:nlisung@uwaterloo.ca">ttanya@uwaterloo.ca</a></p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Follow us</h6>
				<ul class="social">
						<li class="facebook"><a target= "_blank" href="https://facebook.com" title="facebook">facebook</a></li>
						<li class="twitter"><a href="https://twitter.com" title="twitter">twitter</a></li>
					
					</ul>
				</article>
				<!-- //Column -->
			</div>
			
			<div class="copy">
				
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#" title="Contact us">Contact us</a></li>
						<!--<li><a href="#" title="Blog">Blog</a></li>
						<li><a href="#" title="About us">About us</a></li>						
						<li><a href="#" title="Terms of use">Terms of use</a></li>
						<li><a href="#" title="Help">Help</a></li>
						<li><a href="#" title="For partners">For partners</a></li> -->
					</ul>
				</nav>
			</div>
		</div>
	</footer>
	<!-- //Footer -->
	
	<!-- Preloader -->
	<div class="preloader">
		<div id="followingBallsG">
			<div id="followingBallsG_1" class="followingBallsG"></div>
			<div id="followingBallsG_2" class="followingBallsG"></div>
			<div id="followingBallsG_3" class="followingBallsG"></div>
			<div id="followingBallsG_4" class="followingBallsG"></div>
		</div>
	</div>
	<!-- //Preloader -->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
	<script src="js/jquery.uniform.min.js"></script>
	<script src="js/jquery.datetimepicker.js"></script>
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/scripts.js"></script>
	
  </body>
</html>