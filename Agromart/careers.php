<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Careers</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Careers</li>
    </ol>
</div>
<!-- Single Page Header End -->



<div class="container-fluid testimonial py-5">
    <div class="container py-5">
        <div class="testimonial-header text-center">
            <h4 class="text-primary">Careers</h4>
            <h1 class="display-5 mb-5 text-dark">Get Your Job!</h1>
        </div>

        <div class="row">
            <?php
            $sql = "SELECT title, description, city, jobtype, salary FROM career WHERE status = 1";
            $result = mysqli_query($conn, $sql);

            if ($result && mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $title = $row['title'];
                    $description = $row['description'];
                    $salary = $row['salary'];
                    $city = $row['city'];

                    // Output each job in a card
                    echo "<div class='col-md-4 mb-4'>";
                    echo "<div class='card'>";
                    echo "<div class='card-body'>";
                    echo "<h5 class='card-title'>$title</h5>";
                    echo "<p class='card-text'>$description</p>";
                    echo "<p class='card-text'>Location: $city</p>";
                    echo "<p class='card-text'>Salary: $salary</p>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<p>No careers available.</p>";
            }
            ?>
        </div>
<?php
require_once 'include/footer.php';
?>
