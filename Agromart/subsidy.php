<?php

session_start();

require_once 'include/config.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

require_once 'include/header.php';

$user_id = $_SESSION['user_id'];

?>

<?php
if (isset($_POST['verify'])) {

    $name = addslashes(trim($_POST['name']));
    $email = addslashes(trim($_POST['email']));
    $phone = addslashes(trim($_POST['phone']));
    $subject = addslashes(trim($_POST['subject']));
    $amount = addslashes(trim($_POST['amount']));
    $adharno = addslashes(trim($_POST['adharno']));
    $description = addslashes(trim($_POST['description']));
    $subsidy_no = "SUB" . mt_rand(10000, 99999);
    $otpstatus = "Pending";
    $otp = (string) mt_rand(100000, 999999);
    $status = "Processing";
    $date = date('Y-m-d H:i:s');

    $insertQuery = "INSERT INTO subsidy (subsidy_no, name, price, subject, adhar_no, phone, email, description, 
    status, date, otp_status, otp, user_id) VALUES ('$subsidy_no', '$name', '$amount', '$subject', '$adharno', 
    '$phone', '$email', '$description', '$status', '$date', '$otpstatus', '$otp', '$user_id')";

    if (mysqli_query($conn, $insertQuery)) {

        require 'vendor-email/autoload.php';

        $title = "Agromart";
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = 465;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->SMTPAuth = true;
        $mail->IsHTML(true);

        $mail->Username = 'haitulunadu@gmail.com';
        $mail->Password = 'oynqcivlwgswtyrn';

        $mail->setFrom('haitulunadu@gmail.com', $title);
        $mail->addReplyTo('haitulunadu@gmail.com', $title);

        $mail->addAddress($email, "User");

        $mail->Subject = 'OTP verification - ' . $title;
        $mail->Body = 'Dear User, <br> Please verify your mail with OTP<br> Your OTP is <strong>' . $otp . '</strong><br><br> Thank you<br>Team ' . $title;

        if ($mail->send()) {

             echo "<script>alert('Please verify from OTP sent to your mail $email');location.href='verifyotp.php?subno=$subsidy_no'</script>";
        } else {
            // Handle email sending failure
            echo "<script>alert('Unable to send OTP email!');location.href='subsidy.php'</script>";
        }

    } else {
        // Handle SQL query execution failure
        echo "<script>alert('Unable to process your request!');location.href='subsidy.php'</script>";
    }
}

?>

<style>
   .modal-body {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .otp-input-container {
        margin: 0 5px;
    }

    .otp-input {
        width: 40px;
        height: 40px;
        font-size: 20px;
        text-align: center;
    }

    .otp-submit-button,
    .resend-otp-button {
        margin-top: 10px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .otp-submit-button {
        background-color: #007bff;
        color: #fff;
    }

    .resend-otp-button {
        background-color: #ccc;
        color: #000;
    }


</style>
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
        <h3 class="mb-4">Apply Subsidy</h3>
        <form method="POST" class="row">
            <div class="col-xl-4 mb-3">
                <label class="form-label">Name<span class="text-danger">*</span></label>
                <input autocomplete='off' type="text" class="form-control" maxlength="100" required name="name">
            </div>
            <div class="col-xl-4 mb-3">
                <label class="form-label">Phone no<span class="text-danger">*</span></label>
                <input autocomplete='off' type="text" class="form-control" maxlength="100" required name="phone">
            </div>
            <div class="col-xl-4 mb-3">
                <label class="form-label">Email<span class="text-danger">*</span></label>
                <input autocomplete='off' type="email" class="form-control" maxlength="100" required name="email">
            </div>
            <div class="col-xl-4 mb-3">
                <label class="form-label">Adhar no<span class="text-danger">*</span></label>
                <input autocomplete='off' type="text" class="form-control" maxlength="100" required name="adharno">
            </div>
            <div class="col-xl-4 mb-3">
                <label class="form-label">Subject<span class="text-danger">*</span></label>
                <input autocomplete='off' type="text" class="form-control" maxlength="100" required name="subject">
            </div>
            <div class="col-xl-4 mb-3">
                <label class="form-label">Amount<span class="text-danger">*</span></label>
                <input autocomplete='off' type="text" class="form-control" maxlength="100" required name="amount">
            </div>
            <div class="col-xl-8 mb-3">
                <label class="form-label">Description<span class="text-danger">*</span></label>
                <textarea class="form-control" required name="description"></textarea>
            </div>
            <div>
                <button type="submit" class="btn border border-secondary rounded-pill px-3 text-primary" name="verify" ><i class="bi bi-plus-square-fill me-2 text-primary"></i> Verify</button>
            </div>
            
        </form>


        <h3 class="mb-2 mt-5">Applied subsidy</h3>
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
                            <th scope="col">Subsidy no</th>
                            <th scope="col">Subject</th>
                            <th scope="col">Description</th>
                            <th scope="col">Amount</th>
                            <th scope="col">Date</th>
                            <th scope="col">status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM subsidy where otp_status = 'Verified' and user_id = '$user_id'";
                            $res = mysqli_query($conn,$sql);

                            if(mysqli_num_rows($res) > 0) {
                                $i = 1;

                                while($row = mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>$i</td>";
                                    echo "<td>$row[subsidy_no]</td>";
                                    echo "<td>$row[subject]</td>";
                                    echo "<td width=400px;>$row[description]</td>";
                                    echo "<td>$row[price]</td>";
                                    echo "<td>".date_format(date_create($row['date']), 'Y-m-d')."</td>";
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
