<!-- Including files for DB connection and Session Control -->
<?php
    //include 'includes/login/core.inc.php';
    include 'includes/login/connect.inc.php';
    include 'includes/login/core.inc.php';
?>
<!-- /End of includes -->

<html lang="en">
	<?php
		if (loggedIn()) {

			$userName = $_SESSION['username'];
			if($query = mysqli_query($con, "SELECT * FROM `mentor_details` WHERE `email` IN ('$userName')")) {
				header('location:mentorProfile.php');
			}
			elseif ($query = mysqli_query($con, "SELECT * FROM `student_details` WHERE `email` IN ('$userName')")) {
				header('location:studentProfile.php');
			}
	?>
	<head>
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="">
	    <meta name="author" content="">
	    <title>Project Handler | Signin </title>

	    <!-- Bootstrap core CSS -->
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="assets/css/signin.css" rel="stylesheet">
	</head>

	<body>

		<h1>succefully logged in</h1>
		<a href="includes/logout.inc.php" title="Logout">logout</a>
	<?php
	    } #End of LoggedIn function
	    else{
	        #redired to loginform if not loggedIn
	        include 'includes/login/loginform.inc.php' ;
	    }
	?>
	</body>
</html>