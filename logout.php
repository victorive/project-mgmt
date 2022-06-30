<?php
	require_once("includes/sessions.php");
	require_once("includes/functions.php");

?>

<?php 
	$_SESSION['client_ID']=null;
	$_SESSION['clientName']= null;
	session_destroy();
	Redirect_to('login.php');
?>