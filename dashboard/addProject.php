<?php 
  require_once("../includes/DB.php");
  require_once("../includes/sessions.php");
  require_once("../includes/functions.php");

  require 'logincheck.php';

  // echo $UserId;
  if (isset($_POST['addProject'])) {
  	$projectName = $_POST['projName'];
  	$deadline = $_POST['deadline'];
  	if(empty($projectName) || empty($deadline)){
  		$_SESSION["ErrorMessage"]= "Fields cannot be empty. Please try again.";
          // Redirect_to('register.php');
  	}else{
  		global $ConnectingDB; 
        $sql = "INSERT INTO projects(projectName, deadline, createdby)
        VALUES(:projectName, :deadlinE, :userId)";
        $stmt = $ConnectingDB->prepare($sql);
        $stmt->bindValue('projectName',$projectName);
        $stmt->bindValue('deadlinE',$deadline);
        $stmt->bindValue('userId',$UserId);
        $Execute = $stmt->execute();
        if($Execute){
          $_SESSION["SuccessMessage"]= "Project has been created successfully. You can now create tasks for your projects;)";
          Redirect_to('dashboard.php');
          
        }else{
          $_SESSION["ErrorMessage"]= "A problem occured. Please try again.";
          // Redirect_to('.php');

        }
  	}
  }
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard: notification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">	
	<link href="../design-files/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="../bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="../css/animate.css">
	<link rel="stylesheet" type="text/css" href="../css/mainstyleSheet.css">
	<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
  </head>
  <body>
  		
		<?php require 'sidebar.php'; ?>

	        <!-- Page Content  -->
	      <div id="content" class="p-4 p-md-5 pt-5">
	      	
	        <div id="storeItems" >
	        	<div class="d-flex justify-content-between ml-4">
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em>Add a Project</em></h4>
	        		
	        	</div>

	        	<div>
	        	

	        		<div class="p-3 azorders">
	        			<?php
					        echo ErrorMessage();
					        echo SuccessMessage();

					     ?>
	        			<form action="addProject.php" method="POST">
	        				<div class="row profile-input pb-4" >
	        					<div class="col-md-6">
	        						<div class="pb-2">Project Name:</div>
	        						<input type="text" name="projName" value="">
	        					</div>

	        					<div class="col-md-6">
	        						<div class="pb-2">Deadline:</div>
	        							<input type="date" name="deadline" value="">
	        					</div>
	        				</div>


	        				<div class="pb-2 font-weight-bold mb-3" style="border-bottom: 1px solid #ddd"> Sub Tasks</div>
	        				<!-- <hr> -->
	        				<div class="row profile-input">
	        					<div class="col-md-3">
	        						<div class="pb-2"> Stage 1:</div>
	        						<input type="text" name="" value="planning" disabled="true">
	        					</div>

	        					<div class="col-md-3">
	        						<div class="pb-2">Stage 2:</div>
	        						<input type="text" name="" value="design" disabled="true">
	        					</div>

	        					<div class="col-md-3">
	        						<div class="pb-2"> Stage 3:</div>
	        						<input type="text" name="" value="Implementation" disabled="true">
	        					</div>

	        					<div class="col-md-3">
	        						<div class="pb-2">Stage 4:</div>
	        						<input type="text" name="" value="Launch" disabled="true">
	        					</div>
	        				</div>

	        				<div class=" my-3 loginpg-btn pt-3">
					        	<input type="submit" name="addProject" value="Add Project" class="loginbtn px-4" style="border: none">
					        </div>
	        			</form>
	        		</div>
	        	</div>
	        </div>
	      </div>
		</div>

   	<script type="text/javascript" src="../popper/docs/js/jquery.min.js"></script>
	<script type="text/javascript" src="../bootstrap/dist/js/bootstrap.js"></script>
	<script type="text/javascript" src="../popper/docs/js/main.js"></script>
    <script src="../js/dashboard.js"></script>


  </body>
</html>