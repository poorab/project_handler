<HTML><HEAD><TITLE>.:::: Powered By Ludarubma ::::.</TITLE></HEAD><!DOCTYPE html>
<?php
  require 'database_connection.php';
?>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport"    content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
  
  <title>ProjectHandler</title>

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
<!-- Fixed navbar -->
  <div class="navbar navbar-inverse navbar-fixed-top headroom" >
    <div class="container">
      <div class="navbar-header">
        <!-- Button for smallest screens -->
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon- bar"></span> <span class="icon-bar"></span> </button>
        <a class="navbar-brand" href="index.html"><img src="assets/images/3.png"   style="margin:-20px; padding:0px 0px 40px 0px;" alt="Progressus HTML5 template"></a>       
      </div>
      <!--    drop down or logout-->


     <!-- <nav class="navbar navbar-default navbar-static-top navbar-inverse" role="navigation">-->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
        </div>
  
    <div class="collapse navbar-collapse navbar-ex1-collapse">
      
      <ul class="nav navbar-nav">
        <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Projects <b class="caret"></b></a>
    <ul class="dropdown-menu">
      
      
      <li><a href="/5859381216280576">ProjectHandler</a></li>
      
      
    </ul>
        </li>
      
      </ul>
      <ul class="nav navbar-nav navbar-right">
                <li><a href="/settings" title="Settings"><span class="glyphicon glyphicon-wrench"></span></a></li>
        <li><a href="/logout" title="Logout"><span class="glyphicon glyphicon-log-out"></span></a></li>
      </ul>
      
    </div>
  </div>
      </nav>
</div>
</div>
      <!--project_status-->

<br><br><br><br><br>

    
 <div class="col-sm-3" data-step="2" data-intro="You have several sections inside each project. Each section has a different purpose.">
      <div class="well">
  <ul class="nav nav-pills nav-stacked" id="project-menu" aria-label="Project menu">
    <li class="active"><a href="#"><span class="glyphicon glyphicon-plane"></span> profile</a></li>
    <li class=""><a href="overview.html"><span class="glyphicon glyphicon-file"></span> Overview</a></li>
    <li class=""><a href="documents.html"><span class="glyphicon glyphicon-align-justify"></span> Documents</a></li>
    <li class=""><a href="code.html"><span class="glyphicon glyphicon-stats"></span> Code</a></li>
    <li class=""><a href="noticeboard.html"><span class="glyphicon glyphicon-book"></span> Noticeboard </a></li>
       <li class=""><a href="setting.html"><span class="glyphicon glyphicon-folder-open"></span> Setting</a></li>
  </ul>
      </div>
      <div class="text-left"></div>
    </div>

  </div>
</div>
    </div>
</div>

<!--new project-->
<br>
 <h3><font color="blue">"Project Name" </h3></font> 
 <div class=""><a class="btn btn-success pull-right" href="/new_project"><span class="glyphicon glyphicon-plus"></span> New project</a></div>
      
    </div>


<!--new project-->
      <?php
        $username=$_POST["username"];
        $password=$_POST["userpassword"];
        if(isset($_POST["username"]))
        {
          if (!empty($username)) {
            # code...
            if (isset($_POST["userpassword"])) {
              # code...
              if (!empty($password)) {
                # code...
                $query_run=mysqli_query($con, "select * from register where email = '$username' AND password = '$password'") or die("Error in select query");
                $query_row=mysqli_fetch_assoc($query_run);
              }
            }
          }
        }
      ?>







   

    <article class="col-sm-9 maincontent">
        <header class="page-header">
          <h4 class="page-title"><font color="blue">"Project  Member" "Project Mentor"</h4></font>  
        </header>
        
        <p>
          current status of "Project_name"
        </p>
        <br>
          <form action="projectstatus.php" method="POST">
            <div class="row">
              <div class="col-sm-10">
                <textarea placeholder="Type your Project status  here..." class="form-control" rows="4" name="project_status"></textarea>
              </div>
            </div>
            <br>
            <div class="col-sm-9 text-right">
                
              
                <input class="btn btn-action" type="submit" value="Update Status">
              </div>
            </div>
          </article>
            
      




  <!--Social links. @TODO: replace by link/instructions in template -->
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br> <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <br><br><br><br><br>
  <article class="col-sm-15 maincontent">
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
                Copyright &copy; 2014, <b>ProjectHandler </b>
              </p>
            </div>
          </div>

        </div> <!-- /row of widgets -->
      </div>
    </div>
   </article>
  </footer> 
    




  <!-- JavaScript libs are placed at the end of the document so the pages load faster -->
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/headroom.min.js"></script>
  <script src="assets/js/jQuery.headroom.min.js"></script>
  <script src="assets/js/template.js"></script>
  
  <!-- Google Maps -->
  <script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
  <script src="assets/js/google-map.js"></script>
  

</body>
</html>