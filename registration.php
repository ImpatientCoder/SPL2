<!DOCTYPE html>
<html>
<body>

<?php
    
    $connection = mysqli_connect('localhost', 'root', 'root', 'voter');
    
    $fullname = $_POST['fullname'];
    $bd = $_POST['bd'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $nid = $_POST['nid'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    
    $sql= "INSERT INTO user (fullname, email, password, birthdate, gender, NID, contact, address) VALUES('$fullname', '$email', '$password', '$bd', '$gender', '$nid', '$contact', '$address')";
    
    if(!mysqli_query($connection, $sql))
    {
        echo "Data not inserted";
    }
    else
    {
        echo "Data inserted successfully";
    }
    
?>

</body>
</html>