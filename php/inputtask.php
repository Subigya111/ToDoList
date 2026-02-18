<?php
include 'db_connection.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/userdata.css">
    <title>Create task</title>
</head>
<body>
    <div class="welcome-heading">
     <a href ="logout.php">
        -Welcome, <?php echo $_SESSION['username']; ?>!!
    </a>
    </div>
    <div class="task-container">
        <h1>Create Task</h1>
        <form action="viewtask.php" method="POST">
            <div class="task">
                <label for="task">Enter your task</label>
                <input type="text" id="task" name="task" placeholder="*" required>
            </div>
            <button type="submit" name="create">Create</button>
        </form>
    </div>

</body>
</html>



