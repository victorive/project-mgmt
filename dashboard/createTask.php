<?php 
  require_once("../includes/DB.php");
  require_once("../includes/sessions.php");
  require_once("../includes/functions.php");

  require 'logincheck.php';

  // echo $UserId;
	if(isset($_GET['project']) && isset($_GET['stage'])){
		$projectId = $_GET['project'];
		$stagename = $_GET['stage'];

	}else if (isset($_POST['addTask'])) {
	  	$taskName = $_POST['taskName'];
	  	$assignTo = $_POST['assignTo'];
	  	$stage = $_POST['stage'];
	  	$projectName = $_POST['projectN'];
	  	$deadline = $_POST['deadline'];
	  	if(empty($projectName) || empty($deadline) || empty($assignTo)){
	  		$_SESSION["ErrorMessage"]= "Fields cannot be empty. Please try again.";
	          // Redirect_to('register.php');
	  	}else if(!checkEmail($assignTo)){
	  		$_SESSION["ErrorMessage"]=  "This email does not exist. Please try again.";
	  	
	  	}else{
	  		global $ConnectingDB; 
	        $sql = "INSERT INTO stageonetasks(projectname, taskname, stage, assignTo,deadline)
	        VALUES(:projectName, :taskName, :stagE, :assigntO, :deadlinE)";
	        $stmt = $ConnectingDB->prepare($sql);
	        $stmt->bindValue('projectName',$projectName);
	        $stmt->bindValue('taskName',$taskName);
	        $stmt->bindValue('stagE',$stage);
	        $stmt->bindValue(':assigntO',$assignTo);
	        $stmt->bindValue('deadlinE',$deadline);
	        $Execute = $stmt->execute();
	        if($Execute){
	          $_SESSION["SuccessMessage"]= "Task has been created successfully;)";
	          Redirect_to('projecttasks.php?project=$projectName');
	          
	        }else{
	          $_SESSION["ErrorMessage"]= "A problem occured. Please try again.";

	        }
	  	}
	  }else{
	  	$_SESSION["ErrorMessage"]= "A problem occured. Please try again.";
	        Redirect_to('dashboard.php');
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
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em>Create Task / <small>event manager</small></em></h4>
	        		
	        	</div>

	        	<div>
	        	

	        		<div class="p-3 azorders">
	        			<?php
					        echo ErrorMessage();
					        echo SuccessMessage();

					     ?>
	        			<form action="createTask.php" method="POST">
	        				<div class="row profile-input pb-4" >
	        					<div class="col-md-4">
	        						<div class="pb-2">Task:</div>
	        						<input type="text" name="taskName" value="">
	        					</div>

	        					<div class="col-md-4">
	        						<div class="pb-2">Assignnee:</div>
	        							<input type="email" name="assignTo" placeholder="Enter assignne's name">
	        					</div>

	        					<div class="col-md-4">
	        						<div class="pb-2">Deadline:</div>
	        							<input type="date" name="deadline" value="">
	        					</div>

	        					<div class="col-md-4">
	        						<div class="pb-2 d-none">stage:</div>
	        							<input type="hidden" name="stage" value="<?= $stagename;?>">
	        					</div>

	        					<div class="col-md-4">
	        						<div class="pb-2 d-none">project:</div>
	        							<input type="hidden" name="projectN" value="<?= $projectId;?>">
	        					</div>

	        				</div>

	        				<div class=" my-3 loginpg-btn pt-3">
					        	<input type="submit" name="addTask" value="Add Project" class="loginbtn px-4" style="border: none">
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