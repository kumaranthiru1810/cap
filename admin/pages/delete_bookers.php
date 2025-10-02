<?php

    include("./includes/db.php");

        $id = $_GET['id'];

        $res = mysqli_query($connect , "DELETE FROM bookers WHERE id='$id'");
        if($res){
        echo "<script>alert('Deleted Successfully');
                window.location.href = 'list_bookers.php';
        </script>";
        }  
?>