<?php
	$servername = "127.0.0.1:51213";
	$username = "azure";
	$password = "6#vWHD_$";
	$dbname = "mydb";

	$conn = new mysqli($servername, $username, $password, $dbname);

	if ($conn->connect_error) {
  	die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT * FROM user WHERE username = '".$_POST['txtUsername']."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		$message = "Username is already used!!!";
  		echo "<script type='text/javascript'>alert('$message');
		  window.location.href='https://hm-php-demo.azurewebsites.net/register.php';
		  </script>";
	} else {
	  	$sql_insert = "INSERT INTO user (username, password) VALUES ('".$_POST['txtUsername']."','".$_POST['txtPassword']."')";
		$conn->query($sql_insert);
		$message = "Username ".$_POST['txtUsername']." register successfully";
  		echo "<script type='text/javascript'>alert('$message');
		  window.location.href='https://hm-php-demo.azurewebsites.net/index.php';
		  </script>";
	}
?>