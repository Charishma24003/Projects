<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<style>
    .container-fluid.testimonial {
        background-color: #f8f9fa; /* Set your desired background color */
        padding-top: 40px;
        padding-bottom: 40px;
    }

    .testimonial-header {
        margin-bottom: 40px;
    }

    .article {
        margin-bottom: 40px;
        border: 1px solid #ddd; /* Add a border for separation */
        padding: 20px;
        border-radius: 8px;
        background-color: #fff; /* Set the background color for each article */
    }

    .article img {
        max-width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .article h2 {
        font-size: 24px;
        margin-bottom: 10px;
        color: #333; /* Set the text color for the article title */
    }

    .article p {
        font-size: 16px;
        color: #555; /* Set the text color for the article content */
        margin-bottom: 10px;
    }

    .article p.date {
        font-size: 14px;
        color: #777; /* Set the text color for the date */
    }
</style>
<div class="container-fluid page-header py-5">
            <h1 class="text-center text-white display-6">Articles</h1>
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Pages</a></li>
                <li class="breadcrumb-item active text-white">Articles</li>
            </ol>
        </div>
        <!-- Single Page Header End -->


        <div class="container-fluid testimonial py-5">
            <div class="container py-5">
                <div class="testimonial-header text-center">
                    <h1 class="text-primary"><b>Our Articles</b></h1>
                  
                </div>
                <?php
        $qry_articles = "SELECT title, description, date, image FROM article WHERE status = 1";
        $result_articles = mysqli_query($conn, $qry_articles);

        if ($result_articles && mysqli_num_rows($result_articles) > 0) {
            while ($row_article = mysqli_fetch_assoc($result_articles)) {
                $title = $row_article['title'];
                $description = $row_article['description'];
                $date = $row_article['date'];
                $image = $row_article['image'];

                // Display each article
                echo "<div class='article'>";
                echo "<img src='images/$image' alt='Article Image'>";
                echo "<h2>$title</h2>";
                echo "<p>$description</p>";
                echo "<p class='date'>Date: $date</p>";
                echo "</div>";
            }
        } else {
            echo "<p>No articles available.</p>";
        }
        ?>
            </div>
        </div>

<?php
require_once 'include/footer.php';
?>
