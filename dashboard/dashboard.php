<?php 
  require_once("../includes/DB.php");
  require_once("../includes/sessions.php");
  require_once("../includes/functions.php");
   require 'logincheck.php';
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
	        		<h4 style="display: inline-flex; border-bottom: 2px solid #FF3040; color:#040E40"><em> ...</em></h4>

	        	</div>

	        	<div>
	        	
	        		<?php
					        echo ErrorMessage();
					        echo SuccessMessage();

					     ?>
	        		<div class="p-3 azorders">
	        			
	        			<div class="text-center text-secondary pt-4 "><i>
	        				Number one place where projects get done <br>
	        				Steps to accomplishing dreams is to break them into small goals<br>
	        				Go ahead and create projects...
	        				</i>
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