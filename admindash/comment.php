<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="finalcomment.css" />
    <link rel="stylesheet" href="sport.css">
    <!-- <link rel="stylesheet" href="comments.css"> -->
    <title>Admin Feedback</title>
</head>

<body>
        <div class="d-flex" id="wrapper">
            <div class="bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                    <i class="fas fa-calendar me-2"></i>GCIT Sport Calendar</div>
                <div class="list-group list-group-flush my-3">
                    <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="sport.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class='fas fa-football-ball'></i>Sport</a>
                    <a href="score.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">    
                        <i class='fa fa-calendar'></i>Score</a>
                    <a href="feedback.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fas fa-comments me-2"></i>Feedback</a>
                    <a href="comment.php" class="list-group-item list-group-item-action bg-transparent text-danger second-text fw-bold">
                        <i class="fas fa-comments me-2"></i>Comment</a>
                    <a href="setting.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                        <i class="fa fa-cog" aria-hidden="true"></i>Setting</a>
                    
                    <a href="logout.php" class="list-group-item list-group-item-action bg-transparent fw-bold">
                        <i class="fas fa-power-off me-2"></i>Logout</a>        
            </div>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
                <div class="d-flex align-items-center">
                    <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                    <h2 class="fs-2 m-0">Feedback</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php 
                                session_start();
                                echo $_SESSION["username"] ;
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="setting.html">Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- <div class="side-navbar active-nav d-flex justify-content-between flex-wrap flex-column" id="sidebar">
                <ul class="nav flex-column text-white w-100">
                  <a href="#" class="nav-link h3 text-white my-2">
                    Chat
                  </a>
                  <li href="#" class="nav-link">
                    <span class="mx-2">Home</span>
                  </li>
                  <li href="#" class="nav-link">
                    <span class="mx-2">About</span>
                  </li>
                  <li href="#" class="nav-link">
                    <span class="mx-2">Contact</span>
                  </li>
                </ul> -->
                <div class="chat">
                <?php
                        include("include/includes.php");
                        if ($conn->connect_error){
                            die("Connection failed:  " . $conn->connect_error);
                        }
                        $sql = "select * from comment";
                        $result = $conn->Query($sql);
                        if(!$result){
                            die("Invalid query: ". $conn->error);
                        }
                        $even = 1;
                        while($row = $result->fetch_assoc()){
                            if($even%2!=0){
                                echo " <div class='container'><br>
                                <h5>".$row['UserName']."</h5>
                                <p>". $row['Comment']."</p>
                                <form action='deletecomment.php' method='post'>
                                <input type='hidden' name='id' value='".  $row['comment id'] ."'>
                                <th data-title='Edit'> <input type='submit' name='delete' class='btn8 btn-danger' style='margin: 15px auto; display: block; width: 15%; padding: 8px; border: 1px solid gray; border-radius: 15px; float: right;' value='Delete'></th>
                            </form>
                        <span class='time-right'>". $row['Date']." at ".$row['Time']."</span>
                        </div>";
                            } 
                            else{
                                echo"<div class='container darker'><br>
                                <h5>".$row['UserName']."</h5>
                        <p>". $row['Comment']."</p>
                        <form action='deletecomment.php' method='post'>
                                <input type='hidden' name='id' value='".  $row['comment id'] ."'>
                                <th data-title='Edit'> <input type='submit' name='delete' class='btn8 btn-danger' style='margin: 15px auto; display: block; width: 15%; padding: 8px; border: 1px solid gray; border-radius: 15px; float: right;' value='Delete'></th>
                            </form>
                        <span class='time-right'>". $row['Date']." at ".$row['Time']."</span>
                    </div>";
                            }  
                            $even++;                               
                        }
                    ?>
                </div>
            <!-- </div> -->
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
</body>

</html>