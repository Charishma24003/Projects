<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Purchases</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Purchases</li>
    </ol>
</div>
<!-- Single Page Header End -->

        <!-- Fruits Shop Start-->
        <div class="container-fluid fruite py-5">
            <div class="container py-5">
                <div class="tab-class text-center">
                    <div class="row g-4">
                        <div class="col-lg-4 text-start">
                            <h1>Our Organic Products</h1>
                        </div>
                    </div>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane fade show p-0 active">
                            <div class="row g-4">
                                <div class="col-lg-12">
                                    <div class="row g-4">
                                        <?php
                                        $sql = "SELECT p.pname, p.image, py.price, py.payment_number FROM payment py, product p WHERE p.id = py.productid AND py.status = 1";
                                        $res = mysqli_query($conn, $sql);

                                        if (mysqli_num_rows($res) > 0) {
                                            while ($row = mysqli_fetch_array($res)) {
                                        ?>
                                        <div class="col-md-6 col-lg-4 col-xl-3">
                                            <div class="rounded position-relative fruite-item">
                                                <div class="fruite-img">
                                                    <img src="images/<?php echo $row['image']; ?>" class="img-fluid w-100 rounded-top" alt="">
                                                </div>
                                                <div class="p-4 border border-secondary border-top-0 rounded-bottom">
                                                    <h4><?php echo $row['pname']; ?></h4>
                                                    <p>Payment No: <?php echo $row['payment_number']; ?></p>
                                                    <div class="">
                                                        <p class="text-dark fs-5 fw-bold mb-0">Price: ₹<?php echo $row['price']; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>      
            </div>
        </div>
        <!-- Fruits Shop End-->



<?php
require_once 'include/footer.php';
?>
