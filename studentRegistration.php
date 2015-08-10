<!-- Including files for DB connection and Session Control -->
<?php
    //include 'includes/login/core.inc.php';
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';
?>
<!-- /End of includes -->

<!DOCTYPE html>
<html lang="en">

	<?php
	    //if(loggedIn()){ #This function is in /includes/login/core.inc.pho for verfying user session
	      
	    	if (isset($_POST['studentRegistration'])) {
	    		# code...
	    		if ((!empty($_POST['studentName'])) && (!empty($_POST['courseId'])) && (!empty($_POST['rollNo'])) && (!empty($_POST['batchId'])) && (!empty($_POST['studentEmail']))) {
	    			# code...
	    			$studentName = $_POST['studentName'];
	    			$rollNo = $_POST['rollNo'];
	    			$courseId = $_POST['courseId'];
	    			$semester = $_POST['semester'];
	    			$batchId = $_POST['batchId'];
	    			$studentEmail = $_POST['studentEmail'];
	    			$studentPassword = $_POST['studentPassword'];
	    			$studentRegistrationQuery = mysqli_query($con, "INSERT INTO `student_details`(`student_id`, `student_name`, `roll_no`, `course_id`, `semester`, `batch_id`, `email`, `password`) VALUES ( '', '$studentName', '$rollNo', '$courseId', '$semester', '$batchId', '$studentEmail', '$studentPassword')");
	    		
	    			echo $studentName." registered";
	    		}
	    		else{
	    			echo "Registration unsuccessful. <a href='registration.php'>Click here</a> to login again.";
	    		}
	    	}
	    	
	?>

	<head>
	
		<meta charset="utf-8">
		<meta name="viewport"    content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
		
		<title>Sign up - Progressus Bootstrap template</title>

		<link rel="shortcut icon" href="assets/images/gt_favicon.png">
		
		<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Custom styles for register form in tabs -->
		<link rel="stylesheet" href="assets/css/form-tab.css">

		<!-- Custom styles for our template -->
		<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
		<link rel="stylesheet" href="assets/css/main.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->

	</head>

</html>