<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Sunshine Specialist Supports</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->
	<style>
		body {
			padding: 0px;
			margin: 0px 30px;
		}

		.outer-container {
			margin-top: 50px;
		}

		.logo {
			width: 20%;
			margin: auto;
		}

		.logo-container {
			text-align: center;
		}

		.navbar-container {
			width: 51.5	%;
			margin: auto;
		}

		.inner-container {
			text-align: center;
			margin: auto;
		}

		.inner-container h1 {
			color: #2d95df;
			font-size: 52px;
		}

		.inner-container h2 {
			font-size: 44px;
			color: #2d95df;
		}

		.inner-container p {
			font-size: 18px;
			text-align: left;
			width: 50%;
			margin: auto;
		}

		.topnav {
		  overflow: hidden;
		  /*background-color: #333;*/
		}

		.topnav a {
		  float: left;
		  display: block;
		  color: #000;
		  text-align: center;
		  padding: 14px 16px;
		  text-decoration: none;
		  font-size: 14px;
		}

		.topnav a:hover {
		  background-color: #ddd;
		  color: black;
		}

		.topnav a.active {
		  /*background-color: #04AA6D;*/
		  /*color: white;*/
		}

		.topnav .icon {
		  display: none;
		}

		.grey-box {
			background-color: #f1f1f1;
		}

		.grey-container {
			width: 50%;
			margin: auto;
			text-align: left;
		}

		@media screen and (max-width: 600px) {
		  .topnav a:not(:first-child) {display: none;}
		  .topnav a.icon {
		    float: right;
		    display: block;
		  }
		}

		@media screen and (max-width: 600px) {
		  .topnav.responsive {position: relative;}
		  .topnav.responsive .icon {
		    position: absolute;
		    right: 0;
		    top: 0;
		  }
		  .topnav.responsive a {
		    float: none;
		    display: block;
		    text-align: left;
		  }
		}

	</style>
</head>
<body>

<div class="outer-container">
	<div class="logo-container">
		<img src="images/live-logo.png" class="logo">
		<hr style="width: 50%;">
		<div class="navbar-container">
			<div class="topnav" id="myTopnav">
			  <a href="#home" class="active">Home</a>
			  <a href="#news">Your NDIS Plan</a>
			  <a href="#contact">Contact Us</a>
			  <a href="#about">About Me</a>
			  <a href="">Meet the Team</a>
			  <a href="">Consultancy Services</a>
			  <a href="">Privacy Policy</a>
			  <a href="">Complaints & Complements</a>
			  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
			    <i class="fa fa-bars"></i>
			  </a>
			</div>
		</div>
	</div>
	<div class="inner-container">
		<h1>SUNSHINE SPECIALIST SUPPORTS</h1>
		<img src="images/Cropped-family-3.png">
		<h2>It's all about you</h2>
		<p>We specialise in helping people get the most out of themselves – to achieve incredible goals.  Our ultimate aim is to work with you to help you build your own capacity and help you build your team of supports that works with you to meet your needs.
		<br><br>
		We’ve worked with people with many different abilities and from numerous backgrounds, our job is to listen to you so we can help you tailor your NDIS plan to meet your needs.  Let’s work together so you can live your life to its fullest potential while you connect with your community.
		<br><br>
		Being independent means we can move quickly and respond to your individual needs.  Whether it be helping you to better understand your NDIS plan, change services or link in with local community groups, we can assist you.  We can connect you to your favourite recreational, educational or cultural activities, volunteer programs or simply make new friends.
		</p>
		<div class="grey-box">
			<div class="grey-container">
				<h3>SPECIALIST SUPPORTS COORDINATION</h3>
				<p>Complex specialist supports coordination and general supports coordination</p>
				<p>Sunshine Specialist Supports is accredited by the NDIS to deliver Specialist Supports Coordination on the Sunshine Coast and in Brisbane.  We can use our extensive networks to help you:</p>
				<ul>
					<li>navigate the complex maze of disability services</li>
					<li>find the right clinician to write a positive behaviour support plan</li>
					<li>respond to quickly if you’re in crisis</li>
					<li>access a multidisciplinary team to assist with high and complex support needs</li>
					<li>link your specialist disability support needs to your lifestyle choices</li>
					<li>find the right accommodation support</li>
					<li>build your skills to find a job</li>
					<li>connect with your community</li>
					<li>connect you to your required supports</li>
				</ul>
			</div>
		</div>
	</div>
</div>



</body>
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>
</html>