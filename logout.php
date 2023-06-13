<?php
session_start();

$a=session_destroy();

if($a){
    header("Location: login.php");
}

?>
