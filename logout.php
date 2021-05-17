<?php session_start();
	session_destroy();
	$message = "Logout successfully";
	echo "<script type='text/javascript'>
	  alert('$message');
	  window.location.href='https://hm-php-demo.azurewebsites.net/index.php';
	  </script>";
?>