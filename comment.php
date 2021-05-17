<?php
	session_start();
	if(empty($_SESSION["username"])){
		$message = "Please Login First!!!";
	 	echo "<script type='text/javascript'>
	  		alert('$message');
	  		window.location.href='https://hm-php-demo.azurewebsites.net/login.php';
	  		</script>";
	}
	else{
		$servername = "127.0.0.1:51213";
		$username = "azure";
		$password = "6#vWHD_$";
		$dbname = "mydb";
	
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
	 		die("Connection failed: " . $conn->connect_error);
		}
		$sql_insert = "INSERT INTO comment (noodle_no, username, text, date) VALUES ('".$_SESSION['number']."','".$_SESSION["username"].
			"','".$_POST['message']."', DATE_ADD(CURRENT_TIMESTAMP, INTERVAL 7 HOUR))";
		$conn->query($sql_insert);
		$message = "User ".$_SESSION["username"]." comment successfully";
  		echo "<script type='text/javascript'>alert('$message');
		  window.history.back();
		  </script>";
	}
?>