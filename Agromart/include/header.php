<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Agro Mart</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Raleway:wght@600;800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Spinner Start -->
        <!-- <div id="spinner" class="show w-100 vh-100 bg-white position-fixed translate-middle top-50 start-50  d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" role="status"></div>
        </div> -->
        <!-- Spinner End -->


        <!-- Navbar start -->
        <div class="container-fluid fixed-top">
            <div class="container topbar bg-primary d-none d-lg-block">
                <div class="d-flex justify-content-between">
                    <div class="top-info ps-2">
                        <small class="me-3"><i class="fas fa-map-marker-alt me-2 text-secondary"></i> <a href="#" class="text-white">1<sup>st</sup>Floor 103, Christo Building,Bendoor, Mangalore, Karnataka</a></small>
                        <small class="me-3"><i class="fas fa-envelope me-2 text-secondary"></i><a href="#" class="text-white">agromart@gmail.com</a></small>
                    </div>
                    <div class="top-link pe-2">
                        <a href="#" class="text-white"><small class="text-white mx-2">Privacy Policy</small>/</a>
                        <a href="#" class="text-white"><small class="text-white mx-2">Terms of Use</small>/</a>
                        <a href="#" class="text-white"><small class="text-white ms-2">Sales and Refunds</small></a>
                    </div>
                </div>
            </div>
            <div class="container px-0">
                <nav class="navbar navbar-light bg-white navbar-expand-xl">
                    <a href="home.php" class="navbar-brand"><h1 class="text-primary display-6">AgroMart</h1></a>
                    <button class="navbar-toggler py-2 px-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                        <span class="fa fa-bars text-primary"></span>
                    </button>
                    <div class="collapse navbar-collapse bg-white" id="navbarCollapse">
                        <div class="navbar-nav mx-auto">
                        <?php
                        if ($_SESSION['type'] == 'Admin') {
                        ?>
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="article.php" class="nav-item nav-link " >Article</a>
                            <a href="category.php" class="nav-item nav-link">Category</a>
                            <a href="farmer.php" class="nav-item nav-link">Farmer</a>
                            <a href="ngo.php" class="nav-item nav-link">NGO</a>
                            <a href="manage-user.php" class="nav-item nav-link">Manage User</a>
                            <a href="settings.php" class="nav-item nav-link">Setting</a>   
                        <?php
                        } elseif ($_SESSION['type'] == 'Farmer'){
                        ?>
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="about-us.php" class="nav-item nav-link">About Us</a>   
                            <a href="view-purchase.php" class="nav-item nav-link">Purchases</a>
                            <a href="http://127.0.0.1:5000" class="nav-item nav-link">Detect</a>   
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Add</a>
                                <div class="dropdown-menu m-0 bg-secondary rounded-0">
                                    <a href="add-products.php" class="dropdown-item">Add Product</a>
                                    <a href="add-job-post.php" class="dropdown-item">Post Jobs</a>
                                </div>
                            </div>
                            <!-- <a href="add-products.php" class="nav-item nav-link">Add Product</a>
                            <a href="add-job-post.php" class="nav-item nav-link">Post Jobs</a> -->
                            <a href="subsidy.php" class="nav-item nav-link">Apply Subsidy</a>
                            <a href="payments.php" class="nav-item nav-link">Payment</a>
                            <a href="view-article.php" class="nav-item nav-link">Article</a>
                            <a href="settings.php" class="nav-item nav-link">Setting</a>
                            <!-- <a href="contact.php" class="nav-item nav-link">Contact</a>  -->
                        <?php
                        } elseif ($_SESSION['type'] == 'NGO'){
                        ?>  
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="about-us.php" class="nav-item nav-link">About Us</a>
                            <a href="view-subsidy.php" class="nav-item nav-link">Subsidy</a>
                            <a href="view-article.php" class="nav-item nav-link">Article</a>
                            <a href="settings.php" class="nav-item nav-link">Setting</a>

                        <?php
                        } else{
                        ?>
                            <a href="home.php" class="nav-item nav-link ">Home</a>
                            <a href="about-us.php" class="nav-item nav-link">About Us</a>
                            <a href="category-view.php" class="nav-item nav-link">Category</a>
                            <a href="products-view.php" class="nav-item nav-link">Products</a>
                            <a href="careers.php" class="nav-item nav-link">Career</a>
                            <a href="view-purchase-user.php" class="nav-item nav-link">Purchases</a>
                            <a href="payments-user.php" class="nav-item nav-link">Payment</a>
                            <a href="settings.php" class="nav-item nav-link">Setting</a>
                        <?php
                        }
                        ?>
                        </div>
                        <div class="d-flex m-3 me-0">
                            <!-- <button class="btn-search btn border border-secondary btn-md-square rounded-circle bg-white me-4" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fas fa-search text-primary"></i></button> -->
                            <?php
                            if ($_SESSION['type'] == 'User') {

                                $user_id=$_SESSION['user_id'];

                                $qry="SELECT COUNT(id) AS id_count
                                FROM (
                                    SELECT id
                                    FROM payment
                                    WHERE userid = '$user_id' AND status = 1
                                ) AS subquery_alias;";
                                $res=mysqli_query($conn,$qry);

                                if(mysqli_num_rows($res)>0) {
                                    $row = mysqli_fetch_array($res);
                                    $totalproduct = $row['id_count'];
                                }

                            ?>
                            
                            <?php
                            }
                            ?>
                            <!-- <a href="#" class="my-auto">
                                <i class="fas fa-user fa-2x"></i>
                            </a> -->
                            <a href="include/logout.php" class="btn btn-primary">Logout <i class="bi bi-box-arrow-right"></i></a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Navbar End -->


        <!-- Modal Search Start -->
        <div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content rounded-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body d-flex align-items-center">
                        <div class="input-group w-75 mx-auto d-flex">
                            <input type="search" class="form-control p-3" placeholder="keywords" aria-describedby="search-icon-1">
                            <span id="search-icon-1" class="input-group-text p-3"><i class="fa fa-search"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal Search End -->
