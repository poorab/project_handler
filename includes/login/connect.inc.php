<?PHP
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db = 'project_handler_db';
	$con = mysqli_connect($host,$user,$pass,$db);
	
	if(mysqli_connect_errno($con)){
		echo 'Failed to connect to the database : '.mysqli_connect_error();
		die();
	}
?>