<?php 
  require_once("includes/DB.php");
  require_once("includes/sessions.php");
  require_once("includes/functions.php");

  if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    $found_Account = Login_Attempt($email);


    if ($found_Account) {
			if (password_verify($password, $found_Account["password"])) {

				$_SESSION['client_ID'] = $found_Account["id"];
				$_SESSION['clientName'] = $found_Account["fullname"];
				if($_SESSION['clientName'] === 'admin panel'){
					$_SESSION["SuccessMessage"] = "Welcome to your dashboard";
					Redirect_to('adminpanel/dashboard.php');
				}else{
					$_SESSION["SuccessMessage"] = "Welcome to your dashboard";
					Redirect_to('dashboard/dashboard.php');
				}
			
			} else {

				$_SESSION["ErrorMessage"] = "Incorrect email/password";
				Redirect_to('login.php');
			}

			// echo "Welcome to your dashboard";
		} else {
			$_SESSION["ErrorMessage"] = "something went wrong";
		}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<link href="https://fonts.googleapis.com/css?family=Lora&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/mainstyleSheet.css">
</head>
<body>
	<?php
        echo ErrorMessage();
        echo SuccessMessage();

     ?>
	<div class="container-fluid d-flex align-items-center justify-content-center loginpg-cont" >
		<div class="row">
			<div class="col-md-4 animated slideInDown">
				<img src="images/checkTasks.jpeg" style=" height:100%; width: 70%">
			</div>

			<div class="col-md-4">
				<div class="p-3 loginform-cont" style="" >
					<form action="login.php" method="POST">
						<div class="text-center py-3">
							<a href="index.php" class="navbar-brand">
						    	<i> Proj<span>.</span>Mngt</i>
							</a>
						</div>

						<div class="input-group mb-3">
				            <div class="input-group-prepend">
				                <span class="input-group-text">
				                    <span class="fa fa-user"></span>
				                </span>                    
				            </div>
				            <input type="email" name="email" class="form-control" placeholder="Enter Email">
				        </div>

				        <div class="input-group ">
				            <div class="input-group-prepend">
				                <span class="input-group-text">
				                    <span class="fa fa-lock"></span>
				                </span>                    
				            </div>
				            <input type="password" name="password" class="form-control" placeholder="Enter Password">
				        </div>

				        <div class=" text-center my-3 loginpg-btn">
				        	<!-- <a href="#" class="loginbtn" style=""> login</a> -->
				        	<input type="submit" name="login" value="Login" class="loginbtn" style="width: 100%; border: none">
				        </div>

				        <div class="text-right">
				        	<p> Don't have an account? <a href="register.php">Register</a></p>
				        </div>
					</form>
				</div>
			</div>

			<div class="col-md-4 animated slideInRight">
				<img src="images/PinImage.jpg" style=" height:100%; width: 100%">
			</div>
			
		</div>
	</div>


	<!-- JAVASCRIPT -->

	<script type="text/javascript" src="popper/docs/js/jquery.min.js"></script>
	<script type="text/javascript" src="bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="popper/docs/js/main.js"></script>
	<script src="js/js-file.js"></script>
</body>
</html>