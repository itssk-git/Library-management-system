<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "library_management_system";

// Create a connection
$conn = new mysqli($host, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
//   echo "Connection successfull";

// Perform database operations...

// Close the connection
// $conn->close();




