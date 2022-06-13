<?php
    session_start();
    $teama = $_POST['Team_a'];
    $scorea = $_POST['scorea'];
    $scoreb = $_POST['scoreb'];
    $teamb = $_POST['Team_b'];
    $referee = $_POST['Referee'];
    $type = $_POST['type'];
    $date = date('y-m-d', strtotime($_POST['date']));
    $time = $_POST['time'];
    //database connection
    include("include/includes.php");
    if($conn->connect_error){
        die('Connection Failed  : '.$conn->connect_error);
    }else{
        $sql="Select * from sports";
        $result=mysqli_query($conn,$sql);
        if($result){      
            $stmt = $conn->prepare("insert into `score`(`Team A`,`Team B`,Referee,Date,Time,Type,`Team A Score`,`Team B Score`)values(?,?,?,?,?,?,?,?)");
            $stmt->bind_param("ssssssii",$teama,$teamb,$referee,$date,$time,$type,$scorea,$scoreb);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header("Location: score.php", true, 301);
            }
        else{
            die("Invalid query: ". $conn->error);
        }
    } 
?>
