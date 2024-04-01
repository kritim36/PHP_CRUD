<?php 
include("connection.php"); 

$query = "SELECT * FROM form";
$data = mysqli_query($conn , $query);

$total = mysqli_num_rows($data);



if($total != 0)
{ 
    ?>
    <table border="1" cellspacing="7" width="100%">
        <tr>
            <th width="5%">ID</th>
            <th width="8%">First Name</th>
            <th width="8%">Last Name</th>
            <th width="20%">Address</th>
            <th width="20%">Email</th>
            <th width="10%">Gender</th>
            <th width="10%">Phone Number</th>
            <th width="19%">Operation</th>
        </tr>

    <?php
    while($result = mysqli_fetch_assoc($data))
    {
       echo "<tr>
                <td>".$result['id']."</td>
                <td>".$result['fname']."</td>
                <td>".$result['lname']."</td>
                <td>".$result['address']."</td>
                <td>".$result['email']."</td>
                <td>".$result['gender']."</td>
                <td>".$result['phn']."</td>
                <td><a href ='update.php?id=$result[id]'><input type ='submit' value ='Update' class ='update'></a>
                <a href ='delete.php?id=$result[id]'><input type ='submit' value ='Delete' class ='delete'></a></td>
       
            </tr>";
    }
}else{
    echo "no data found";
}
?>
</table>

