<?php require_once("includes/sessions.php"); ?>
<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

    
      <div class="container">
        <div class="navbar navbar-inverse navbar-fixed-top">
        <a href="index.php"><img class="logo" src="img/logo.png"></a>    
          <div class="container navContent">
    	    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
    	      <span class="icon-bar"></span>
    	      <span class="icon-bar"></span>
    	      <span class="icon-bar"></span>
    	    </button>
            
            <div class="nav-collapse collapse">
              <ul class="nav navbar-nav">
                <li><a href="#">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul> 
              
              <div class="btn-group pull-right">
                <h3 class="user dopdown-toggle" data-toggle="dropdown">{$userDetails['username']}</h3>
                <ul class="dropdown-menu">
                <li><a href="userprofile.php"><span class="glyphicon glyphicon-user"></span> Settings</a></li>
                <li class="divider"></li>
                <li><a href="logout.php"><span class="glyphicon glyphicon-off"> Log Out</a></li>
                </ul>
                </div>
              
              <div class="pull-right">
              <a class="btn btn-success navbar-btn" href="login.php">Login</a>
              <a class="btn btn-info navbar-btn" href="login.php">Sign Up</a>
              </div>
            </div>
            
          </div>
          
        </div>
      </div>
    
    
    
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


    



<?php include("includes/footer.php"); ?>