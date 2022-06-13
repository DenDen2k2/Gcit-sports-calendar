<?php
    session_start();
    $userName = $_POST['User'];
    $password = $_POST['Pass'];

    //database connection
    include("include/includes.php");
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $sql="Select * from `admin register` where UserName='$userName' and Password='$password'";
        $result=mysqli_query($conn,$sql);
        if($result){
            $num=mysqli_num_rows($result);
            if($num==0 || $num>1){
                echo '<script> alert("wrong password/username"); </script>';
                header("Location: index.php", true, 301);
            }
            else{
                echo '<script> alert("Log In successfull"); </script>';
                $conn->close();
                $_SESSION["username"] = $userName;
                header("Location: dashboard.php", true, 301);
                exit(); 
            }
        }
    }
?>
