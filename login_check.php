<?php
	session_start();

	if ( isset($_SESSION['username']) ) {
	$message = "Already Login. Please Logout first!";
  	echo "<script type='text/javascript'>
	  alert('$message');
	  window.location.href='https://hm-php-demo.azurewebsites.net/login.php';
	  </script>";
	} 
	else {
	$servername = "127.0.0.1:51213";
	$username = "azure";
	$password = "6#vWHD_$";
	$dbname = "mydb";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM user WHERE username = '".$_POST['txtUsername']."' 
	and password = '".$_POST['txtPassword']."'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
  	// output data of each row
  	while($row = $result->fetch_assoc()) {
		$_SESSION["username"] = $row["username"];
		header("Location:https://hm-php-demo.azurewebsites.net/index.php", TRUE, 301);
  	}
	} else {
	$message = "Username and Password Incorrect!";
  	echo "<script type='text/javascript'>
	  alert('$message');
	  window.location.href='https://hm-php-demo.azurewebsites.net/login.php';
	  </script>";
	}
	}
?>