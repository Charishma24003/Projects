<?php
session_start();

require_once 'include/config.php';
date_default_timezone_set('Asia/Kolkata');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Agro Mart - Login</title>
<style>
        
        * {
            box-sizing: border-box;
        }

        body {
            background: #ffe369;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
            margin: -20px 0 50px;
        }

        h1 {
            font-weight: bold;
            margin: 0;
        }

        p {
            font-size: 14px;
            font-weight: 100;
            line-height: 20px;
            letter-spacing: 0.5px;
            margin: 20px 0 30px;
        }

        span {
            font-size: 12px;
        }

        a {
            color: #333;
            font-size: 14px;
            text-decoration: none;
            margin: 15px 0;
        }

        button {
            border-radius: 20px;
            border: 1px solid #ffc107;
            background-color: #ffc107;
            color: #FFFFFF;
            font-size: 12px;
            font-weight: bold;
            padding: 12px 45px;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: transform 80ms ease-in;
        }

        form {
            background-color: #FFFFFF;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 50px;
            height: 100%;
            text-align: center;
        }

        input {
            background-color: #eee;
            border: none;
            padding: 12px 15px;
            margin: 8px 0;
            width: 100%;
        }

        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);
            position: relative;
            overflow: hidden;
            width: 768px;
            max-width: 100%;
            min-height: 480px;
        }

        .form-container {
            position: absolute;
            top: 0;
            height: 100%;
        }

        .log-in-container {
            left: 0;
            width: 50%;
            z-index: 2;
        }


        .overlay-container {
            position: absolute;
            top: 0;
            left: 50%;
            width: 50%;
            height: 100%;
        }


        .overlay {
            background: #81c408;
            background: -webkit-linear-gradient(to right, ##81c408, ##81c408);
            background: linear-gradient(to right, ##81c408, ##81c408);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 0 0;
            color: #FFFFFF;
            position: relative;
            left: -100%;
            height: 100%;
            width: 200%;
        }

        .overlay-panel {
            position: absolute;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 0 40px;
            text-align: center;
            top: 0;
            height: 100%;
            width: 50%;
        }


        .overlay-right {
            right: 0;
        }


        .social-container {
            margin: 50px 0;
        }

        .social-container a {
            border: 1px solid #DDDDDD;
            border-radius: 50%;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            margin: 0 5px;
            height: 40px;
            width: 40px;
        }
</style>
</head>
<body>
<?php
if (isset($_POST['changepass'])) {

  $email = addslashes(trim($_POST['email']));
  $n_password = addslashes(trim($_POST['n_password']));
  $c_password = addslashes(trim($_POST['c_password']));


    if ($c_password == $n_password) {

    $passqry = "UPDATE user SET password = '$n_password' WHERE email = '$email' AND userRole = 'User'";

    if ($conn->query($passqry) === TRUE) {
        echo "<script>alert('Password updated successfully!');location.href='index.php'</script>";
    } else {
        echo "<script>alert('Error updating password');location.href='forget-password.php'</script>";
    }
    } else {

        echo "<script>alert('Password confirmation doesnot match!');location.href='forget-password.php'</script>";
    }
    
}

?>
	<div class="container" id="container">
		<div class="form-container log-in-container">
			<form method="post">
				<h1>Forget password</h1>
				<input type="email" name="email" placeholder="Enter Email" />
				<input type="password" name="n_password" placeholder="New Password" />
                <input type="password" name="c_password" placeholder="Confirm Password" />
				
				<a href="index.php">Click here to Login</a>
				<button type="submit" name="changepass">Submit</button>
			</form>
		</div>
		<div class="overlay-container">
			<div class="overlay">
				<div class="overlay-panel overlay-right">
					<h1>Agro Mart</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				</div>
			</div>
		</div>
	</div>
</body>
</html>