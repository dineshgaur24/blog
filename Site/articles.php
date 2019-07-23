<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Blog List</title>
	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/custom.css">
	
	<!-- GOOGLE FONTS -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,800%7COpen+Sans:400italic,400,600,700' rel='stylesheet' type='text/css'>
	<!--[if IE 9]>
		<script src="js/media.match.min.js"></script>
	<![endif]-->
<style type="text/css">

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
					<h1>Articles</h1>
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
			   <div class="page-content">
			        <div class="row">
			          <div class="col-md-8">
			            <div class="blog-list">
			            	<p class="t_tex"> ARTICLES/ CREATIVE</p>
			              <div class="post-with-image">			                 
			                <h2 class="title"><a href="blog-post.html">Ps Data Title</a></h2>
			                <p class="user">
			                  <a href="#"><i class="fa fa-user"></i> Admin</a>
			                  <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>			                 
			                </p>
			                <p class="post">
			                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
			                  suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
			                  Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
			                </p>			                
			                <a class="post-read-more" href="view_article.php"><i class="fa fa-angle-right"></i>Read More</a>
			              </div> <!-- end .post-with-image -->
			              
			              <div class="post-with-image">			                 
			                <h2 class="title"><a href="blog-post.html">food Title</a></h2>
			                <p class="user">
			                  <a href="#"><i class="fa fa-user"></i> Admin</a>
			                  <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>			                 
			                </p>
			                <p class="post">
			                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
			                  suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
			                  Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
			                </p>			                
			                <a class="post-read-more" href="view_article.php"><i class="fa fa-angle-right"></i>Read More</a>
			              </div> <!-- end .post-with-image -->

  
						 <div class="post-with-image">			                 
			                <h2 class="title"><a href="blog-post.html">Ui Work Title</a></h2>
			                <p class="user">
			                  <a href="#"><i class="fa fa-user"></i> Admin</a>
			                  <a href="#"><i class="fa fa-folder-open-o"></i> Design</a>			                 
			                </p>
			                <p class="post">
			                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. Proin nibh augue,
			                  suscipit a, scelerisque sed, lacinia in, mi. Cras vel lorem. Etiam pellentesque aliquet tellus.
			                  Phasellus pharetra nulla ac diam. Quisque semper justo at risus.
			                </p>			                
			                <a class="post-read-more" href="view_article.php"><i class="fa fa-angle-right"></i>Read More</a>
			              </div> <!-- end .post-with-image -->

			          	</div> <!-- end .blog-list -->

			            


			            <div class="blog-list-pagination">

			              <ul class="pagination">
			                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
			                <li class="active"><a href="#">1</a></li>
			                <li><a href="#">2</a></li>
			                <li><a href="#">3</a></li>
			                <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
			              </ul>

			            </div> <!-- end .blog-list-pagination -->

			          </div> <!-- end .grid-layout -->

			          <div class="col-md-4">
			            <div class="post-sidebar">

			               <div class="post-sidebar"> 
			            	<div class="post-categories">
			                <h2>Search Categories</h2>
			                 <form>
			                 	<input type="text" class="form-control my" placeholder="Search">
			                    <button class="search-btn1" type="submit"><i class="fa fa-search"></i></button>
			                 </form>
			              </div><!-- end .search category -->
			            </div> <!-- end .post-sidebar -->
			            

			              <div class="post-categories">

			                <h2>Categories</h2>

			                <ul>
			                  <li><a href="#"><i class="fa fa-angle-right"></i>Creative</a></li>
			                  <li><a href="#"><i class="fa fa-angle-right"></i>Design</a></li>
			                  <li><a href="#"><i class="fa fa-angle-right"></i>Development</a></li>
			                  <li><a href="#"><i class="fa fa-angle-right"></i>Uncategorized</a></li>
			                </ul>
			              </div> <!-- end .post-categories -->

			               

			               


			               


			               <!-- end .medium-rectangle -->

			            </div> <!-- end .post-sidebar -->
			          </div> <!-- end .grid-layout -->

			        </div> <!-- end .row -->
      			</div>
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
