<?php
include 'db_connection.php';
$remain="SELECT * FROM tasks";
$data=mysqli_query($connection,$remain);
    if(mysqli_num_rows($data)>0){
        while($taskremain=mysqli_fetch_assoc($data)){
            echo var_dump($taskremain);
            echo "<br>";
        }
    }
    else{
        echo "You have no tasks remaining";
    }
    ?>