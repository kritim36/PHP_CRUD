<?php
include("connection.php");
$id = $_GET['id'];

$query = "DELETE FROM form WHERE id ='$id' ";
$data = mysqli_query($conn,$query);

if($data){
    echo "Data Deleted";
}else{
    echo "Failed to delete";
}
?>