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
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em>Dashboard ...</em></h4>

	        	</div>

	        	<div>
	        	
	        		<?php
					        echo ErrorMessage();
					        echo SuccessMessage();

					     ?>
	        		<div class="p-3 azorders">
	        			
	        			<div class="container">
	        				<div class="row">
	        					<div class="col-md-4">
	        						<div class="d-flex align-items-center justify-content-center text-center py-4" style=" width: 100%;background-color: #F8F9FA; box-shadow: 5px 5px 5px #ddd; border:1px solid #ddd">
	        							<div >
	        								<h2><?=userno();?></h2>
	        								<p> Total users</p>
	        							</div>
	        						</div>
	        					</div>

	        					<div class="col-md-4">
	        						<div class="d-flex align-items-center justify-content-center text-center py-4" style=" width: 100%;background-color: #F8F9FA; box-shadow: 5px 5px 5px #ddd; border:1px solid #ddd">
	        							<div >
	        								<h2><?=projectno();?></h2>
	        								<p> Total projects </p>
	        							</div>
	        						</div>
	        					</div>

	        					<div class="col-md-4">
	        						<div class="d-flex align-items-center justify-content-center text-center py-4" style=" width: 100%;background-color: #F8F9FA; box-shadow: 5px 5px 5px #ddd; border:1px solid #ddd">
	        							<div >
	        								<h2><?= ogoing_projects();?></h2>
	        								<p> Ongoing tasks</p>
	        							</div>
	        						</div>
	        					</div>
	        				</div>
	        			</div>


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