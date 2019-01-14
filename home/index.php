<?php
//ob_start();
session_start();
$ip = gethostbyname("");

if (!isset($_SESSION["username"])) {
    header("Location: ../index.php");
}
//require_once 'model/dbcontent.php';
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Graphical Password - Home Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'> -->
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	<header>
		<div class="container text-center">
			<div class="fh5co-navbar-brand">
                            <a class="fh5co-logo" href="index.php"><img src="images/loc.png"/></a>
			</div>
			<nav id="fh5co-main-nav" role="navigation">
				<ul>
					<li><a href="index.php" class="active">Home</a></li>
					<li><a href="../claimsalary.php">Claim Salary</a></li>
                                        <li><a href="../loan.php">Loan Facility</a></li>
					<li><a href="../profilesetup.php">Profile Setup</a></li>
					<li><a href="../index.php">Profile</a></li>
					<li id="logout"><a href="#">Logout</a></li>
					<!--<li><a href="contact.html">Contact</a></li>-->
				</ul>
			</nav>
		</div>
	</header>
	
<!--	<div class="owl-carousel owl-carousel1 owl-carousel-fullwidth fh5co-light-arrow animate-box" data-animate-effect="fadeIn">
		<div class="item"><a href="images/featured-1.jpg" class="image-popup"><img src="images/featured-1.jpg" alt="image"></a></div>
		<div class="item"><a href="images/featured-2.jpg" class="image-popup"><img src="images/featured-2.jpg" alt="image"></a></div>
                <div class="item"><a href="../images/floor.jpg" class="image-popup"><img src="../images/floor.jpg" alt="image"></a></div>
	</div>-->
            
            
            	<div id="fh5co-featured-work-section">
		<div class="container-fluid">
			<div class="heading-section text-center">
				<h2>On This Platform</h2>
			</div>
			<div class="owl-carousel owl-carousel2">
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic1.jpg" alt="image">
					<a href="../claimsalary.php" class="pop-up-overlay text-center">
						<div class="desc">
							<h3>Claim</h3>
							<span>Salary</span>
						</div>
					</a>
				</div>
				<div class="item">
					<img src="images/portfolio_pic2.jpg" alt="image">
					<a href="../profilesetup.php" class="pop-up-overlay pop-up-overlay-color-2 text-center">
						<div class="desc">
							<h3>Setup</h3>
							<span>Profile</span>
						</div>
					</a>
				</div>
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic3.jpg" alt="image">
					<!-- </a> -->
					<a href="../index.php" class="pop-up-overlay pop-up-overlay-color-3 text-center">
						<div class="desc">
							<h3>View</h3>
							<span>Profile</span>
						</div>
					</a>
				</div>
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic4.jpg" alt="image">
					<!-- </a> -->
					<a href="../index.php#resume" class="pop-up-overlay pop-up-overlay-color-4 text-center">
						<div class="desc">
							<h3>View</h3>
							<span>Resume</span>
						</div>
					</a>
				</div>
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic5.jpg" alt="image">
					<!-- </a> -->
					<a href="../index.php#contact" class="pop-up-overlay text-center">
						<div class="desc">
							<h3>View</h3>
							<span>Contact</span>
						</div>
					</a>
				</div>
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic6.jpg" alt="image">
					<!-- </a> -->
					<a href="../profilesetup.php" class="pop-up-overlay pop-up-overlay-color-2 text-center">
						<div class="desc">
							<h3>Update</h3>
							<span>Profile</span>
						</div>
					</a>
				</div>
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic7.jpg" alt="image">
					<!-- </a> -->
					<a href="../profilesetup.php#resume" class="pop-up-overlay text-center">
						<div class="desc">
							<h3>Update</h3>
							<span>Resume</span>
						</div>
					</a>
				</div>
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic8.jpg" alt="image">
					<!-- </a> -->
					<a href="../profilesetup.php#contact" class="pop-up-overlay pop-up-overlay-color-3 text-center">
						<div class="desc">
							<h3>Update</h3>
							<span>Contact</span>
						</div>
					</a>
				</div>
				<div class="item">
					<!-- <a href="#" class="image-popup"> -->
					<img src="images/portfolio_pic9.jpg" alt="image">
					<!-- </a> -->
					<a href="../profilesetup.php#password" class="pop-up-overlay pop-up-overlay-color-4 text-center">
						<div class="desc">
							<h3>Update</h3>
							<span>Password</span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
<!-- end: fh5co-services-section -->

	<div id="fh5co-intro-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h2>Enjoy your life after serving.</h2>
				</div>
			</div>
		</div>
	</div><!-- end fh5co-intro-section -->
	<div id="fh5co-common-section">
		<div class="container">
			<div class="heading-section text-center">
                            <h2>I am <?php echo $_SESSION['username'];?></h2>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="col-md-6 col-sm-6 services-num services-num-text-right">
						<span class="number-holder">01</span>
						<div class="desc text-left">
							<h3>NIGERIA IS PLEASED TO PLEASE YOU </h3>
							<p>We create convinience for you to relax and enjoy the goodies after your long service to your country.</p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 services-num">
						<span class="number-holder">10</span>
						<div class="desc text-right">
							<h3>NIGERIA IS PLEASED TO PLEASE YOU</h3>
							<p>We create convenience for you to relax and enjoy the goodies after your long service to your country.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<!--	</div> end fh5co-common-section 
	<div class="fh5co-parallax" style="background-image: url(images/hero-1.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Create more Themes</h1>
						<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
					</div>
				</div>
			</div>
		</div>
	</div> end: fh5co-parallax -->

<!-- end fh5co-featured-work-section -->
<!--	<div id="fh5co-blog-section">
		<div class="container">
			<div class="heading-section text-center">
				<h2>Recent Blog</h2>
			</div>
			<div class="row">
				<div class="col-md-4 blog-section">
					<span>03 <small>July 2016</small></span>
					<h3><a href="#">Mourntains countries Vokalia</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts.</p>
					<a class="btn btn-primary" href="#">Read More</a>
				</div>
				<div class="col-md-4 blog-section">
					<span>02 <small>July 2016</small></span>
					<h3><a href="#">Mourntains countries Vokalia</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts.</p>
					<a class="btn btn-primary" href="#">Read More</a>
				</div>
				<div class="col-md-4 blog-section">
					<span>01 <small>July 2016</small></span>
					<h3><a href="#">Mourntains countries Vokalia</a></h3>
					<p>Far far away, behind the word mountains, far from the countries Vokalia, there live the blind texts.</p>
					<a class="btn btn-primary" href="#">Read More</a>
				</div>
			</div>
		</div>
	</div>-->
        
        <!-- end: fh5co-blog-section -->
<!--	<div class="fh5co-parallax" style="background-image: url(images/hero-2.jpg);" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0 text-center fh5co-table">
					<div class="fh5co-intro fh5co-table-cell">
						<h1 class="text-center">Less is more</h1>
						<p>Made with love by the fine folks at <a href="http://freehtml5.co">FreeHTML5.co</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>-->
        <!-- end: fh5co-parallax -->
	<footer>
		<div id="footer" class="fh5co-border-line">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
                                            <p>Copyright <?php echo date('Y');?>  <a href="#">Graphical Password</a>. All Rights Reserved. <br>Made with <i class="icon-heart3 love"></i> by <a href="" target="_blank">Group </a> </p>
						<p class="fh5co-social-icons">
							<a href="http://twitter.com/grps"><i class="icon-twitter-with-circle"></i></a>
							<a href="http://fb.com/grps"><i class="icon-facebook-with-circle"></i></a>
							<a href="http://insta.com/grps"><i class="icon-instagram-with-circle"></i></a>
						</p>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Owl carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Main JS (Do not remove) -->
	<script src="js/main.js"></script>
        <script>
    $(function(){
            
            
        $("#logout").click(function(e){
            e.preventDefault();
            $.post("../model/login.php?login=logout",
            {
            },
            function(data){
                $(location).attr("href","../index/index.php");
            })
        })
    })
   
</script>

	</body>
</html>

