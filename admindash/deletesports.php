<?php
    //database connection
    include("include/includes.php");
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $id=$_POST['id'];
        $query = "delete from sports where Id='$id'";
        $query_run = mysqli_query($conn,$query);
        if($query_run){
            echo "<script> alert('Data Deleted'); </script>";
            header("Location: sport.php", true, 301);
        }
        else{
            echo "<script> alert('Data Not Deleted'); </script>";

        }
    } 
?>

