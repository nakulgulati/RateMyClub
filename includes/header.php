<?php ob_start();
	date_default_timezone_set("Asia/Calcutta");
?>
<?php
    $title = "";
    $self = $_SERVER['PHP_SELF'];
    
    if(strpos($self,"index.php")){
	$title = "";
    }
    elseif(strpos($self,"about.php")){
	$title = " - About";
    }
    elseif(strpos($self,"login.php")){
	$title = " - Login";
    }
    elseif(strpos($self,"signup.php")){
	$title = " - Sign Up";
    }
?>


<!DOCTYPE html>
<html lang="en">
    <head>
	<title><?php echo NAME; ?><?php echo $title; ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
		
	<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="assets/images/favicon.ico" type="image/x-icon">
    
	<!--stylesheets-->
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<link href="css/bootstrap-glyphicons.css" rel="stylesheet" media="screen">
	<link rel="stylesheet" type="text/css" href="css/custom.css">
	<link rel="stylesheet" type="text/css" href="css/customFonts.css">
	<link rel="stylesheet" type="text/css" href="css/typeahead.js-bootstrap.css">
	<link href='http://fonts.googleapis.com/css?family=Racing+Sans+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Joti+One' rel='stylesheet' type='text/css'>
	<link href="assets/social-buttons/css/zocial.css" rel='stylesheet' type='text/css'>
	    
    </head>	
    <body>