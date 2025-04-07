<?php 
include("sessionCheck.php")
?>
<!DOCTYPE html>
<html lang="en">

<!-- stella-orre/about.html  30 Nov 2019 03:45:56 GMT -->

<head>
	<meta charset="utf-8">
	<title>SHREE AMRUTHESHWARA TEMPLE| ABOUT</title>
	<!-- Stylesheets -->
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

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

		<!-- Main Header / Header Style Four -->
		<header class="main-header header-style-one">
			<!-- Header Upper -->
			<div class="header-upper">
				<div class="inner-container">
					<div class="header-main">
						<!--Info-->
						<a href="home.php" class="logo-link">
							<img src="tempimgs/newlogo.webp" alt="" title="" width="auto" height="80px" />
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
										<li><a href="home.php">HOME</a>
										<li class=" dropdown"><a href="alabout.php">ABOUT</a>
										<li class=" dropdown"><a href="alsevalist.php">SEVAS</a>
											<ul>
												<li><a href="alsevalist.php">SEVA LIST</a></li>
												<li><a href="alspecialdays.php">SPECIAL DAYS</a></li>
											</ul>
										</li>
										<li class=" current"><a href="albookings.php">BOOKING</a></li>
										<li class=" dropdown"><a href="vbookseva.php">VIEW BOOKINGS</a>
											<ul>
												<li><a href="vbookseva.php">SEVA</a></li>
												<li><a href="vbspeciald.php">SPECIAL DAYS</a></li>
												<li><a href="vbhall.php">HALL</a></li>
												<li><a href="vbcamp.php">CAMP(SHIBIRA)</a></li>
												<li><a href="vbvolunteer.php">VOLUNTARY WORKS</a></li>
												<li><a href="vbyaksha.php">YAKSHAGANA</a></li>
												<li><a href="vbharake.php">HARAKE</a></li>
												<li><a href="vbbnatya.php">BHARATHANATYA</a></li>

											</ul>
										</li>
										<li><a href="alcontact.php">CONTACT</a></li>
										<li><a href="logout.php">LOGOUT</a></li>
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
		<section class="page-title" style="background-image:url(tempimgs/img8.jpg);margin-top:80px">
			<div class="auto-container">
				<h2>YAKSHAGANA</h2>
				<ul class="page-breadcrumb">
					<li><a href="index.php">HOME</a></li>
					<li>Yakshagana</li>
				</ul>
			</div>
		</section>
		<!--End Page Title-->



		<!-- Content Column -->
		<div class="amhall">
		 <?php
								include 'config.php';
								$sql1 = "select * from addyaksha";
								$result1 = mysqli_query($con,$sql1);
								$num1=mysqlI_num_rows($result1);
								$sl=0;
								if($num1 > 0)
								{ 
								while($row1 = mysqli_fetch_array($result1))
								{ 
								$sl+=1;
								$id=$row1[0];
								$image=$row1['image'];
								$clsname=$row1['clsname'];
								$insname=$row1['insname'];
								$email=$row1['email'];
								$time=$row1['time'];
								$mcharge=$row1['mcharge'];
								
								
							
	?>

			<div class="hallimg">
				<img src="../admin/yimg/<?php echo $image; ?>" alt="" width="95%" height="400px" />
			</div>
			<div class="hallcontent">
				<h2 style="margin-left:80px"><b>YAKSHAGANA DETAILS</b></h2>
					<h4>Class Name&nbsp &nbsp :&nbsp <?php echo $clsname; ?><br><br>
					Name of the<br> Instructor&nbsp &nbsp &nbsp :&nbsp <?php echo $insname; ?><br><br>
					Email&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :&nbsp<?php echo $email; ?><br><br>
					Timings &nbsp &nbsp &nbsp &nbsp : &nbsp <?php echo $time; ?><br><br>
					Monthly<br> Charges&nbsp &nbsp &nbsp &nbsp :&nbsp <?php echo $mcharge; ?>
			</div>
			<?php
						  
								}
								}
								?>
		</div>

		<div class="hallbookform">
			<h1 align="center" style="margin:25px 25px;">YAKSHAGANA BOOKING</h1>
			<div class="hallform">
				<form class="hallform" method="post" action="#" enctype="multipart/form-data">
					<label for="usernm"><b>Student Name</b></label><br>
					<input type="text" id="usernm" name="sname" placeholder="Enter student name..." style="height:40px"><br><br>

					<label for="usernm"><b>Enter Parent Name</b></label><br>
					<input type="text" id="usernm" name="pname" placeholder="Enter parent name..." style="height:40px"><br><br>

					<label for="stupic"><b>Student Image</b></label><br>
					<input type="file" id="usernm" name="image" style="height:40px"><br><br>

					<label for="uemail"><b>E-mail</b></label><br>
					<input type="email" id="uemail" name="email" value="<?php echo $_SESSION['templeuser']; ?>" placeholder="Enter your email..." style="height:40px" readonly><br><br>

					<label for="uphn"><b>Phone No.</b></label><br>
					<input type="text" id="uphn" name="phone" placeholder="Enter your Phone number..." style="height:40px"><br><br>

					<label for="uaddress"><b>User Address</b></label><br>
					<textarea id="uaddress" name="uaddress" rows="10" cols="30" placeholder="Enter your Address..." style="width:100%"></textarea><br><br>

					<label for="uevdate"><b>Booking Date</b></label><br>
					<input type="date" id="uevdate" name="date" style="height:40px"><br><br>
					
					<input type="submit" name="submit" value="BOOK NOW" style="background-color:var(--primary);font-weight:bold;color:#fff;height:40px"><br><br>
				</form>
				<?php					 						 
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	    $sname=$_POST['sname'];
		$pname=$_POST['pname'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
		$uaddress=$_POST['uaddress'];
		$date=$_POST['date'];
		$fname = $_FILES["image"]["name"];
		$filename = $name.$fname;
		$tempname = $_FILES["image"]["tmp_name"];   
        $folder = "yakimg/".$filename;
		
        if (move_uploaded_file($tempname, $folder))  
		{
			$query ="INSERT INTO bkyaksha(sname,pname,email,phone,uaddress,date,image) VALUES('".$sname."','".$pname."','".$email."','".$phone."','".$uaddress."','".$date."','".$filename."')";
            mysqli_query($con, $query);
			echo "<script>
					alert(' Booking Successfull');
				</script>";
			echo "<script> location.href='vbyaksha.php'; </script>";
        }else{
            echo "<script>
					alert('Upload Failed,IMAGE should be less than 2GB');
				</script>";
		}
}
?>
			</div>
		</div>



	</div>
	
	</section>
	<!-- End Story Section -->



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
							<input type="search" class="form-control" name="search-input" value="" placeholder="Search Here" required>
							<input type="submit" value="Search Now!" class="theme-btn">
						</fieldset>
					</div>
				</form>

				<br>
				<h3>Recent Search Keywords</h3>
				<ul class="recent-searches">
					<li><a href="#">Home Interiors</a></li>
					<li><a href="#">Offices Interiors</a></li>
					<li><a href="#">Showroom Interiors</a></li>
					<li><a href="#">Building Interiors</a></li>
					<li><a href="#">Shops Interiors</a></li>
				</ul>

			</div>

		</div>
	</div>


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
										<a href="index-2.html">
											<h3 style="color:#fff">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp SHREE <br>AMRUTHESHWARA</h3>
										</a>
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
											<li><a href="albookings.php">BOOKING</a></li>
											<li><a href="alcontact.php">CONTACT US</a></li>
											
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
												<input type="email" name="email" value="" placeholder="Enter your email address" required>
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