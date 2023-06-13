<?php
session_start();


if (isset($_SESSION['username'])) {
    // die('asfsd');
    if ($_SESSION['type'] == 'admin') {
        
        header('Location: dashboard.php');
        exit;
    } else {
        header('Location: index.php');
        exit;
    }
} 
else {
    header('Location: login.php');
    exit;
}
?>

