<?php 
  require_once("includes/DB.php");
  require_once("includes/sessions.php");
  require_once("includes/functions.php");
?>

<?php
  if (isset($_POST['register'])) {
    $fullname    = $_POST['fullname'];
    $email        = $_POST['email'];
    $password     = $_POST['password'];
    $confirmPass  = $_POST['confirmPass'];

    if(empty($fullname) || empty($email) || empty($password) || empty($confirmPass)){
      $_SESSION["ErrorMessage"] = "Fields cannot be empty ";
    }elseif($password !== $confirmPass){
      $_SESSION["ErrorMessage"] = "Passwords do not match. Try again";
    }elseif(checkEmail($email)){
      $_SESSION["ErrorMessage"] = "This email already exists. Go ahead and login";
    }else{
        $password   = password_hash($password, PASSWORD_DEFAULT);

        global $ConnectingDB; 
        $sql = "INSERT INTO register(fullname, email, password)
        VALUES(:fullName, :emaiL, :passworD)";
        $stmt = $ConnectingDB->prepare($sql);
        $stmt->bindValue('fullName',$fullname);
        $stmt->bindValue('emaiL',$email);
        $stmt->bindValue('passworD',$password);
        $Execute = $stmt->execute();
        if($Execute){
          $_SESSION["SuccessMessage"]= "Registration was successful. Please login ;)";
          Redirect_to('login.php');
          
        }else{
          $_SESSION["ErrorMessage"]= "A problem occurred. Please try again.";
          Redirect_to('register.php');

        }
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
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
			<div class="col-md-4 animated slideInDown d-flex align-items-center justify-content-center">
				<img src="images/checkTasks.jpeg" style=" height:80%; width: 60%">
			</div>

			<div class="col-md-4">
				<div class="p-3 loginform-cont" style="" >
					<form action="register.php" method="POST">
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
				            <input type="text" name="email" class="form-control" placeholder="Enter Email">
				        </div>

				        <div class="input-group mb-3">
				            <div class="input-group-prepend">
				                <span class="input-group-text">
				                    <span class="fa fa-envelope"></span>
				                </span>                    
				            </div>
				            <input type="text" name="fullname" class="form-control" placeholder="Enter Fullname">
				        </div>

				        <div class="input-group mb-3">
				            <div class="input-group-prepend">
				                <span class="input-group-text">
				                    <span class="fa fa-lock"></span>
				                </span>                    
				            </div>
				            <input type="password" name="password" class="form-control" placeholder="Enter Password">
				        </div>

				        <div class="input-group ">
				            <div class="input-group-prepend">
				                <span class="input-group-text">
				                    <span class="fa fa-lock"></span>
				                </span>                    
				            </div>
				            <input type="password" name="confirmPass" class="form-control" placeholder="Enter Password">
				        </div>


				        <div class=" text-center my-3 loginpg-btn">
				        	<!-- <a href="#" class="loginbtn" style=""> Register </a> -->
				        	<input type="submit" name="register" value="Register" class="loginbtn" style="width: 100%; border: none">
				        </div>

				        <div class="text-right">
				        	<p> Already have an account? <a href="login.php">Login</a></p>
				        </div>
					</form>
				</div>
			</div>

			<div class="col-md-4 animated slideInRight d-flex align-items-center justify-content-center">
				<img src="images/PinImage.jpg" style=" height:80%; width: 100%">
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