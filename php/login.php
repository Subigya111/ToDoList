<?php
include 'db_connection.php';
session_start();

if (($_SERVER['REQUEST_METHOD']==="POST")&&(isset($_POST['login']))){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT  id,username,password FROM user 
    WHERE email='$email'";
    $result=mysqli_query($connection,$sql);
    
    if(mysqli_num_rows($result)>0){
        $user=mysqli_fetch_assoc($result);
        if(password_verify($password, $user['password'])){
            $_SESSION['username']=$user['username'];
            header("Location: inputtask.php");
            exit();
        }
        else{
            echo"Invalid email or password";
        } 
    }
    mysqli_close($connection);
}
?>
