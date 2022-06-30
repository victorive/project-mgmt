<?php
	if (!isset($_SESSION['client_ID']) && !isset($_SESSION['clientName'])) {
    	header("location: ../login.php");
    } 

$UserId = $_SESSION['client_ID'];
global $ConnectingDB;
$sql = "SELECT * FROM register WHERE id='$UserId'";
$stmtuser = $ConnectingDB->query($sql);
if ($stmtuser) {
	while ($DataRows = $stmtuser->fetch()) {
		$fullname = $DataRows['fullname'];
		$email = $DataRows['email'];
		
	}
} else {
	header("location: ../login.php");
}
?>