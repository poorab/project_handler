<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><?php
require 'database_connection.php';
if (isset($_POST['project_status'])){
	$project_status = $_POST['project_status'];
	
	if (!empty($project_status)){
		$query_run = mysqli_query($con, "update register set status = '$project_status'") or die("updation incomplete due to error");
	}

	else{
		echo 'Fill Project status';
	}
}
?>