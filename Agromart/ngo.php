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
    $userrole = "NGO";
    $status = 1;

    
    $date = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO user (name, email, date, status, contact, userRole, password) VALUES ('$name', '$email', '$date', '$status', '$contact', '$userrole', '$password')";

    if (mysqli_query($conn, $insertQuery)) {

        echo "<script>alert('Ngo added successfully');location.href='ngo.php'</script>";
    } else {
        echo "<script>alert('Unable to process your request!');location.href='ngo.php'</script>";
    }
}


?>

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">NGO</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">NGO</li>
    </ol>
</div>
<!-- Single Page Header End -->
<!-- Article Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Add NGO</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-9"></div>
                    <div class="col-xl-3">
                        <div class="input-group w-100 mx-auto d-flex">
                            <a class="btn border border-secondary rounded-pill px-3 text-primary" data-bs-toggle='modal' data-bs-target='#add'><i class="bi bi-plus-square-fill me-2 text-primary"></i> Add NGO</a>
                        </div>
                    </div>
                </div>
                <div class="row g-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">contact</th>
                            <th scope="col">Date</th>
                            <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM user where userRole = 'NGO'";
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
                                    echo "<td>" . ($row['status'] == 1 ? 'Active' : 'Inactive') . "</td>";
                                    echo "</tr>";
                                    $i++;
                                }
                            }
                            ?>
                        </tbody>
                    </table>
                </div>

                <div class="modal fade" id="add" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-center">
                        <form method="POST" enctype="multipart/form-data">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="addLabel">Add NGO</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Name<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="text" class="form-control" maxlength="100" required name="name">
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">email<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="email" class="form-control" maxlength="100" required name="email">
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Password<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="password" class="form-control" maxlength="100" required name="password">
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Date<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="date" class="form-control" required name="date">
                                        </div>
                                        <div class="col-xl-12 mb-3">
                                            <label class="form-label">Contact<span class="text-danger">*</span></label>
                                            <input autocomplete='off' type="phone" class="form-control" maxlength="10" required name="contact">
                                        </div>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" name="add_submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php
require_once 'include/footer.php';
?>
