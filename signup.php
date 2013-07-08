<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>

<?php
//Prints nav bar
  $nav = printNav(false);
  echo $nav;
?>

<?php
//Form processing
$errors = array();
if(isset($_POST['submit'])){
    //Form submitted
    
    
    
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = sha1($_POST['password']);
    $verifyPassword = sha1($_POST['verifyPassword']);
    
    if(!ctype_alnum($username)){
	array_push($errors,"Username cannot contain special characters.");
    }
    
    if(strlen($password)>6){
	if($password != $verifyPassword){
	    array_push($errors,"Passwords don't match.");
	}
    }
    else{
	array_push($errors,"Password should be minimum 6 characters.");
    }
    
    if(count($errors)==0){
	$query = "INSERT INTO `users`(`username`, `email`, `hashedPass`) VALUES ('{$username}','{$email}','{$password}');";
	
	if(mysql_query($query,$connection)){
	    $message = "Sign Up success.";
	}
	else{
	    $message = "Sign Up failed.";
	}
    }
}	
else{
    //Form not submitted
}
?>


<div class="wrapper">
	<div class="container">
		<div class = "row">
			<div class = "span6">
			<!--image/text area-->
			</div>
			<div class = "span6">
			<!--form area-->
				<form class="form-horizontal" method="post" action="signup.php">
					<legend>
						Sign Up
						<span class="pull-right">(or <a href="login.php">Sign in</a>)</span>
					</legend>
					<div class="control-group">
						<label class="control-label" for="username">Username</label>
						<div class="controls">
							<input type="text" id="username" name="username" placeholder="Select a username" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="email">Email</label>
						<div class="controls">
							<input type="email" id="email" name="email" placeholder="johndoe@example.com" required>
						</div>
					</div>
					<div class="control-group">
						<label class="control-label" for="password">Password</label>
						<div class="controls">
							<input type="password" id="password" name="password" placeholder="******" required>
							<span class="help-inline">Min Length 6</span>
						</div>
					</div>
										<div class="control-group">
						<label class="control-label" for="verifyPassword">Verify Password</label>
						<div class="controls">
							<input type="password" id="verifyPassword" name="verifyPassword" placeholder="******" required>
						</div>
					</div>
					<div class="control-group">
						<div class="controls">
							<label class="checkbox"></label>
							<input type="checkbox" required> I accept the Terms and Conditions.
							<button type="submit" name ="submit" class="btn btn-info pull-right">Create Account</button>
						</div>
					</div>
				</form>
				<?php
				
				if(count($errors)){
				    print_r($errors);
				}
				
				if(isset($_POST['submit'])){
				    echo $message;
				}
				?>
			</div>
		</div>
	</div>
</div>
	    
<?php include("includes/footer.php"); ?>
