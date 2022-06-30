<?php
	require_once("../includes/DB.php");
  	require_once("../includes/sessions.php");
  	require_once("../includes/functions.php");

	if(isset($_GET['accept'])){
		$accept = $_GET['accept'];
		$sql = "UPDATE stageonetasks SET requeststatus = 'accepted' WHERE taskid='$accept'";
		$Execute = $ConnectingDB->query($sql);
		if ($Execute) {
			
			$_SESSION["SuccessMessage"] = " You have accepted this project offer.";
			Redirect_to('notifications.php');
			
		} else {
			$_SESSION["ErrorMessage"] = "Something went wrong. Try again";
			Redirect_to('notifications.php');
			
		}
	}elseif(isset($_GET['decline'])){
		$decline = $_GET['decline'];
		$sql = "UPDATE stageonetasks SET requeststatus = 'rejected' WHERE taskid='$decline'";
		$Execute = $ConnectingDB->query($sql);
		if ($Execute) {
			
			$_SESSION["SuccessMessage"] = "Task offer has been rejected..";
			Redirect_to('notifications.php');
		} else {
			$_SESSION["ErrorMessage"] = "Something went wrong. Try again";
			Redirect_to('notifications.php');
		}
	}else{
		Redirect_to("../index.php");
	}
?>