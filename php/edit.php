<?php
include 'db_connection.php';
session_start();

?>
<!DOCTYPE html>
<body>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_SESSION['id'];?>">
        <input type="text" name="updatetask" value="<?php echo $_SESSION['task'];?>">
        <button type="submit" name="update">Update</button>
    </form>
</body>
</html>