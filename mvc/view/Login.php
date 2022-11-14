<?php
 session_start();
?>
<!DOCTYPE html>
<html>
<head>

    <title>Login</title>
</head>
<body>   
    <h1>login Form</h1> 
    <form action ="../controller/LoginAction.php" method="post" >
      
  <label for="email">Email:</label><br>
  <input type="email" placeholder ="Enter Email" name="email">
<?php echo isset($_SESSION['email_error_msg']) ? 
  $_SESSION['email_error_msg'] : "" ?>
  
  <br>
  
  <label for="pwd">Password:</label><br>
  <input type="password" placeholder="Password" name="pwd" >
  <?php echo isset($_SESSION['password_error_msg']) ? 
  $_SESSION['password_error_msg'] : "" ?> 
   
  
  <br><br>
  <input type="Submit" value="login">
  

</form>
<?php echo isset($_SESSION['global_error_msg']) ? 
  $_SESSION['global_error_msg'] : "" ?> 
</body>
</html>