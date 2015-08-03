<!-- Including files for DB connection and Session Control -->
<?php
    //include 'includes/login/core.inc.php';
    include 'includes/login/connect.inc.php';
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
	    			$studentRegistrationQuery = mysqli_query($con, "INSERT INTO `student_details`(`student_id`, `student_name`, `roll_no`, `course_id`, `semester`, `batch_id`, `email`, `password`) VALUES ( '', '$studentName', '$rollNo', '$courseId', '$semester', '$batchId', '$email', '$password')");
	    			echo "<script>window.alert('Student registration successful.');</script>";
	    		}
	    		else{
	    			echo "<script>window.alert('Fill all the necessary fields.');</script>";
	    		}
	    	}
	    	elseif (isset($_POST['mentorRegistration'])) {
	    		# code...
	    		if ((!empty($_POST['mentorName'])) && (!empty($_POST['mentorEmail']))) {
	    			# code...
	    			$mentorName = $_POST['mentorName'];
	    			$email = $_POST['mentorEmail'];
	    			$password = $_POST['mentorPassword'];
	    			$studentRegistrationQuery = mysqli_query($con, "INSERT INTO `mentor_details`(`mentor_id`, `mentor_name`, `batch_id`, `email`, `password`) VALUES ( '', '$mentorName', '', '$email', '$password')");
	    			echo "<script>window.alert('Mentor registration successful.');</script>";
	    		}
	    		else{
	    			echo "<script>window.alert('Fill all the necessary fields.');</script>";
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

	<body>
		<!-- Fixed navbar -->
		<div class="navbar navbar-inverse navbar-fixed-top headroom" >
			<div class="container">
				<div class="navbar-header">
					<!-- Button for smallest screens -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
					<a class="navbar-brand" href="index.html"><img src="assets/images/3.png"   style="margin:-20px; padding:0px 0px 40px 0px;" alt="Progressus HTML5 template"></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav pull-right">
						<li><a href="new index.html">Home</a></li>
						<li><a href="about.html">About</a></li>
						<!--<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="sidebar-left.html">Left Sidebar</a></li>
								<li><a href="sidebar-right.html">Right Sidebar</a></li>
							</ul>
						</li>-->
						<li><a href="contact.html">Contact</a></li>
						<li class="active"><a href="registration.html"></a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div> 
		<!-- /.navbar -->

		<header id="head" class="secondary"></header>

		<!-- container -->
		<div class="container">

			<ol class="breadcrumb">
				<li><a href="new index.html">Home</a></li>
				<li class="active">Register</li>
			</ol>

			<div class="row">
				
				<!-- Article main content -->
				<article class="col-xs-12 maincontent">
					<header class="page-header">
						<h1 class="page-title">Register Now</h1>
					</header>
					
					<div>

						<!-- Nav tabs -->
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation" class="active"><a href="#student" aria-controls="student" role="tab" data-toggle="tab">Student</a></li>
							<li role="presentation"><a href="#mentor" aria-controls="mentor" role="tab" data-toggle="tab">Mentor</a></li>
						</ul>

						<!-- Tab panes -->
						<div class="tab-content">
							<div role="tabpanel" class="tab-pane active" id="student">
								<!-- form for student registration goes here-->
								<form action="#" method="POST" role="form">
									<div class="top-margin">
										<label>Full Name <span class="text-danger">*</span></label>
										<input type="text" placeholder="name" name="studentName" class="form-control">
									</div>

									<div class="top-margin">
										<label>Roll No <span class="text-danger">*</span></label>
										<input type="text" placeholder="e.g. IT-2K11-01" name="rollNo" class="form-control">
									</div>

									<div class="top-margin">
										<label>Course <span class="text-danger">*</span></label>
										<select name="courseId">
											<?php
						                        $course = mysqli_query($con, "SELECT * FROM `course_details`");
						                        while ($courseRow = mysqli_fetch_assoc($course)) {
						                            $courseName = $courseRow['course_name'];
						                            $courseIdValue = $courseRow['course_id'];
						                            # iteratively generate options for brand names...
						                            echo "<option value=".$courseIdValue.">".$courseName."</option><br>";
						                        }
						                    ?>
										</select>
									</div>

									<div class="top-margin">
										<label>Current Semester <span class="text-danger">*</span></label>
										<select name="semester">
											<option value="1" selected>sem 1</option>
											<option value="2">sem 2</option>
											<option value="3">sem 3</option>
											<option value="4">sem 4</option>
											<option value="5">sem 5</option>
											<option value="6">sem 6</option>
											<option value="7">sem 7</option>
											<option value="8">sem 8</option>
											<option value="9">sem 9</option>
											<option value="10">sem 10</option>
											<option value="11">sem 11</option>
											<option value="12">sem 12</option>
										</select>
									</div>
									
									<div class="top-margin">
										<label>Batch <span class="text-danger">*</span></label>
										<select name="batchId">
											<?php
						                        $batch = mysqli_query($con, "SELECT * FROM `batch_details`");
						                        while ($batchRow = mysqli_fetch_assoc($batch)) {
						                            $batchName = $batchRow['batch_name'];
						                            $batchIdValue = $batchRow['batch_id'];
						                            # iteratively generate options for brand names...
						                            echo "<option value=".$batchIdValue.">".$batchName."</option><br>";
						                        }
						                    ?>
										</select>
									</div>

									<div class="top-margin">
										<label>Email Address <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="e.g. test@example.com" name="studentEmail">
									</div>

									<div class="row top-margin">
										<div class="col-sm-6">
											<label>Password <span class="text-danger">*</span></label>
											<input type="password" class="form-control">
										</div>
										<div class="col-sm-6">
											<label>Confirm Password <span class="text-danger">*</span></label>
											<input type="password" class="form-control" name="studentPassword">
										</div>
									</div>

									<hr>
									<div class="row">
										<div class="col-lg-8">
											<label class="checkbox">
												<input type="checkbox" name="terms"> 
												I've read the <a href="page_terms.html">Terms and Conditions</a>
											</label>                        
										</div>
										<div class="col-lg-4">
											<input class="btn btn-action" type="submit" name="studentRegistration" value="Register">
										</div>
									</div>
								</form>

							</div>
							<div role="tabpanel" class="tab-pane" id="mentor">
								<!-- form for mentor registration goes here-->
								<form action="#" method="POST" role="form">
									<div class="top-margin">
										<label>Full Name <span class="text-danger">*</span></label>
										<input type="text" placeholder="name" name="mentorName" class="form-control">
									</div>

									<div class="top-margin">
										<label>Email Address <span class="text-danger">*</span></label>
										<input type="text" class="form-control" placeholder="e.g. test@example.com" name="mentorEmail">
									</div>

									<div class="row top-margin">
										<div class="col-sm-6">
											<label>Password <span class="text-danger">*</span></label>
											<input type="password" class="form-control">
										</div>
										<div class="col-sm-6">
											<label>Confirm Password <span class="text-danger">*</span></label>
											<input type="password" class="form-control" name="mentorPassword">
										</div>
									</div>

									<hr>
									<div class="row">
										<div class="col-lg-8">
											<label class="checkbox">
												<input type="checkbox" name="terms"> 
												I've read the <a href="page_terms.html">Terms and Conditions</a>
											</label>                        
										</div>
										<div class="col-lg-4">
											<input class="btn btn-action" type="submit" name="mentorRegistration" value="Register">
										</div>
									</div>
								</form>
							</div>
						</div>

					</div>

				</article>
				<!-- /Article -->

			</div>
		</div>	<!-- /container -->
		

		<footer id="footer" class="top-space">

			<div class="footer1">
				<div class="container">
					<div class="row">
						
						<div class="col-md-3 widget">
							<h3 class="widget-title">Contact</h3>
							<div class="widget-body">
								<p>+918989935974<br>
									<a href="mailto:#">poorabsen@gmail.com</a><br>
									<br>
									234 Hidden Pond Road, Ashland City, TN 37015
								</p>	
							</div>
						</div>

						<div class="col-md-3 widget">
							<h3 class="widget-title">Follow me</h3>
							<div class="widget-body">
								<p class="follow-me-icons clearfix">
									<a href=""><i class="fa fa-twitter fa-2"></i></a>
									<a href=""><i class="fa fa-dribbble fa-2"></i></a>
									<a href=""><i class="fa fa-github fa-2"></i></a>
									<a href=""><i class="fa fa-facebook fa-2"></i></a>
								</p>	
							</div>
						</div>

						<div class="col-md-6 widget">
							<h3 class="widget-title">Text widget</h3>
							<div class="widget-body">
								
							</div>
						</div>

					</div> <!-- /row of widgets -->
				</div>
			</div>

			<div class="footer2">
				<div class="container">
					<div class="row">
						
						<div class="col-md-6 widget">
							<div class="widget-body">
								<p class="simplenav">
									<a href="#">Home</a> | 
									<a href="about.html">About</a> |
									<a href="sidebar-right.html">Sidebar</a> |
									<a href="contact.html">Contact</a> |
									<b><a href="signup.html">Sign up</a></b>
								</p>
							</div>
						</div>

						<div class="col-md-6 widget">
							<div class="widget-body">
								<p class="text-right">
									Copyright &copy; 2014, Your name. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
								</p>
							</div>
						</div>

					</div> <!-- /row of widgets -->
				</div>
			</div>
		</footer>	
			




		<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="assets/js/headroom.min.js"></script>
		<script src="assets/js/jQuery.headroom.min.js"></script>
		<script src="assets/js/template.js"></script>

	</body>
</html>