
<?php 
include("connection.php"); 
$id = $_GET['id'];

$query = "SELECT * FROM form where id = '$id'";
$data = mysqli_query($conn , $query);

$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Form</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Update Form</h2>
        <form action="#" method="POST">
            <div class="form-group">
                <label for="first-name">First Name:</label>
                <input type="text" value = "<?php echo $result['fname']; ?>" id="first-name" name="fname" required>
            </div>
            <div class="form-group">
                <label for="last-name">Last Name:</label>
                <input type="text" value = "<?php echo $result['lname']; ?>" id="last-name" name="lname" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" required><?php echo $result['address']; ?>
                </textarea>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" value = "<?php echo $result['email']; ?>" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender:</label>
                <select id="gender" name="gender" required>
                    <option value="male"
                    <?php
                        if($result['gender']== 'male'){
                            echo 'selected';
                        }
                    ?>
                    >
                        Male</option>
                    <option value="female"
                    <?php
                        if($result['gender']== 'female'){
                            echo 'selected';
                        }
                    ?>
                    >
                    Female</option>
                    <option value="other"
                    <?php
                        if($result['gender']== 'other'){
                            echo 'selected';
                        }
                    ?>
                    >
                    Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" value = "<?php echo $result['phn']; ?>" id="phone" name="phone" required>
            </div>
            <div class="form-group">
            <input type="submit" value="Update" class="btn" name="update">
            </div>
        </form>
    </div>
</body>
</html>

<?php 
 if($_POST['update'])
 {
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $address = $_POST['address'];
   $email = $_POST['email'];
   $gender = $_POST['gender'];
   $phone = $_POST['phone'];

   $query = "UPDATE form set fname ='$fname', lname ='$lname', address = '$address', email ='$email', gender = '$gender', phn = '$phone' WHERE id='$id'";

   $info = mysqli_query($conn,$query);

   if($info)
   {
    echo "Record Updated";
    ?>
          <meta http-equiv = "refresh" content = "2; url = http://localhost/crud/display.php" />

    <?php
   }else{
    echo "failed to update";
   }
 }
?>