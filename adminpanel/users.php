<?php 
  require_once("../includes/DB.php");
  require_once("../includes/sessions.php");
  require_once("../includes/functions.php");
    require 'loginadmin.php';

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
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em>Users</em></h4>
	        		

	        	</div>

	        	<div>
	        	

	        		<div class="p-2 azorders">
	        			<?php
					        echo ErrorMessage();
					        echo SuccessMessage();

					     ?>
	        			
	        			<table class="table" style="width: 100%; background-color: #F8F9FA; box-shadow: 5px 5px 5px #ddd; border:1px solid #ddd">
						    <thead>
						        <tr>
						            <th>Row</th>
						            <th>Fullname</th>
						            <th>Email</th>
						            <th>Date Joined</th>
						            
						            
						        </tr>
						    </thead>
						    <tbody>
						    	<?php 
								    global $ConnectingDB;
								    $sql = "SELECT * FROM register
								    WHERE fullname != 'admin panel'
								    ORDER BY id desc";
								    $stmtloan = $ConnectingDB->query($sql);
									$SN = 0;
									while ($DataRows = $stmtloan->fetch()) {
								    	$fullname = $DataRows['fullname'];
								    	$email = $DataRows['email'];
								    	$datecreated = $DataRows['dateadded'];
								    		$datecreated = strtotime($datecreated);
                                			$datecreated = date('d M, Y', $datecreated);
								    	$SN++;
								    	
								?>
									<tr>
							            <td><?=$SN;?></td>
							            <td><?= $fullname; ?></td>
							            <td style="color: grey"><i><?= $email; ?></i></td>
							            <td><i><?= $datecreated; ?></i></td>

							            
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