<?php  
include 'db_connection.php';

if (($_SERVER['REQUEST_METHOD']==="POST")&&(isset($_POST['signin']))){

    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $hashed_password=password_hash($password, PASSWORD_DEFAULT);
    $sql="INSERT INTO user(username, email, password) VALUES('$username','$email','$hashed_password')";

    if (mysqli_query($connection,$sql)===TRUE){
        header("Location: ../html/login.html");
        exit();

    }
    else {
        echo "Error: ".mysqli_error($connection);
    }
    mysqli_close($connection); 
}
?>
