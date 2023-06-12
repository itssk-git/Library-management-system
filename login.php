<?php
require './connection.php';
session_start();

if(isset($_SESSION['username'])){
  header('Location:index.php');
}

$msg=" ";
if (isset($_POST['login']))
{
   
    $username=$_POST['username'];
    $password=$_POST['password'];


    $sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
    

    $user= $conn->query($sql);
    if ($user->num_rows>0){
      $user=$user->fetch_assoc();
      $_SESSION['username']=$username;
      $_SESSION['name']=$user['name'];
      $_SESSION['type']=$user['type'];
      
      // print_r($user);
      header("Location: dashboard.php");
    }
    else{
      $msg='<label for="" class="text-danger">Invalid credentials<label>';
    }
   
}
if (isset($_POST['register'])){
  header("Location: registration.php");
  exit;
}

?>
<!DOCTYPE html> 
 <html lang="en"> 
 
 <head> 
    <meta charset="UTF-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Document</title> 
    
    <link href="stylef.css"   rel="stylesheet">
 </head> 
 
 <body> 
 
 <div id="main" class="container"> 
    <header class="row" >
      <?php
      include 'header.php';
      ?>
    </header> 
    
<section class="row">
    <div class="col-md-8 offset-md-2">
        <form method="post" class="m-5">
            
           
           
            <div class="form-group mb-3">
            <label for="">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
           
            <div class="form-group mb-3">
                <label for=""></label>
                <input type="submit" name="login"  value="Login" class="btn btn-primary">
                <?php
                  echo $msg;
                ?>

            </div>
            <div class="form-group mb-3">
                <label for=""></label>
                <input type="submit" name="register"  value="register" class="btn btn-primary">
            </div>
        </form>
    </div>
    </section>
    <footer class="row"> 
    <?php
      include 'footer.php';

      ?>
    </footer> 
 </div> 
 
 </body> 
 </html>



?>