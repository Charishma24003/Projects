<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/services-dark.html  30 Nov 2019 03:49:30 GMT -->

<head>
	<meta charset="utf-8">
	<title>SHREE AMRUTHESHWARA TEMPLE| SEVA</title>
	<!-- Stylesheets -->
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">

	<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
	<link rel="icon" href="images/favicon.png" type="image/x-icon">

	<!-- Responsive -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
	<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

	<div class="page-wrapper">
		<!-- Preloader -->
		<div class="preloader"></div>

		<header class="main-header header-style-one">
			<!-- Header Upper -->
			<div class="header-upper">
				<div class="inner-container">
					<div class="header-main">
						<!--Info-->
						<a href="index.php" class="logo-link">
							<img src="newlogo.webp" alt="" title="" width="auto" height="80px" />
						</a>
						<!--Nav Box-->
						<div class="nav-outer clearfix">
							<!--Mobile Navigation Toggler For Mobile-->
							<div class="mobile-nav-toggler"><span class="icon flaticon-menu-1"></span></div>
							<nav class="main-menu navbar-expand-md navbar-light">
								<div class="navbar-header">
									<!-- Togg le Button -->
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
										<span class="icon flaticon-menu-1"></span>
									</button>
								</div>

								<div class="collapse navbar-collapse clearfix" id="navbarSupportedContent">
									<ul class="navigation clearfix">
										<li><a href="index.php">HOME</a>
										<li class=" dropdown"><a href="about.php">ABOUT</a>
											<ul>
												<li><a href="about.php">About the Temple</a></li>
												<li><a href="history.php">History of the Temple</a></li>
											</ul>
										</li>
										<li class="current dropdown"><a href="seva.php">SEVAS</a>
											<ul>
												<li><a href="seva.php">SEVAS</a></li>
												<li><a href="sevatable.php">LIST OF SEVAS</a></li>
											</ul>
										</li>
										<li class="dropdown"><a href="ptimings.php">POINTS TO BE NOTED</a>
											<ul>
												<li><a href="ptimings.php">Pooja Timings</a></li>
												<li><a href="rules.php">Rules to be followed</a></li>
												<li><a href="direction.php">Directions to reach the Temple</a></li>
											</ul>
										</li>
										<li><a href="gallery.php">GALLERY</a>
										</li>
										<li><a href="donation.php">DONATION</a>
										</li>
										<li><a href="contact.php">CONTACT</a></li>
										<li><a href="register.php">REGISTER</a></li>
									</ul>
								</div>
							</nav>
							<!-- Main Menu End-->

							<!-- Outer Box -->
							<div class="outer-box clearfix">
								<div class="search-box-btn"><span class="icon flaticon-magnifying-glass-1"></span></div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!--End Header Upper-->

			<!-- Mobile Menu  -->
			<div class="mobile-menu">
				<div class="menu-backdrop"></div>
				<div class="close-btn"><span class="icon flaticon-cancel"></span></div>

				<nav class="menu-box">
					<div class="nav-logo"><a href="index-2.html"><img src="images/logo.png" alt="" title=""></a></div>
					<ul class="navigation clearfix"><!--Keep This Empty / Menu will come through Javascript--></ul>
					<!--Social Links-->
					<div class="social-links">
						<ul class="clearfix">
							<li><a href="#"><span class="fab fa-twitter"></span></a></li>
							<li><a href="#"><span class="fab fa-facebook-square"></span></a></li>
							<li><a href="#"><span class="fab fa-pinterest-p"></span></a></li>
							<li><a href="#"><span class="fab fa-instagram"></span></a></li>
							<li><a href="#"><span class="fab fa-youtube"></span></a></li>
						</ul>
					</div>
				</nav>
			</div><!-- End Mobile Menu -->

		</header>
		<!-- End Main Header -->

		<!--Page Title-->
		<section class="page-title" style="background-image:url(tempimgs/img19.jpg)">
			<div class="auto-container">
				<h2>SEVAS</h2>
				<ul class="page-breadcrumb">
					<li><a href="index-2.html">HOME</a></li>
					<li>LIST OF SEVAS</li>
				</ul>
			</div>
		</section>

	</div>
	<!--End Page Title-->
	<!-- Seva list -->
	<table class="sevalist">
		<tr>
			<th style="width:1%;">Sl.No</th>
			<th style="width:30%;">Name of the Seva</th>
			<th style="width:15%;">Price(in Rs.)</th>
		</tr>

		 <?php
								include 'config.php';
								$sql1 = "select * from addseva";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$sevaname=$row1['sevaname'];
								$sevaprice=$row1['sevaprice'];
							
								
								?>
		<tr>
			 <td><?php echo $sl; ?></td>
             <td><?php echo $sevaname; ?></td>
             <td><?php echo $sevaprice; ?></td>
						
		</tr>
		 <?php
						  
								}
								}
								?>

	



	</table>
	<!-- End of Seva List -->

	<!--Main Footer-->
		<footer class="main-footer">
			<div class="auto-container">
				<!--Widgets Section-->
				<div class="widgets-section">
					<div class="row clearfix">

						<!--big column-->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!--Footer Column-->
								<div class="footer-column col-lg-7 col-md-6 col-sm-12">
									<div class="footer-widget logo-widget">
										<div class="logo">
											<a href="index-2.html"><h3 style="color:#fff">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp SHREE <br>AMRUTHESHWARA</h3></a>
										</div>
										<div class="text" style="margin-left:10px">Shree Amrutheshwara Temple<br>Thiruvail, Vamanjoor</div>
										<ul class="social-icons" style="margin-left:10px">
											<li><a href="#"><span class="fab fa-facebook-f"></span></a></li>
											<li><a href="#"><span class="fab fa-linkedin-in"></span></a></li>
											<li><a href="#"><span class="fab fa-twitter"></span></a></li>
											<li><a href="#"><span class="fab fa-google-plus-g"></span></a></li>
										</ul>
									</div>
								</div>

								<!--Footer Column-->
								<div class="footer-column col-lg-5 col-md-6 col-sm-12">
									<div class="footer-widget links-widget">
										<h2>Quick links</h2>
										<div class="widget-content">
											<ul class="list">
												<li><a href="about.php">ABOUT</a></li>
												<li><a href="donation.php">DONATION</a></li>
												<li><a href="#">TERMS & CONDITIONS</a></li>
												<li><a href="#">FAQ</a></li>
											</ul>
										</div>
									</div>
								</div>

							</div>
						</div>

						<!--big column-->
						<div class="big-column col-lg-6 col-md-12 col-sm-12">
							<div class="row clearfix">

								<!--Footer Column-->
								<div class="footer-column col-lg-5 col-md-6 col-sm-12">
									<div class="footer-widget contact-widget">
										<h2>Contact Info</h2>
										<div class="widget-content">
											<a href="tel:1800-574-9687" class="contact-number"> 0824 226 2169</a>
											<ul>
												<li> ವಾಮಂಜೂರು ಶ್ರೀ ಅಮೃತೇಶ್ವರ ದೇವಸ್ಥಾನ</li>
												<li>Email :<a href="shreeamrutheshwara@gmail"> shreeamrutheshwara@gmail</a></li>
											</ul>
										</div>
									</div>
								</div>

								<!--Footer Column-->
								<div class="footer-column col-lg-7 col-md-6 col-sm-12">
									<div class="footer-widget newsletter-widget">
										<h2>Newsletter</h2>
										<div class="text">Get Special offers & Discounts</div>
										<!-- Newsletter Form -->
										<div class="newsletter-form">
											<form method="post" action="templateshub.net">
												<div class="form-group">
													<input type="email" name="email" value="" placeholder="Enter your email address" required >
													<button type="submit" class="theme-btn btn-style-one"><span class="txt">Subscribe</span></button>
												</div>
											</form>
										</div>
									</div>
								</div>

							</div>
						</div>

					</div>
				</div>

				<!--Footer Bottom-->
				<div class="footer-bottom clearfix">
					<div class="pull-left">
						<div class="copyright"><a href="templateshub.net">Templates Hub</a></div>
					</div>
					<div class="pull-right">
						<a href="templateshub.net">Templates Hub</a>
					</div>
				</div>

			</div>
		</footer>

	</div>
	<!--End pagewrapper-->


	<!--Scroll to top-->
	<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

	<!--Search Popup-->
	<div id="search-popup" class="search-popup">
		<div class="close-search theme-btn"><span class="flaticon-cancel"></span></div>
		<div class="popup-inner">
			<div class="overlay-layer"></div>
			<div class="search-form">
				<form method="post" action="templateshub.net">
					<div class="form-group">
						<fieldset>
							<input type="search" class="form-control" name="search-input" value="" placeholder="TYPE HERE..." required>
							<input type="submit" value="Search Now!" class="theme-btn">
						</fieldset>
					</div>
				</form>

				<br>
				<h3>Recent Search Keywords</h3>
				<ul class="recent-searches">
					<li><a href="sevatable.php">Rudrabhisheka</a></li>
					<li><a href="direction.php">Directions</a></li>
					<li><a href="rules.php">Rules</a></li>
					<li><a href="history.php">History</a></li>
					<li><a href="sevatable.php">Pradosha pooja</a></li>
				</ul>

			</div>

		</div>
	</div>

	<!--Scroll to top-->
	<script src="js/jquery.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery-ui.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.fancybox.js"></script>
	<script src="js/owl.js"></script>
	<script src="js/wow.js"></script>
	<script src="js/validate.js"></script>
	<script src="js/appear.js"></script>
	<script src="js/scrollbar.js"></script>
	<script src="js/script.js"></script>
</body>

<!-- stella-orre/index-4.html  30 Nov 2019 03:49:07 GMT -->

</html>

<!--
	<tr>
			<td>2</td>
			<td>Shiva Sahasranama Archana</td>
			<td>Rs.350</td>
		</tr>


		<tr>
			<td>3</td>
			<td>Lingarchana</td>
			<td>Rs.180</td>
		</tr>


		<tr>
			<td>4</td>
			<td>Maha Mrityunjayamantra Japa</td>
			<td>Rs.350</td>
		</tr>


		<tr>
			<td>5</td>
			<td>Shiva Aarthi</td>
			<td>Rs.150</td>
		</tr>


		<tr>
			<td>6</td>
			<td>Bilva Patra Archana</td>
			<td>Rs.400</td>
		</tr>


		<tr>
			<td>7</td>
			<td>Pradosha Pooja</td>
			<td>Rs.250</td>
		</tr>


		<tr>
			<td>8</td>
			<td>Maha Shivarathri Pooja</td>
			<td>Rs.600</td>
		</tr>

-->
