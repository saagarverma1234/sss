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
         /*display: flex;*/
         /*justify-content: center;*/
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
         }
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
         .hidden-bar {
            display: none;
         }

         @media screen and (max-width: 600px) {
         .topnav a:not(:first-child) {display: none;}
           .topnav a.icon {
             float: right;
             display: block;
           }
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
         .top-image {
         width: 100%;
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
         .hidden-bar {
            display: block;
         }
         .navbar-container {
            width: 100%;
         }
         .inner-container h1, .inner-container h2 {
            font-size: 26px;
         }
         .inner-container h3 {
            font-size: 20px;
         }
         .super-container {
            margin: 0px 10px;
         }
         .inner-container p {
            width: 100%;
         }
         .grey-container {
            padding: 0px 5px;
            width: 100%;
         }
         .about {
            font-size: 34px !important;
         }
         .bottom-text {
            font-size: 14px !important;
         }
         .flexbox {
            width: 100%;
         }
         .white-box .logo {
            width: 100%;
         }
         }
      </style>
   </head>
<div class="outer-container">
   <div class="logo-container">
      <img src="images/live-logo.png" class="logo logo-top">
      <hr style="width: 50%;" class="top-hr">
         <div class="navbar-container">
            <div class="topnav" id="myTopnav">
               <a href="/" class="active">Home</a>
               <a href="#ndis-plan">Your NDIS Plan</a>
               <a href="#contact-us">Contact Us</a>
               <a href="about.php">About Me</a>
               <a href="team.php">Meet the Team</a>
               <a href="consultancy.php">Consultancy Services</a>
               <a href="privacy.php">Privacy Policy</a>
               <a href="complaints.php">Complaints & Complements</a>
               <a href="javascript:void(0);" class="icon" onclick="myFunction()">
               <i class="fa fa-bars"></i>
               </a>
            </div>
         </div>
      <hr class="hidden-bar">
   </div>
</div>
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