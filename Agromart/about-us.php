<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
 <!-- Single Page Header start -->
 <div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">About Us</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">About Us</li>
    </ol>
</div>
<!-- Single Page Header End -->

<div class="container py-5">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <h2 class="text-dark mb-4">Welcome to Agromart!!!</h2>
            <p class="lead">
            Here, we are dedicated to empowering farmers and agricultural enthusiasts with the tools, knowledge, and resources they need to thrive in today's dynamic farming landscape. With a deep-rooted commitment to innovation, sustainability, and community, Agromart serves as your trusted partner in achieving agricultural excellence.

             </p>
            <p class="lead">
            Our mission is simple: to provide farmers with access to high-quality products, expert advice, and cutting-edge technologies that optimize productivity, enhance sustainability, and drive success. Whether you're a seasoned farmer looking to upgrade your equipment or a newcomer seeking guidance on sustainable farming practices, Agromart is here to support you every step of the way.
            </p>
            <p class="lead">
            At the heart of Agromart is a team of passionate professionals with extensive experience in agriculture, agronomy, and agribusiness. We understand the challenges and opportunities facing today's farmers, and we are committed to delivering personalized solutions tailored to your unique needs and goals.

            </p>
            <p class="lead">
            Join us at Agromart and experience the difference firsthand. Whether you're a small-scale farmer, a large-scale producer, or an agricultural enthusiast, we invite you to explore our offerings, engage with our community, and embark on a journey towards agricultural excellence with Agromart by your side.
            </p>
        </div>
    </div>
</div>
<?php
require_once 'include/footer.php';
?>
