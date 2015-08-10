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
	?>
	<head>

	</head>

	<body>

		<h1>succefuly logged in</h1>
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