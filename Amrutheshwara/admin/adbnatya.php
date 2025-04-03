<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SHREE AMRUTHESHWARA ADMIN</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/feather/feather.css">
  <link rel="stylesheet" href="vendors/ti-icons/css/themify-icons.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="vendors/select2/select2.min.css">
  <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/vertical-layout-light/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="amruth.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <img src="tempimgs/newlogo.webp" alt="" title="" width="auto" height="60px" />
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">


        <ul class="navbar-nav navbar-nav-right">

          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" id="profileDropdown">
              <img src="images/faces/face28.jpg" alt="profile" />
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
              <a class="dropdown-item">
                <i class="ti-settings text-primary"></i>
                Settings
              </a>
              <a class="dropdown-item">
                <i class="ti-power-off text-primary"></i>
                Logout
              </a>
            </div>
          </li>

        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
          <span class="icon-menu"></span>
        </button>
      </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_settings-panel.html -->
      <div class="theme-setting-wrapper">

        <div id="theme-settings" class="settings-panel">
          <i class="settings-close ti-close"></i>
          <p class="settings-heading">SIDEBAR SKINS</p>
          <div class="sidebar-bg-options selected" id="sidebar-light-theme">
            <div class="img-ss rounded-circle bg-light border mr-3"></div>Light
          </div>
          <div class="sidebar-bg-options" id="sidebar-dark-theme">
            <div class="img-ss rounded-circle bg-dark border mr-3"></div>Dark
          </div>
          <p class="settings-heading mt-2">HEADER SKINS</p>
          <div class="color-tiles mx-0 px-4">
            <div class="tiles success"></div>
            <div class="tiles warning"></div>
            <div class="tiles danger"></div>
            <div class="tiles info"></div>
            <div class="tiles dark"></div>
            <div class="tiles default"></div>
          </div>
        </div>
      </div>
      
      <!-- partial -->
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Home</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="slide.php" aria-expanded="false" aria-controls="ui-basic">
              <i class="icon-layout menu-icon"></i>
              <span class="menu-title">Add Slides</span>

            </a>
            <!--  <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/dropdowns.html">Dropdowns</a></li>
                <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
              </ul>
            </div>-->
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adseva.php" aria-expanded="false" aria-controls="form-elements">
              <i class="icon-columns menu-icon"></i>
              <span class="menu-title">Add Sevas</span>

            </a>

          </li>
          <li class="nav-item">
            <a class="nav-link" href="adspecial.php" aria-expanded="false" aria-controls="charts">
              <i class="icon-bar-graph menu-icon"></i>
              <span class="menu-title">Add Special Days</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="adrules.php" aria-expanded="false" aria-controls="tables">
              <i class="icon-grid-2 menu-icon"></i>
              <span class="menu-title">Add Rules</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#icons" aria-expanded="false" aria-controls="icons">
              <i class="icon-contract menu-icon"></i>
              <span class="menu-title">Add Details</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="icons">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="adhall.php">Hall</a></li>
                <li class="nav-item"> <a class="nav-link" href="adcamp.php">Camp(Shibira)</a></li>
                <li class="nav-item"> <a class="nav-link" href="advworks.php">Voluntary Works</a></li>
                <li class="nav-item"> <a class="nav-link" href="adyaksha.php">Yakshagana</a></li>
                <li class="nav-item"> <a class="nav-link" href="adbnatya.php">Bharathanatya</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <i class="icon-head menu-icon"></i>
              <span class="menu-title">View Bookings</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="viewseva.php"> Seva </a></li>
                <li class="nav-item"> <a class="nav-link" href="viewspcld.php"> Special Days </a></li>
                <li class="nav-item"> <a class="nav-link" href="viewhall.php"> Hall </a></li>
                <li class="nav-item"> <a class="nav-link" href="viewcamp.php"> Camp(Shibira) </a></li>
                <li class="nav-item"> <a class="nav-link" href="viewvworks.php"> Voluntary Works </a></li>
                <li class="nav-item"> <a class="nav-link" href="viewyaksha.php">Yakshagana</a></li>
                <li class="nav-item"> <a class="nav-link" href="viewharake.php"> Harake </a></li>
                <li class="nav-item"> <a class="nav-link" href="viewbnatya.php"> Bharathanatya </a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="upcomingfun.php" aria-expanded="false" aria-controls="tables">
              <i class="icon-ban menu-icon"></i>
              <span class="menu-title">Add Upcoming Functions</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Logout</span>
            </a>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <!-- Form-->

            <div class="col-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Add Bharathanatya</h4>
                  <form class="forms-sample"  method="post" action="#" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="vwimg">Bharathanatya Image</label>
                      <input type="file" name="image" class="form-control" id="vwimg">
                    </div>
                    <div class="form-group">
                      <label for="vwnm">Class Name</label>
                      <input type="text" name="clsname" class="form-control" id="vwnm" placeholder="Class Name">
                    </div>
					 <div class="form-group">
                      <label for="vwin">Name of the Instructor</label>
                      <input type="text" name="insname" class="form-control" id="vwin" placeholder="Name">
                    </div>
					 <div class="form-group">
                      <label for="vwem">Email</label>
                      <input type="email" name="email" class="form-control" id="vwem" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="vwtm">Timings</label>
                      <input type="text" name="time" class="form-control" id="vwtm">
                    </div>
					<div class="form-group">
                      <label for="vwdt">Monthly Charges</label>
                      <input type="text" name="mcharge" class="form-control" id="vwdt">
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary mr-2">Submit</button>
                 
                  </form>
				   <?php					 						 
if(isset($_POST['submit']))
{
	error_reporting(1);
	include("config.php");
	    $clsname=$_POST['clsname'];
		$insname=$_POST['insname'];
		$email=$_POST['email'];
		$time=$_POST['time'];
		$mcharge=$_POST['mcharge'];
		$fname = $_FILES["image"]["name"];
		$filename = $name.$fname;
		$tempname = $_FILES["image"]["tmp_name"];   
        $folder = "bimg/".$filename;
		
        if (move_uploaded_file($tempname, $folder))  
		{
			$query ="INSERT INTO addbnatya(clsname,insname,email,time,mcharge,image) VALUES('".$clsname."','".$insname."','".$email."','".$time."','".$mcharge."','".$filename."')";
            mysqli_query($con, $query);
			echo "<script>
					alert(' uploaded Successfully');
				</script>";
			echo "<script> location.href='adbnatya.php'; </script>";
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

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bharathanatya Details</h4>
                  <div class="table-responsive">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Sl.No.</th>
                          <th>Bharathanatya Image</th>
                          <th>Class Name</th>
                          <th>Master Name</th>
						  <th>Email</th>
						  <th>Timings</th>
						  <th>Monthly Charges</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
					   <?php
								include 'config.php';
								$sql1 = "select * from addbnatya";
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
                        <tr>
                          <td><?php echo $sl; ?></td>
                          <td><img src="bimg/<?php echo $image; ?>" alt="error" style="width:140px; height:140px"></td>
                          <td><?php echo $clsname; ?></td>
						  <td><?php echo $insname; ?></td>
						  <td> <?php echo $email; ?></td>
						  <td><?php echo $time; ?></td>
						  <td><?php echo $mcharge; ?></td>
                         <td>
                           <form action="#" method="post">
							
                          <input type="text" name="id[]" value="<?php echo $id; ?>" hidden="true">
						 
						  <button type="submit" name="delete" style="padding:10px 10px; border-radius:20px; background-color:red; color:#fff">Delete</button>  </td>
						  </form>
                        </tr>
                       <?php
						  
								}
								}
								?>
                      </tbody>
                    </table>
					<?php
					if(isset($_POST['delete']))
{
	foreach ($_POST['id'] as $key => $value) 
	{	
		$selectano=$value;	
	}
	$query1 = "delete from addbnatya where id='".$selectano."'";
	mysqli_query($con,$query1) or die(mysqli_error($con));
	echo "<script> location.href='adbnatya.php'; </script>";
}
?>
                  </div>
                </div>
              </div>
            </div>






          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Designed by Charishma</a></span>
          </div>
        </footer>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
  <script src="vendors/select2/select2.min.js"></script>
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <script src="js/settings.js"></script>
  <script src="js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="js/file-upload.js"></script>
  <script src="js/typeahead.js"></script>
  <script src="js/select2.js"></script>
  <!-- End custom js for this page-->
</body>

</html>
