<?php

session_start();

require_once 'include/config.php';


if (empty($_SESSION['isLogin'])) {

    echo "<script>alert('Kindly login to proceed');location.href='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify OTP</title>
    <link rel="stylesheet" href="styles.css"> <!-- Link to your CSS file -->
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
    }

    .container {
        max-width: 400px;
        margin: 100px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    h2 {
        margin-bottom: 20px;
        color: #333;
    }

    .otp-inputs {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    input[type="text"] {
        width: 40px;
        height: 40px;
        font-size: 18px;
        text-align: center;
        margin: 0 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        margin-top: 20px;
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    button:hover {
        background-color: #0056b3;
    }

</style>
<?php
    if(isset($_GET['subno'])) {
        $subsidy_no = $_GET['subno'];
    }

    $res = mysqli_query($conn, "SELECT otp FROM subsidy WHERE subsidy_no = '$subsidy_no'");
    if (mysqli_num_rows($res) > 0) {

        $row = mysqli_fetch_assoc($res);
        $otp = $row['otp'];
    }

    if (isset($_POST['verifyotp'])) {
        $entered_otp = $_POST['otp1'] . $_POST['otp2'] . $_POST['otp3'] . $_POST['otp4'] . $_POST['otp5'] . $_POST['otp6'];
        
        if ($entered_otp == $otp) {

            $otpstatus="verified";
           
            $update = "UPDATE subsidy SET otp_status = '$otpstatus' where subsidy_no = '$subsidy_no'";

            if (mysqli_query($conn, $update)) {

                echo "<script>alert('OTP verified successfully');location.href='subsidy.php'</script>";
            } else {
                echo "<script>alert('Unable to process your request!');location.href='subsidy.php'</script>";
            }
        } else {
            echo "<script>alert('Incorrect OTP entered');</script>";
        }
    }
?>
<body>
    <div class="container">
        <h2>Verify OTP</h2>
        <form method="post">
            <div class="otp-inputs">
                <input type="text" id="otp1" name="otp1" maxlength="1" pattern="[0-9]" required oninput="moveToNext(this, 'otp2')">
                <input type="text" id="otp2" name="otp2" maxlength="1" pattern="[0-9]" required oninput="moveToNext(this, 'otp3')">
                <input type="text" id="otp3" name="otp3" maxlength="1" pattern="[0-9]" required oninput="moveToNext(this, 'otp4')">
                <input type="text" id="otp4" name="otp4" maxlength="1" pattern="[0-9]" required oninput="moveToNext(this, 'otp5')">
                <input type="text" id="otp5" name="otp5" maxlength="1" pattern="[0-9]" required oninput="moveToNext(this, 'otp6')">
                <input type="text" id="otp6" name="otp6" maxlength="1" pattern="[0-9]" required>
            </div>
            <button type="submit" name="verifyotp">Verify</button>
        </form>
    </div>

    <script>
        function moveToNext(currentInput, nextInputId) {
            if (currentInput.value.length === currentInput.maxLength) {
                document.getElementById(nextInputId).focus();
            }
        }
    </script>
</body>
</html>
