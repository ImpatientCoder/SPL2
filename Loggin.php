<!DOCTYPE html>
<html>
<body>

<?php
    
    $connection = mysqli_connect('localhost', 'root', 'root', 'voter');
    
    if(isset($_POST['email']))
    {
        $email = $_POST['email'];
        $pass = md5($_POST['pass']);
        
        $sql = "SELECT* FROM user WHERE email='".$email."' AND password='".$pass."' LIMIT 1";
        $result = mysqli_query($connection, $sql);
        
        if(mysqli_num_rows($result) == 1)
        {
            $row=mysqli_fetch_array($result);
            echo "You have successfully loggin..!!! Welcome ".$row['fullname']."...!!!";
            exit();
        }
        else
        {
            echo "Invalid email or password";
            exit();
        }
    
    }
        
//to prevent my sql injection
//    $email = stripcslashes($email);
//    $pass  = stripcslashes($pass);
//    $email = mysql_real_escape_string($email);
//    $pass  = mysql_real_escape_string($pass);
//Query to the database for user.
//    $result = ("Select * From user Where email='$email' AND password = '$pass'") 
//              or die("Failed to query databas for".mysql_error());
//    
//    $row = mysql_fetch_array($result);
//    if($row[email] == $email && $row[password]==$pass)
//    {
//        echo "Loggin success!! Welcome ".$row[fullname];
//    }
//    else
//    {
//        echo "Invalid email or password";
//    }
    
?>

</body>
</html>
