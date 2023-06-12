<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous"  />

</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script> 
<nav class="navbar navbar-expand-lg bg-body-tertiary"> 
    <div class="container-fluid"> 
    <a class="navbar-brand" href="#">Navbar</a> 
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
      <span class="navbar-toggler-icon"></span> 
    </button> 
    <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
      <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
        <li class="nav-item"> 
          <a class="nav-link active" aria-current="page" href="index.php">Home</a> 
        </li> 
        <li class="nav-item"> 
          <a class="nav-link" href="#">Books</a> 
        </li> 
        <li class="nav-item"> 
          <a class="nav-link" href="#">Contacts</a> 
        </li> 
        <li class="nav-item"> 
          <a class="nav-link" href="#">About Us</a> 
        </li> 
        <li class="nav-item dropdown"> 
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> 
          <i class="fa-solid fa-user" style="color: #5774a2;"></i>          </a> 

          <ul class="dropdown-menu"> 
            <?php
            if(isset($_SESSION['username'])){
                echo'<li><a class="dropdown-item" href="logout.php">Logout</a></li>';
            }
           
            else{
            echo'<li><a class="dropdown-item" href="login.php">Login</a></li>'; 
            echo'<li><a class="dropdown-item" href="registration.php">Registration</a></li>';
            }
        ?>

        
          </ul> 
        </li> 
        
        
        
      </ul> 
      <form class="d-flex" role="search"> 
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"> 
        <button class="btn btn-outline-success" type="submit">Search</button> 
      </form> 
    </div> 
  </div> 
</nav>  
</body>
</html>