<?php
require ('core/init.php');

if (empty($_POST) === false) {
 
	$accessKey = trim($_POST['key']);
	
 
	if (empty($accessKey) === true ) {
		$errors[] = 'Sorry, but we need your access key for team.';
	} else {
 
		$login = $users->login($accessKey);
		if ($login === false) {
			$errors[] = 'Sorry, that accessKey is invalid';
		}else {
			// username/password is correct and the login method of the $users object returns the user's id, which is stored in $login
 
 			$_SESSION['id'] =  $login;// The user's id is now set into the user's session  in the form of $_SESSION['id']     
			echo $_SESSION['id'];
			if(isset($_SESSION['id']))
			{
			#Redirect the user team to home.php.
			header('Location: edit_home.php');
			}
			else
			{
				echo "cannot open without login";
			} 
			exit();
		}
	}
} 
?>
<html>
<head>
<title>
Login Page
</title>
<style>
 
.logincss
{
	padding-top:50;
	padding-left:100;
	padding-right:100; 
   margin-left: 300;
   border:3px solid;
   margin-right: 300;
   margin-top: -100;
   box-shadow: 5px 5px 5px #888888;
}
#login_id
{
	margin-left: 100;
}
</style>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="./js/bootstrap.min.js"></script>
<link rel="stylesheet" href="./css/homepagecss.css">
<div id="heading">
<!--<div class="container">
<ul class="nav nav-tabs" role="tablist" id="my-tabs">
	<li class="active"><button type="button" class="btn btn-info" id="aboutbtn">About</button></li>
	<li class="dropdown">
	<button ="button" class="btn btn-info" data-toggle="dropdown" >Departments<span class="caret"></span></button>
	<ul class="dropdown-menu" role="menu">
	<li><a href="#">ECE</a></li>
	<li><a href="#">CSE</a></li>
	<li><a href="#">PRODUCTION</a></li>
	<li><a href="#">CHEMICAL</a></li>
	</ul>
	</li>-->
	<!--<li class="dropdown">
		<button ="button" class="btn btn-info" data-toggle="dropdown">Events<span class="caret"></span></button>
		<ul class="dropdown-menu" role="menu">
			<li><a href="#">calender</a></li>
			<li><a href="#">fviuegfyeiy</a></li>
		</ul>
	</li>
	<li class="active"><button="button" class="btn btn-info" id="contactbtn">INDEX</button></li>
	</ul>

	</div>-->	
</div>
<body>
<section class="logincss"> 
<?php if(empty($errors)==false)
{
	echo '<p style="color:red">'.implode('</p><p>',$errors).'</p>';
} ?> 
<form name="login" action="" method="post" accept-charset="utf-8">  
  <fieldset>    
      	<legend style="color:#5bc0de"> ADMIN LOGIN</legend>
      	<br>
      	<br>
       <label for="password" style="color:#5bc0de">ACCESS KEY:</label>&nbsp&nbsp<input  type="password"  id="accesskey"name="key" placeholder="accesskey" required> 
       <br>
       <br> 
<input type="submit" style="margin-left:150;background-color:#5bc0de;color:white" value="Login" id="login_id" name="login"> 
</fieldset>
</form>  

</section>  

</body>
</head>
</html> 