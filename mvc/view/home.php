<?php
  session_start();
  if (!isset($_SESSION['email'])){
      header("Location: login.php");
      //include "consultation.php";
  }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>
	</head>
	<body>
		<h1>Welcome</h1>

	</body>
</html>