<?php
if (isset($_POST['submit'])) { 
		$servername = "127.0.0.1:51213";
		$username = "azure";
		$password = "6#vWHD_$";
		$dbname = "mydb";
	
		$conn = new mysqli($servername, $username, $password, $dbname);
	
		if ($conn->connect_error) {
	 		die("Connection failed: " . $conn->connect_error);
		}
		$sql_insert = "INSERT INTO contact (fullname, email, message) VALUES ('".$_POST['name']."','".$_POST["email"].
			"','".$_POST['message']."')";
		$conn->query($sql_insert);
		$message = $_SESSION["username"]." send contact and message successfully";
  		echo "<script type='text/javascript'>alert('$message');
		  window.history.back();
		  </script>";
}
?>