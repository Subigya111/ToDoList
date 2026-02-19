<?php
include 'db_connection.php';
session_start();

?>
<!DOCTYPE html>
<body>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/edit.css">
    <title>Edit</title>
    <div class="welcome-heading">
     <a href ="logout.php">
        -Welcome, <?php echo $_SESSION['username']; ?>!!
    </a>
    </div>
    <div class ="update-container">
        <form action="update.php" method="post">
            <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
            <input type="text" name="updatetask" value="<?php echo $_SESSION['task'];?>">
            <button type="submit" name="update">Update</button>
        </form>
    </div>
</body>
</html>