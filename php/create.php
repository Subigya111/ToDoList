<?php 
include 'db_connection.php';
session_start();

if(isset($_POST['create'])){
    $task=$_POST['task'];
    $deadline=$_POST['deadline'];
    $sql="INSERT INTO tasks(task,deadline) VALUES('$task','$deadline')";
    $result=mysqli_query($connection,$sql);
    if (!$result){
        echo "Error: " . mysqli_error($connection);
    }
    $fetch="SELECT id,task,deadline FROM tasks WHERE task='$task' AND deadline='$deadline'";
    $result1=mysqli_query($connection,$fetch);
    if(mysqli_num_rows($result1)>0){
        $data=mysqli_fetch_assoc($result1);
        $_SESSION['id']=$data['id'];
        $_SESSION['task']=$data['task'];
        $_SESSION['deadline']=$data['deadline'];
        header("Location:viewtask.php");
        exit();
    }

    mysqli_close($connection);
}