<?php
 
 session_start();
 
 if ($_SERVER['REQUEST_METHOD'] === "POST"){
 
 $email = sanitize($_POST['email']);
 $password = sanitize($_POST['password']);
  
   $isValid = true;
  
   if (empty($email)){
   	$_SESSION['email_error_msg']="Please form email correctly";
   	$isValid = false;
   }
  
  if (empty($password)){
     $_SESSION['password_error_msg']="Please form pass correctly";
     $isValid = false;

   }
   if ($isValid === true){
   	  $_SESSION['email_error_msg']="";
   	  $_SESSION['password_error_msg']="";
   	  $filename= "../model/users.json";
      $file = fopen($filename, "r");
      $fz=filesize($filename);
      if($fz>0){
        fr== fread($file, $fz);
        $users=json_decode($fr);
        $found= false;

        for($i=0;$i< count($users);$i++){
          if ($users[$i]->email===$email and $users[$i]->password
            === $password){
          $found = true;
           break;
          }
        }
        if($found===true){
          $_SESSION['email']=$email;
          header("Location: ../view/home.php");
        }
      
        else{
          $_SESSION['global_error_msg']="email password not match";
          header("Location: ../view/Login.php");
        }
       }  
      else {

        $_SESSION['global_error_msg']="contact us"; 
   }
   fclose($file);
   
  }
   else {
   	header("Location: ../view/Login.php"); 
   }

 
 }

 function sanitize($data){
 	$data=trim($data); 
 	$data=stripslashes($data);
 	$data=htmlspecialchars($data);
 	return $data;
 }
?>