<?php 
  require_once("../includes/DB.php");
  require_once("../includes/sessions.php");
  require_once("../includes/functions.php");
   require 'logincheck.php';

   if(isset($_GET['project'])){
		$projectId = $_GET['project'];
	}
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>Dashboard</title>
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
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em>Catering Project (Planning)</em></h4>
	        		<a href="createTask.php?project=<?= $projectId;?>&stage=<?= 'planning';?>" class="pr-5"><i class="fa fa-plus p-2 d-flex justify-content-center" style=""></i></a>

	        	</div>

	        	<div>
	        	

	        		<div class="p-2 azorders">
	        			<?php
					        echo ErrorMessage();
					        echo SuccessMessage();

					     ?>
	        			<div style="text-align: right;"><div class="mr-md-5" style="display: inline-flex; background-color: #4A69FD; color: white; padding: 7px 15px; border-radius: 5px 5px 0 0"> In-progress </div></div>
	        			<table class="table" style="width: 100%; background-color: #F8F9FA; box-shadow: 5px 5px 5px #ddd; border:1px solid #ddd">
						    <thead>
						        <tr>
						            <th>Row</th>
						            <th>Task</th>
						            <th>Assignee</th>
						            <th>Date assigned</th>
						            <th>Due Date</th>
						            <th>Request status</th>
						            <th>Task Status</th>
						            
						        </tr>
						    </thead>
						    <tbody>
						    	<?php 
								    global $ConnectingDB;
								    $sql = "SELECT * FROM stageonetasks
								    WHERE projectname = '$projectId'AND requeststatus != 'declined' AND progressstatus = 'ongoing' ORDER BY taskId desc";
								    $stmtloan = $ConnectingDB->query($sql);
									$SN = 0;
									while ($DataRows = $stmtloan->fetch()) {
								    	$taskId = $DataRows['taskid'];
								    	$projID = $DataRows['projectname'];
								    	$assignedTo = $DataRows['assignTo'];
								    	$taskname = $DataRows['taskname'];
								    	$reqstatus = $DataRows['requeststatus'];
								    	$deadline = $DataRows['deadline'];
								    		$deadline = strtotime($deadline);
                                			$deadline = date('d M, Y', $deadline);
								    	$datecreated = $DataRows['dateadded'];
								    		$datecreated = strtotime($datecreated);
                                			$datecreated = date('d M, Y', $datecreated); 
                                		
								    	$SN++;
								?>
									<tr>
							            <td><?=$SN;?></td>
							            <td><?= $taskname; ?></td>
							            <td style="color: grey"><i><?= $assignedTo; ?></i></td>
							            <td><i><?= $datecreated; ?></i></td>
							            <td><i><?= $deadline; ?></i></td>
							            <td><i><?= $reqstatus; ?></i></td>
							            <td class="d-flex text-info"> In-progress<span class="m-1 d-flex align-items-center justify-content-center fa fa-hourglass"> </span></td>
							        </tr>
								<?php }?>
						        
						                  
						    </tbody>
						</table>
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