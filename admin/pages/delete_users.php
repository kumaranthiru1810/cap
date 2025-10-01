<?php

include("./includes/db.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = mysqli_query($connect , "DELETE FROM user WHERE id='$id'");
    if($sql){
        echo "<script>
            alert('Deleted The User Successfully');
            window.location.href='list_users.php';
        </script>";
    }
}
?>