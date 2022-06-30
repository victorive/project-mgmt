<?php 
  require_once("../includes/DB.php");
  require_once("../includes/sessions.php");
  require_once("../includes/functions.php");
   require 'logincheck.php';
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard: profile</title>
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
	        	<div class="d-flex justify-content-between">
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em>Profile ...</em></h4>
	        		<div class=""><i class="fa fa-plus p-2 d-flex justify-content-center" style=""></i></div>

	        	</div>

	        	<div>
	        	

	        		<div class="p-3 azorders">
	        			<form action="profile.php" method="POST">
	        				<div class="row profile-input" >
	        					<div class="col-md-6 py-3" style="border-right: 1px solid grey">
	        						<div>Name:</div>
	        						<input type="text" name="" value="<?php echo $fullname;?>" disabled="true">

	        						<div class="mt-3">
	        							<div> Email:</div>
	        							<input type="text" name="" value="<?php echo $email;?>" disabled>
	        						</div>

	        						<!-- <div class=" my-3 loginpg-btn pt-3">
							        	<input type="submit" name="addProject" value="Add Project" class="loginbtn px-4" style="border: none">
							        </div> -->
	        					</div>

	        					<div class="col-md-6">
	        						<h4 style="color:#4A69FD; border-bottom: 1px solid grey; display: inline-flex;"><i> Projects (<span style="color: grey"><?php client_projectno($UserId);?></span>)</i></h4>
	        						<div>
	        							<?php 
					                        global $ConnectingDB;
					                        $sql = "SELECT * FROM projects
					                        WHERE createdby = '$UserId' ORDER BY projectID desc";
					                        $stmtloan = $ConnectingDB->query($sql);
					                    
					                        while ($DataRows = $stmtloan->fetch()) {
					                        	$projectname = $DataRows['projectName'];
					                        	$datecreated = $DataRows['datecreated'];
					                      ?>
	        								<p style="color: grey">- <em><?php echo $projectname; ?></em></p>
	        							  <?php }?>	
	        						</div>
	        					</div>
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