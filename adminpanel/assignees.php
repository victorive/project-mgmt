<?php 
  require_once("../includes/DB.php");
  require_once("../includes/sessions.php");
  require_once("../includes/functions.php");
   require 'loginadmin.php';
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
	        	<div class="d-flex justify-content-between">
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em>Assignees ...</em></h4>
	        		<div class=""><i class="fa fa-plus p-2 d-flex justify-content-center" style=""></i></div>

	        	</div>

	        	<div>
	        	
	        		<?php
					        echo ErrorMessage();
					        echo SuccessMessage();

					     ?>
	        		<div class="p-3 azorders">
	        			
	        			<table class="table" style="width: 100%; background-color: #F8F9FA; box-shadow: 5px 5px 5px #ddd; border:1px solid #ddd">
						    <thead>
						        <tr>
						            <th>Row</th>
						            <th>Assignee</th>
						            <th>Task</th>
						            <th>Project Name</th>
						            <th>Deadline</th>
						            
						        </tr>
						    </thead>
						    <tbody>
						    	<?php 
								    global $ConnectingDB;
								    $sql = "SELECT * FROM stageonetasks, register, projects
								    WHERE stageonetasks.assignTo = register.email AND stageonetasks.projectname = projects.projectID AND requeststatus = 'accepted' AND progressStatus = 'ongoing' ORDER BY taskId desc";
								    $stmtloan = $ConnectingDB->query($sql);
									$SN = 0;
									while ($DataRows = $stmtloan->fetch()) {
								    	$taskId = $DataRows['taskid'];
								    	$projectname = $DataRows['projectName'];
								    	$fullname = $DataRows['fullname'];
								    	$taskname = $DataRows['taskname'];
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
							            <td><?= $fullname; ?></td>
							            <td><?= $taskname; ?></td>
							            <td style="color: grey"><i><?= $projectname;?></i></td>
							            
						            	<td><i><?=$deadline;?> </i></td>
						            	
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