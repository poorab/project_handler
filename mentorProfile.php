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
			
	?>

	<head>
		<meta charset="utf-8">
		<meta name="viewport"    content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
		
		<title>ProjectHandler - Free Project Management Website</title>

		<link rel="shortcut icon" href="assets/images/gt_favicon.png">
		
		<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Custom styles for our template -->
		<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
		<link rel="stylesheet" href="assets/css/main.css">

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="home">

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
						<li class="active"><a href="#">Home</a></li>
						<li><a href="about.html">About</a></li>
						<li><a href="contact.html">Notifications</a></li>
						<li><a href="includes/logout.inc.php">Logout</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div> 
		<!-- /.navbar -->	
		<br>
		<br>
		<br>
		<br>

		<div class="container">
			<?php
				$queryRun = mysqli_query($con, "SELECT * FROM `mentor_details` WHERE `email` = '$userName'");
				$queryRow = mysqli_fetch_assoc($queryRun);
				echo $queryRow['mentor_name'];

			?>

		</div>
		
		<!-- footer -->
		<footer id="footer" class="top-space">

			<div class="footer1">
				<div class="container">
					<div class="row">
						
						<div class="col-md-3 widget">
							<h3 class="widget-title">Contact</h3>
							<div class="widget-body">
								<p>+91 8989935974<br>
									<a href="mailto:#">poorabsen@gmail.com</a><br>
									<br>
									234 Hidden Pond Road, Ashland City, TN 37015
								</p>	
							</div>
						</div>

						<div class="col-md-3 widget">
							<h3 class="widget-title">Follow me</h3>
							<div class="widget-body">
								<p class="follow-me-icons">
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
								<!--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, dolores, quibusdam architecto voluptatem amet fugiat nesciunt placeat provident cumque accusamus itaque voluptate modi quidem dolore optio velit hic iusto vero praesentium repellat commodi ad id expedita cupiditate repellendus possimus unde?</p>
								<p>Eius consequatur nihil quibusdam! Laborum, rerum, quis, inventore ipsa autem repellat provident assumenda labore soluta minima alias temporibus facere distinctio quas adipisci nam sunt explicabo officia tenetur at ea quos doloribus dolorum voluptate reprehenderit architecto sint libero illo et hic.</p>
							</div>
						</div>

					</div> <!-- /row of widgets -->
				</div>
			</div>
		</footer>
		<!-- /footer -->
	<?php
    } #End of LoggedIn function
    else{
        #redired to loginform if not loggedIn
        include 'includes/login/loginform.inc.php' ;
    }
	?>
	</body>

</html>
