<?php
require './connection.php';
session_start();

$msg="";

if (isset($_POST['login']))
{
   
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    

    $user= $conn->query($sql);
    if ($user->num_rows>0){
      $user=$user->fetch_assoc();
      // session_start();
      $_SESSION['username']=$user['username'];
      $_SESSION['type']=$user['type'];
      // print_r($user);
      header("Location: redirect.php");
    }
    else{
      $msg='<label for="" class="text-danger">Invalid credentials<label>';
      header('Location:login.php?msg='.$msg);
    }
   
}
if (isset($_POST['register'])){
  header("Location: registration.php");
  exit;
}




?>