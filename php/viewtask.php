<?php
include 'db_connection.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/viewtask.css">
    <title>View Task</title>
</head>
<body>
     <a href ="logout.php">
        -Welcome, <?php echo $_SESSION['username']; ?>!!
    </a>
    <marquee scrollamount="15"> Your task was created successfully!!</marquee>
    
    <div class="login-container">
        <?php
    if(isset($_POST['create'])){
    $task=$_POST['task'];
    $sql="INSERT INTO tasks(task) VALUES('$task')";
    $result=mysqli_query($connection,$sql);
    if (!$result){
        echo "Error: " . mysqli_error($connection);
    }
    }
    $fetch="SELECT id,task FROM tasks ORDER BY id DESC LIMIT 1 ";
    $data=mysqli_query($connection,$fetch);
    if(mysqli_num_rows($data)>0){
        $task=mysqli_fetch_assoc($data);
        $_SESSION['task']=$task['task'];
        $_SESSION['id']=$task['id'];
        
    }
    ?>
        <form action="edit.php" method="POST">  
            Task : <?php echo $task['task'];?>
            <br><br>
            <button type="submit" name="edit">Edit </button>
        </form>
            <form action="delete.php" method="POST">      
            <br><br>
            <button type="submit" name="delete" onclick="return confirm('Are you sure you want to delete?')">Delete </button>
        </form>
        <br>

    
</body>
</html>
