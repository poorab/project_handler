<?php

	if ($currentFile == "/project_handler/studentProfile.php") {
		$currentFile = "/project_handler/login.php";
	}
	elseif ($currentFile == "/project_handler/mentorProfile.php") {
		$currentFile = "/project_handler/login.php";
	}

	if(isset($_POST['loginButton'])) {
		# code...
		if(isset($_POST['username']) and isset($_POST['password'])){
			$userName = $_POST['username']; 
			$password = $_POST['password'];
			$passwordHash = $password; 
			//check if username and password are not empty
			if(!empty($userName) and !empty($passwordHash)){
				//query to select username password from database
				$result = mysqli_query($con,"Select * from user_info where `user_name` ='".$userName."' AND `password` = '".$passwordHash."'") or die(mysqli_error($con));
			
				if ($result) {
					# compute the number of rows returned from query execution
					$queryNumRows = mysqli_num_rows($result);
					if ($queryNumRows == 0) {
						# check if username/password wrong 
						echo " <center> <h3> Invalid Username/Password Combination </h3> </center>";
					}
					elseif ($queryNumRows == 1) {
						# get data retrieved from sucessful exection of query
						$row = mysqli_fetch_array($result);
						
						#check if username/password combination is correct
						if($row['user_name']==$userName and $row['password']==$passwordHash){
							$_SESSION['username'] = $userName;
							header('location:'.$currentFile);	#return back to index page
						}
					}
				}
				else{
					echo " <center> <h3> Invalid Username/Password Combination </h3> </center>";
				}
				mysqli_close($con);
			}
		}
	}
?>


	<br>
	<!-- User login form starts here-->
	<form class="container" action="<?php echo $currentFile; ?>" method="post" id="loginForm">
        
        <div class="row">

            <div class="container"><br>
                <form class="form-signin" role="form" action="<?php echo $currentFile; ?>" name="loginForm" method="post">
        			<h2 class="form-signin-heading">Please sign in</h2>
        			<label>Username </label><input type="email" class="form-control" placeholder="Email address" required autofocus name="username">
        			<label>Password </label><input type="password" class="form-control" placeholder="Password" required name="password">
        			<label class="checkbox">
          				<input type="checkbox" value="remember-me"> Remember me
        			</label>
        			<button class="btn btn-lg btn-primary btn-block" type="submit" id="loginButton" name="loginButton">Sign in</button>
      			</form>
            </div>
        	<!-- .container -->	


        </div>
        <!-- .row -->
	</form> <!-- User login form ends here-->

	<script>
		var myElement = document.querySelector(".header");
		myElement.style.backgroundColor = "white";
	</script>