<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Reg</title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>
	<!--[if IE 9]>
		<script src="js/media.match.min.js"></script>
	<![endif]-->
<style type="text/css">
p {
    margin: 0 0 20px;
}
.uou-custom-select .select-clone {
	text-align: left;
}
.contact-us .contact-form {
    position: relative;
    padding: 30px;
    background: #FFFFFF;
    border-radius: 3px;
    border: 1px solid #dddddd;
    border-bottom-width: 3px;
} 
</style>
</head>
<body>
<div id="main-wrapper">
	<header id="header">
		<?php include ("top_nev.php"); ?>
		<!-- END .HEADER-TOP-BAR -->
		<div class="header-search fixed-height">
		 	<div class="page-heading about-us-heading">
				<span></span> <!-- for dark-overlay on the bg -->
				<div class="container">
					<h1>Register</h1>
					 
				</div> <!-- END .container-->
			</div> <!-- END .about-us-heading -->
		</div> <!-- END .SEARCH and slide-section -->

		<div class="header-nav-bar">
			<div class="container">
        		<?php include ("main_menu.php"); ?>
      		</div> 
		</div> <!-- end .header-nav-bar -->
	</header> <!-- end #header -->

	<div id="page-content">
		<div class="container">
			<div class="page-content">
			  	<div class="about-us">
			  		<div class="contact-us col-md-6">
			  			 <p class="t_tex text-left">Register</p>
			              	<div class="contact-form">
				                <form action="#" class="comment-form">
				                	<input type="text" placeholder="Your Name" required="">
				                	<input type="email" placeholder="Your Email" required="">
				                	<input type="password" placeholder="Your Password" required="">
				                	<input type="text" placeholder="Website">					                
				                    <a class="btn btn-default pull-left" href="#">
				                  	<i class="fa fa-envelope-o"></i>Submit
				                    </a>
				                  <div style="clear:both;"></div>
				                </form>
				            </div> <!-- end .contact-form -->
					</div>

					<div class="contact-us col-md-6">
			  			 <p class="t_tex text-left">Login</p>
			              	<div class="contact-form">
				                <form action="#" class="comment-form">
				                	<input type="email" placeholder="Your Email" required="">
				                	<input type="password" placeholder="Your Password" required="">
				                	<a class="btn btn-default pull-left" href="#">
				                  	<i class="fa fa-envelope-o"></i>Submit
				                    </a>
				                  <div style="clear:both;"></div>
				                </form>
				            </div> <!-- end .contact-form -->
					</div>
				</div> <!-- end .about-us -->
			</div> <!-- end .page-content -->
		</div> <!-- end .container -->
	</div> <!-- end #page-content -->


<?php include ('footer.php'); ?>


</div> <!-- end #main-wrapper -->

<!-- Scripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
<script src="js/jquery.ba-outside-events.min.js"></script>
<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=true"></script>
<script type="text/javascript" src="js/gomap.js"></script>
<script type="text/javascript" src="js/gmaps.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/scripts.js"></script>

</body>
</html>
