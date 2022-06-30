<?php
	function Redirect_to($New_Location){
		header("Location:" . $New_Location);
		exit;
	}

	// checks if email exists before registering user
	function checkEmail($email){
		global $ConnectingDB;
		$sql = "SELECT email FROM register WHERE email=:emaiL";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':emaiL', $email);
		$stmt->execute();
		$Result = $stmt->rowcount();
		if ($Result == 1) {
			return true;
		} else {
			return false;
		}
	}

		// checks if details are correct before login
	function Login_Attempt($Email){
		global $ConnectingDB;
		$sql = "SELECT * FROM register WHERE email=:emaiL LIMIT 1";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':emaiL', $Email);
		$stmt->execute();
		$Result = $stmt->rowcount();
		if ($Result == 1) {
			return $found_Account = $stmt->fetch();
		} else {
			return null;
		}
	}

	function client_projectno($UserID){
		global $ConnectingDB;
		$sql = "SELECT projectID FROM projects WHERE createdby =:userid";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->bindValue(':userid', $UserID);
		$stmt->execute();
		$Result = $stmt->rowcount();
		echo $Result;
	}

	function projectno(){
		global $ConnectingDB;
		$sql = "SELECT projectID FROM projects";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->execute();
		$Result = $stmt->rowcount();
		echo $Result;
	}

	function userno(){
		global $ConnectingDB;
		$sql = "SELECT id FROM register WHERE fullname != 'admin panel' ";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->execute();
		$Result = $stmt->rowcount();
		echo $Result;
	}

	function ogoing_projects(){
		global $ConnectingDB;
		$sql = "SELECT taskid FROM stageonetasks WHERE progressStatus = 'ongoing' ";
		$stmt = $ConnectingDB->prepare($sql);
		$stmt->execute();
		$Result = $stmt->rowcount();
		echo $Result;
	}
?>