

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
 

    <header class="row" >
      <?php
      include 'header.php';
      ?>
    </header> 
    <?php

    if(isset($_SESSION['username'])){
      header('location:index.php');
    }

    ?>
    
<section class="row">
    <div class="col-md-8 offset-md-2">
        <form method="post" class="m-5" action="all_action.php">
            
           
           
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
                 // echo $msg;
                ?>
                 <?php
                if(isset($_GET['msg'])){
                  echo $_GET['msg'];
                }

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

 </body> 
 </html>






