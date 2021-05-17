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
		$sql_update = "UPDATE comment SET text = '".$_POST['edit_message']."' WHERE id =".$_POST['comment_id'];
		$conn->query($sql_update);
		$message = "User ".$_SESSION["username"]." edit comment ".$_POST['comment_id']." successfully";
  		echo "<script type='text/javascript'>alert('$message');
		  window.history.back();
		  </script>";
	}
?>