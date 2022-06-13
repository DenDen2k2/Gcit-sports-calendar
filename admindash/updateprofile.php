<?php
    session_start();
    $oldpass = $_POST['oldpass'];
    $newpass = $_POST['pass'];
    $username = $_SESSION["username"];
    //database connection
    include("include/includes.php");
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $sql="select * from `admin register` WHERE UserName = '$username' and Password = '$oldpass'";
        $result=mysqli_query($conn,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num==0 || $num>1){
                echo '<script> alert("wrong password/username"); </script>';
                header("Location: setting.php", true, 301);
            }
            else{
                $sql1= mysqli_query($conn,"update `admin register` set Password = '$newpass' WHERE UserName='$username' and Password='$oldpass';");
                $row= mysqli_fetch_array($sql1);
                echo '<script> alert("Password changed"); </script>';
                header("Location: setting.php", true, 301);
                exit(); 
            }
        }
    }
?>