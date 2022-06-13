


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="sport.css">
    <!-- <link rel="stylesheet" href="comments.css"> -->
    <title>Admin Dashboard</title>
</head>

<body>
    <div class="d-flex" id="wrapper">
        <div class="bg-white" id="sidebar-wrapper">
            <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                <i class="fas fa-calendar me-2"></i>GCIT Sport Calendar</div>
            <div class="list-group list-group-flush my-3">
                <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent text-danger second-text fw-bold"><i
                        class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                <a href="sport.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class='fas fa-football-ball'></i>Sport</a>
                <a href="score.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">    
                    <i class='fa fa-calendar'></i>Score</a>
                <a href="feedback.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                    <i class="fas fa-comments me-2"></i>Feedback</a>
                <a href="comment.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
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
                    <h2 class="fs-2 m-0">Dashboard</h2>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item dropdown">
                            <!-- <div class="comm">
                                <a class="nav-link second-text fw-bold" href="finalcomment.html"><i class="fas fa-comment-alt"></i>Comment</a>
                            </div> -->
                            <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="fas fa-user me-2"></i><?php 
                                session_start();
                                echo $_SESSION["username"] ;
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="setting.html">Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="se">Settings</a></li> -->
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
                
                <div class="row g-3 my-2">
                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">34</h3>
                                <p class="fs-5">RecentUpload</p>
                            </div>
                            <i class="fa fa-upload fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
                                    <?php
                                    include("include/includes.php");
                                    if ($conn->connect_error){
                                        die("Connection failed:  " . $conn->connect_error);
                                    }
                                    $sql = "select * from visitor";
                                    $result = $conn->Query($sql);
                                    if(!$result){
                                        die("Invalid query: ". $conn->error);
                                    }
                                    $rowcoun = mysqli_num_rows( $result );
                                    echo $rowcoun;
                                    ?>
                                </h3>
                                <p class="fs-5">Visitors</p>
                            </div>
                            <i
                                class="fa fa-user fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2">
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
                                    $rowcount = mysqli_num_rows( $result );
                                    echo $rowcount ;
                                    ?>
                                    </h3>
                                <p class="fs-5">Comments</p>
                            </div>
                            <i class="fas fa-comments fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="p-3 bg-white shadow-sm d-flex justify-content-around align-items-center rounded">
                            <div>
                                <h3 class="fs-2"><?php
                                    include("include/includes.php");
                                    if ($conn->connect_error){
                                        die("Connection failed:  " . $conn->connect_error);
                                    }
                                    $sql = "select * from feedback";
                                    $result = $conn->Query($sql);
                                    if(!$result){
                                        die("Invalid query: ". $conn->error);
                                    }
                                    $rowcount = mysqli_num_rows( $result );
                                    echo $rowcount 
                                    ?></h3>
                                <p class=" fs-5" href="">Feedback</p>
                            </div>
                            <i class="fas fa-comment-alt fs-1 primary-text border rounded-full secondary-bg p-3"></i>
                        </div>
                    </div>
                </div>
                
                <div class="row my-5">
                    <div class="header_fixed">
                        <table class="table table-hover text-nowrap">
                            <thead>
                                <tr>
                                    <th>S No.</th>
                                    <th>Username</th>
                                    <th>Email</th>
                                    <th>Joined</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                $SNO = 1;
                                include("include/includes.php");
                                if ($conn->connect_error){
                                    die("Connection failed:  " . $conn->connect_error);
                                }
                                $sql = "select * from `user register`";
                                $result = $conn->Query($sql);
                                if(!$result){
                                    die("Invalid query: ". $conn->error);
                                }
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>
                                        <td>" . $SNO . "</td>
                                        <td>" . $row["UserName"] . "</td>
                                        <td>" . $row["Email"] . "</td>
                                        <td>" . $row["JoinDate"] . "</td>";    
                                    $SNO++;                              
                                }
                            ?> 
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- /#page-content-wrapper -->
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