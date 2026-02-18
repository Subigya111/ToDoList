<?php
include 'db_connection.php';
session_start();
$id=$_SESSION['id'];
$delete="DELETE FROM tasks WHERE id='$id'";
$result=mysqli_query($connection,$delete);
header("Location:remainingtasks.php");
exit();

?>