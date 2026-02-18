<?php
include 'db_connection.php';
session_start();

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $updatetask = $_POST['updatetask'];
    $sql = "UPDATE tasks SET task='$updatetask' WHERE id='$id' ";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        header("Location: viewtask.php");
        exit();
    } else {
        echo "Error updating task: " . mysqli_error($connection);
    }
}   


mysqli_close($connection);
?>
