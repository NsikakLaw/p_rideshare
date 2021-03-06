<?php 

include ('sqlconnect.php');





 ?>
<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="utf-8">
	
	
	<title>Home</title>
	
	<link rel="stylesheet" href="css/theme-yellow.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/arrow.css" />
	<link rel ="stylesheet" href = "css/jquery-ui.css"/>
	<link rel="stylesheet" href="css/animate.css" />
	<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Raleway:400,500,600,700|Montserrat:400,700">
	

   
  </head>
  
  <body class="home">
  
		<!-- Header -->
		<header class="header" role="banner" style = "background;">
			<div class="wrap">
				<!-- Logo -->
				<div class="logo">
					<a href="index.html" title="Transfers"><img src="logos/uwlogo.png" width = "40px" height = "40px"alt="UWRideshare" />UWRideshare</a>
				</div>
				<nav role="navigation" class="main-nav">
				<ul>
					<li class = "active"><a href="index.php" title="" >Home</a></li>
					
					<li><a href = "login.php" title = "Login" >Login</a></li>
					<li><a href="register.php" title="Register" >Register</a></li>
					<li><a href="contact.php" title="Contact" >Contact</a></li>
					
				</ul>
			</nav>
				
			</div>
		</header>
		<!-- //Header -->
	
	<!-- Main -->
	<main class="main" role="main">
		<!-- Intro -->
		<div class="intro">
			<div class="wrap">
				<div class="textwidget">
					<h1 class="wow fadeInDown" style= "color:#FCC307">Need a ride?</h1>
					<h2 class="wow fadeInUp" style= "color:#FCC307">You've come to the right place.</h2>
					<div class="arrow bounce"><a href="#booking">Click me</a></div>
		<!--			<div class="actions">
						<a href="#services" title="Our services" class="btn large white wow fadeInLeft anchor">Our services</a>
						<a href="#booking" title="Make a booking" class="btn large color wow fadeInRight anchor">Make a booking</a>
					</div> -->
				</div>
			</div>
		</div>
		<!-- //Intro -->
		
		<!-- Search -->
		<div class="advanced-search color" id="booking" name = "booking">
			<div class="wrap">
				<form role="form" action="search.php" method="post">
					<!-- Row -->
					<div class="f-row">
						<div class="form-group datepicker one-third">
							<label for="dep-date">Departure date and time</label>
							<input type="text" name="departdate" id="datepicker" />
						</div>
						<div class="form-group select one-third">
							<label>Pick up location</label>
							<select name="pickup">
								<option selected>&nbsp;</option>
								<!--<optgroup label="Waterloo">-->
																							
								<!--</optgroup>-->
								<!--optgroup label="Kitchener">-->
								<option value="Toronto">Toronto</option>										
										<option value="Mississauga">Mississauga</option>				
										<option value="Ottawa">Ottawa</option>
										<option value="Burlington">Burlington</option>
										<option value="St.Catharines">St. Catharines</option>
										<option value="Stratfor">Stratford</option>
										<option value="Hamilton">Hamilton</option>									
										<option value="London">London</option>
										<option value="Vaughan">Vaughan</option>
										<option value="Windsor">Windsor</option>										
										<option value="Brampton">Brampton</option>										
										<option value="Markham">Markham</option>
										<option value="Kitchener">Kitchener</option>
										<option value="Guelph">Guelph</option>					
										<option value="Cambridge">Cambridge</option>
										<option value="Waterloo">Waterloo</option>										
										<option value="Niagara Falls">Niagara Falls</option>										
										<option value="Barrie">Barrie</option>
										<option value = "St.Jacobs">St. Jacobs </option>
										<option value = "Sudbury">Sudbury </option>	

								<!--</optgroup>-->
								
							</select>
						</div>
						<div class="form-group select one-third">
							<label>Drop off location</label>
							<select name="dropoff">
								<option selected>&nbsp;</option>
								<!--<optgroup label="Germany">-->
								<option value="Toronto">Toronto</option>										
										<option value="Mississauga">Mississauga</option>				
										<option value="Ottawa">Ottawa</option>
										<option value="Burlington">Burlington</option>
										<option value="St.Catharines">St. Catharines</option>
										<option value="Stratford">Stratford</option>
										<option value="Hamilton">Hamilton</option>									
										<option value="London">London</option>
										<option value="Vaughan">Vaughan</option>
										<option value="Windsor">Windsor</option>										
										<option value="Brampton">Brampton</option>										
										<option value="Markham">Markham</option>
										<option value="Kitchener">Kitchener</option>
										<option value="Guelph">Guelph</option>					
										<option value="Cambridge">Cambridge</option>
										<option value="Waterloo">Waterloo</option>										
										<option value="Niagara Falls">Niagara Falls</option>										
										<option value="Barrie">Barrie</option>
										<option value = "St.Jacobs">St. Jacobs </option>
										<option value = "Sudbury">Sudbury </option>	
							</select>
						</div>
								
					</div>
					<!-- //Row -->
					
					
					<!-- //Row -->
					
					
					<div>
					
						<div class = "form-group right">
							<button type="submit" name = "searchsubmit" class="btn large black">Find a Ride</button>
						</div>
						<div class="form-group">
							<label>Want to offer a ride? <a href="driverpanel.php" style="color:#000;"  onmouseover='this.style.textDecoration="underline"' 
								onmouseout='this.style.textDecoration="none"'>Go to the Driver Panel </a> </label>
							
						</div>
							
					</div>
					<!--// Row -->
				</form>
			</div>
		</div>
		
	</main>
	<!-- //Main -->
	
	<!-- Footer -->
	<footer class="footer black" role="contentinfo">
		<div class="wrap">
			<div class="row">
				<!-- Column -->
				<article class="one-half">
					<h6>About us</h6>
					<p>We want to provide students and collegues a better, faster and more efficient form of transportation. So farewell to those long hours on the bus, it is time to get to your destination on time!</p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Need help?</h6>
					<p>Contact us via phone or email:</p>
					<p class="contact-data"><span class="ico phone"></span> +1 519 781 3561</p>
					<p class="contact-data"><span class="ico email"></span> <a href="mailto:nlisung@uwaterloo.ca">nlisung@uwaterloo.ca</a></p>
				</article>
				<!-- //Column -->
				
				<!-- Column -->
				<article class="one-fourth">
					<h6>Follow us</h6>
					<ul class="social">
						<li class="facebook"><a href="#" title="facebook">facebook</a></li>
						<li class="twitter"><a href="#" title="twitter">twitter</a></li>
						
					</ul>
				</article>
				<!-- //Column -->
			</div>
			
			<div class="copy">
				
				<nav role="navigation" class="foot-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						
						
						<li><a href="#" title="Contact us">Contact us</a></li>
						
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
<!--	<script src="js/jquery.datetimepicker.js"></script>-->
	<script src="js/jquery.slicknav.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/search.js"></script>
	<script src="js/scripts.js"></script>
	
		<script src = "js/jquery.js"></script>
	<script src = "js/jquery-ui.js"></script>
	<script>
	$(document).ready(function(){
   $('select').on('change', function(event ) {
       //restore previously selected value
       var prevValue = $(this).data('previous');
       $('select').not(this).find('option[value="'+prevValue+'"]').show();
       //hide option selected                
       var value = $(this).val();
       //update previously selected data
       $(this).data('previous',value);
       $('select').not(this).find('option[value="'+value+'"]').hide();
   });
});
</script>
<script type="text/javascript">

 $( "#datepicker" ).datepicker({minDate: 0, dateFormat: 'yy-mm-dd'});
</script>
  </body>
</html>