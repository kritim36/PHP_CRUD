<?php
include("connection.php"); 

if($_POST['register'])
 {
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$address = $_POST['address'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];

// Insert data into database
$sql = "INSERT INTO form (fname,lname, address,email,gender,phn) VALUES ('$fname','$lname','$address', '$email','$gender', '$phone')";

if ($conn->query($sql) === TRUE) {
 echo "New record created successfully";
} else {
 echo "Error: " . $sql . "<br>" . $conn->error;
}
 }
?>