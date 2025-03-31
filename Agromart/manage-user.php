<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<?php
if (isset($_POST['add_submit'])) {

    $name = addslashes(trim($_POST['name']));
    $email = addslashes(trim($_POST['email']));
    $contact = addslashes(trim($_POST['contact']));
    $password = addslashes(trim($_POST['password']));
    $userrole = "Farmer";
    $status = 1;

    
    $date = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO user (name, email, date, status, contact, userRole, password) VALUES ('$name', '$email', '$date', '$status', '$contact', '$userrole', '$password')";

    if (mysqli_query($conn, $insertQuery)) {

        echo "<script>alert('Farmer added successfully');location.href='farmer.php'</script>";
    } else {
        echo "<script>alert('Unable to process your request!');location.href='farmer.php'</script>";
    }
}

// if (isset($_POST['delete_submit'])) {

//     $date = date('Y-m-d H:i:s');

//     if (mysqli_query($conn, "UPDATE user SET status = 0 WHERE id = '$_POST[delete_id]'")) {

//         echo "<script>alert('Farmer deleted successfully');location.href='farmer.php'</script>";
//     } else {

//         echo "<script>alert('Unable to process your request!');location.href='farmer.php'</script>";
//     }
// }
?>

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Manage User</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Manage User</li>
    </ol>
</div>
<!-- Single Page Header End -->
<!-- Article Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Manage User</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <!-- <div class="row g-4">
                    <div class="col-9"></div>
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <a class="btn border border-secondary rounded-pill px-3 text-primary" data-bs-toggle='modal' data-bs-target='#add'><i class="bi bi-plus-square-fill me-2 text-primary"></i> Add Farmer</a>
                        </div>
                    </div>
                </div> -->
                <div class="row g-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">contact</th>
                            <th scope="col">Date</th>
                            <th scope="col">User Role</th>
                            <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM user";
                            $res = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($res) > 0) {
                                $i = 1;

                                while($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>$i</td>";
                                    echo "<td>$row[name]</td>";
                                    echo "<td>$row[email]</td>";
                                    echo "<td>$row[contact]</td>";
                                    echo "<td>".date_format(date_create($row['date']), 'Y-m-d')."</td>";
                                    echo "<td>$row[userRole]</td>";
                                    echo "<td>$row[status]</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'include/footer.php';
?>
