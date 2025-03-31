<?php

session_start();

require_once 'include/config.php';

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

?>
<?php
if (isset($_POST['update_status'])) {

    $status = addslashes(trim($_POST['status']));
    $subsidy_id = addslashes(trim($_POST['subsidy_id']));

    
    $update = "UPDATE subsidy SET status = '$status' where subsidy_id = '$subsidy_id'";

        if (mysqli_query($conn, $update)) {

            echo "<script>alert('Status updated successfully');location.href='view-subsidy.php'</script>";
        } else {
            echo "<script>alert('Unable to process your request!');location.href='view-subsidy.php'</script>";
        }
}


?>

<!-- Single Page Header start -->
<div class="container-fluid page-header py-5">
    <h1 class="text-center text-white display-6">Subsidy</h1>
    <ol class="breadcrumb justify-content-center mb-0">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Pages</a></li>
        <li class="breadcrumb-item active text-white">Subsidy</li>
    </ol>
</div>
<!-- Single Page Header End -->
<!-- Article Start-->
<div class="container-fluid fruite py-5">
    <div class="container py-5">
        <h1 class="mb-4">Verify subsidy</h1>
        <div class="row g-4">
            <div class="col-lg-12">
                <div class="row g-4">
                    <div class="col-9"></div>
                    
                </div>
                <div class="row g-4">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Description</th>
                            <th scope="col">amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">status</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM subsidy where otp_status = 'Verified'";
                            $res = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($res) > 0) {
                                $i = 1;

                                while($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>$i</td>";
                                    echo "<td>$row[name]</td>";
                                    echo "<td>$row[phone]</td>";
                                    echo "<td>$row[subject]</td>";
                                    echo "<td>$row[description]</td>";
                                    echo "<td>$row[price]</td>";
                                    echo "<td>".date_format(date_create($row['date']), 'Y-m-d')."</td>";
                                    echo "<td>$row[status]</td>";
                                    echo "<td>
                                    <button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#update$row[subsidy_id]'>Update</button>
                                    </td>";

                                    echo "</tr>";
                                    $i++;
                                    ?>
                                    <div class="modal fade" id="update<?php echo $row['subsidy_id']; ?>" tabindex="-1" aria-labelledby="addLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <form method="POST" enctype="multipart/form-data">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h1 class="modal-title fs-5" id="addLabel">Update</h1>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="col-xl-12 mb-3">
                                                                <label class="form-label">Status<span class="text-danger">*</span></label>
                                                                <select class="form-select" name="status">
                                                                    <option value="Processing" <?php if ($row['status'] == 'Processing') echo 'selected'; ?>>Processing</option>
                                                                    <option value="Approved" <?php if ($row['status'] == 'Approved') echo 'selected'; ?>>Approved</option>
                                                                    <option value="Rejected" <?php if ($row['status'] == 'Rejected') echo 'selected'; ?>>Rejected</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="subsidy_id" value="<?php echo $row['subsidy_id']; ?>">
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" name="update_status" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
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
