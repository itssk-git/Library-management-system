
<?php
require './connection.php';


if (isset($_POST['register']))
{
    $name=$_POST['name']; 
    $email=$_POST['email'];
    $address=$_POST['address'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    
    

    $sql="INSERT INTO users VALUES('','$name','$email','$address','$username','$password','user')";
    if($password!==$cpassword){
        die('Password mismatch');
    }

    if(!$conn->query($sql)){
        echo "error".$conn->$conn_error;

    }

   

   
    
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
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="fname" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Address</label>
                <input type="text" name="address" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Email</label>
                <input type="text" name="email" class="form-control">
            </div>
           
            <div class="form-group mb-3">
            <label for="">Username</label>
                <input type="text" name="username" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for="">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for=""> Confirm Password</label>
                <input type="password" name="cpassword" class="form-control">
            </div>
            <div class="form-group mb-3">
                <label for=""></label>
                <input type="submit" name="register"  value="register" class="btn btn-primary">
            </div>
        </form>
    </div>
    </section>
    
 </div> 
 <div>
 <footer class="row"> 
    <?php
      include 'footer.php';

      ?>
    </footer> 
 </div>
 
 </body> 
 </html>