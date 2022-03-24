<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Sunshine Specialist Supports</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <style>
      	html {
      		scroll-behavior: smooth;
      	}
      	 @font-face {
      	 	font-family: Helvetica;
      	 	src: url(fonts/Helvetica.ttf);
      	 }
         body {
         padding: 0px;
         margin: 0px;
         font-family: Helvetica;

         }
         h3 {
         	font-size: 30px;
         	margin-top: 0px;
         }
         ul {
         	margin-top: 5px;
         }
         li {
         	font-size: 18px;
         	margin-bottom: 10px;
         }
         .super-container {
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
         width: 51.5%;
         margin: auto;
         }
         .inner-container {
         text-align: center;
         margin: auto;
         }
         .inner-container h1 {
         color: #2d95df;
         font-size: 52px;
         /*font-family: Helvetica;*/
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
         line-height: 1.75em;
         }
         .topnav {
					  overflow: hidden;
					  background-color: #333;
					}

					.topnav a {
					  float: left;
					  display: block;
					  color: #f2f2f2;
					  text-align: center;
					  padding: 14px 16px;
					  text-decoration: none;
					  font-size: 17px;
					}

					.topnav a:hover {
					  background-color: #ddd;
					  color: black;
					}

					.topnav a.active {
					  background-color: #04AA6D;
					  color: white;
					}

					.topnav .icon {
					  display: none;
					}
         /*.topnav {
         overflow: hidden;
         display: flex;
         justify-content: center;
         }
         .topnav a {
         float: left;
         display: block;
         color: #000;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-size: 1.3vh;
         }
         .topnav a:hover {
         background-color: #ddd;
         color: black;
         }
         .topnav a.active {
         }
         .topnav .icon {
         display: none;
         }*/
         .grey-box {
         background-color: #f1f1f1;
         padding: 40px 0px;
         }
         .grey-box-2 {
         	background-color: #f1f1f1;
         }
         .grey-container {
         width: 50%;
         margin: auto;
         text-align: left;
         }
         .grey-container p {
         width: 100%;
         }
         .grey-container-x {
         	width: 50%;
         	text-align: center;
         	display: flex;
         	margin: auto;
         }
         .grey-container-x div {
         	/*flex: 50%;*/
         }
         .grey-box-flex div {
         flex: 50%;
         }
         .flexbox {
         display: flex;
         margin: auto;
         width: 50%;
         }
         .flexbox div {
         flex: 50%;
         }
         .flexbox div img {
         width: 100%;
         }
         .love-ndis {
         width: 30% !important;
         float: right;
         }
         .bg-image {
         background-image: url('images/Family.jpg');
         width: 100%;
         background-attachment: fixed;
         border-top: 1px solid #000;
         /*background-position: 2500px;*/
         background-repeat: no-repeat;
         background-size: cover;
         }
         .white-box {
         background-color: #fff;
         width: 50%;
         margin: auto;
         text-align: left;
         }
         .white-box .logo {
         width: 50%;
         }
         .white-box span {
         padding-left: 10px;
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
         .grey-box-flex div {
         flex: 100%;
         }
         .topnav a:not(:first-child) {display: none;}
         .topnav a.icon {
         float: right;
         display: block;
         }
         .top-image {
         width: 50%;
         }
         .flexbox, .grey-box-flex, .grey-container-x {
         flex-direction: column;
         }
         .grey-container-x img {
         	width: 100%;
         }
         .grey-container-x {
         	width: 100%;
         }
         .logo-top {
         	display: none;
         }
         .top-hr {
         	display: none;
         }
         }
      </style>
   </head>
   <body>
   	<div class="super-container">
      <div class="outer-container">
         <div class="logo-container">
            <img src="images/live-logo.png" class="logo logo-top">
            <hr style="width: 50%;" class="top-hr">
            <div class="navbar-container">
               <div class="topnav" id="myTopnav">
                  <a href="#" class="active">Home</a>
                  <a href="#ndis-plan">Your NDIS Plan</a>
                  <a href="#contact-us">Contact Us</a>
                  <a href="about.php">About Me</a>
                  <a href="#">Meet the Team</a>
                  <a href="#">Consultancy Services</a>
                  <a href="#">Privacy Policy</a>
                  <a href="#">Complaints & Complements</a>
                  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                  <i class="fa fa-bars"></i>
                  </a>
               </div>
            </div>
         </div>
         <div class="inner-container">
            <h1>SUNSHINE SPECIALIST SUPPORTS</h1>
            <img src="images/topimage.webp" class="top-image">
            <h2 id="ndis-plan">It's all about you</h2>
            <p style="margin-bottom: 50px;">We specialise in helping people get the most out of themselves – to achieve incredible goals.  Our ultimate aim is to work with you to help you build your own capacity and help you build your team of supports that works with you to meet your needs.
               <br><br>
               We’ve worked with people with many different abilities and from numerous backgrounds, our job is to listen to you so we can help you tailor your NDIS plan to meet your needs.  Let’s work together so you can live your life to its fullest potential while you connect with your community.
               <br><br>
               Being independent means we can move quickly and respond to your individual needs.  Whether it be helping you to better understand your NDIS plan, change services or link in with local community groups, we can assist you.  We can connect you to your favourite recreational, educational or cultural activities, volunteer programs or simply make new friends.
            </p>
            <div class="grey-box">
               <div class="grey-container">
                  <h3>SPECIALIST SUPPORTS COORDINATION</h3>
                  <p>Complex specialist supports coordination and general supports coordination</p>
                  <br><br>
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
            <h2>About Us</h2>
            <p style="text-align: center;">NDIS Supports Coordination - serving the Sunshine Coast and Brisbane</p>
            <br><br>
            <p>Sunshine Specialist Supports is an NDIS accredited provider of Level 2 (0106 – Coordination of Supports) and Level 3 (0132 – Specialist Support Coordination) Support Coordination.  We bring a wealth of experience working in the disability sector on the Sunshine Coast to help you achieve your goals with your NDIS plan.<br><br>
               Being a small business gives us the flexibility to provide a personal service that will give you total choice and control of your NDIS package.  We recognise the importance of being independent: for us and for you.  We’ve built a of lot great connections to the local community, being independent means we can help you explore a wider scope of possibilities.<br><br>
            </p>
            <div class="grey-box-2" id="contact-us">
            	<div class="grey-container-x">
               <div>
                  <img src="images/Contact-details-2022.webp">
               </div>
               <div>
                  <img src="images/hands.webp">
               </div>
             </div>
            </div>
            <hr style="border: 1px solid #000; width: 100%;">
            <div class="flexbox">
               <div>
                  <img src="images/TAG-Registered-Provider.jpg">
               </div>
               <div>
                  <img src="images/i-love-ndis.webp" class="love-ndis">
               </div>
            </div>
            <p style="font-size: 16px; text-align: center;">©2019 by Sunshine Specialist Supports.</p>
            
         </div>
      </div>
    </div>
    <div class="bg-image">
       <div class="white-box">
          <img src="images/live-logo.png" class="logo"><br>
          <span>0412 080 494</span>
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