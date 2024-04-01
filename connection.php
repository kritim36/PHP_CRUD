<?php
//not to show the error on the browser
  //error_reporting(0); 


// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else{
//     echo " connection established";
// }


  

// $conn->close();
?>
