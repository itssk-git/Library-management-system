<?php 



if(isset($_SESSION['username'])&& $_SESSION['type']='admin')//can be use by admin only
{
    header('location:login.php');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div id="main" class="container"> 
    <header class="row" >
      <?php
      include 'header.php';
      ?>
    </header> 
    
    <h1>Welcome to the Library</h1>

<h2>Menu:</h2>
<ul>
    <li><a href="books.php">View Books</a></li>
    <li><a href="borrow.php">Borrow Book</a></li>
    <li><a href="return.php">Return Book</a></li>
    <li><a href="add_book.php">Add Book</a></li>
    <li><a href="add_member.php">Add Member</a></li>
</ul>

</div>

</body>
</html>