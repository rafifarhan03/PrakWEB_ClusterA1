<?php 
	session_start();
	if (!isset($_SESSION['user'])||(trim($_SESSION['user'])=='')) {
		header('location:index.php');
	}

	include_once('user.php');
	$user = new User();

	$sql = "SELECT * FROM user WHERE id = '".$_SESSION['user']."'";
	$row = $user->details($sql);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>PHP Login</title>
 </head>
 <body>
 	<div>
 		<h1>PHP Login</h1>
 		<div>
	 		<div>
	 			<h2>Selamat datang di Dashboard</h2>
	 			<h4>User Info:</h4>
	 			<p>Name : <?=$row['fname'];?></p>
	 			<p>Username : <?=$row['username'];?></p>
	 			<p>Name : <?=$row['password'];?></p>
	 			<a href="logout.php"><span></span>Logout</a>
	 		</div>
	 	</div>
 	</div>
 
 </body>
 </html>