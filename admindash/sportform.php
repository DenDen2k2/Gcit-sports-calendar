
<?php
    session_start();
    $teama = $_POST['Team_a'];
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
            $stmt = $conn->prepare("insert into `sports`(`Team A`,`Team B`,Referee,Date,Time,Type)values(?,?,?,?,?,?)");
            $stmt->bind_param("ssssss",$teama,$teamb,$referee,$date,$time,$type);
            $stmt->execute();
            $stmt->close();
            $conn->close();
            header("Location: sport.php", true, 301);
            }
        else{
            die("Invalid query: ". $conn->error);
        }
    } 
?>

