<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="finalcomment.css" />
    <link rel="stylesheet" href="sport.css"/>
    <!-- <link rel="stylesheet" href="comments.css"> -->
    <title>sport</title>
</head>

<body>
        <div class="d-flex" id="wrapper">
            <div class="bg-white" id="sidebar-wrapper">
                <div class="sidebar-heading text-center py-4 primary-text fs-4 fw-bold text-uppercase border-bottom">
                    <i class="fas fa-calendar me-2"></i>GCIT Sport Calendar</div>
                <div class="list-group list-group-flush my-3">
                    <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                            class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
                    <a href="sport.php" class="list-group-item list-group-item-action bg-transparent text-danger second-text fw-bold">
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
                    <h2 class="fs-2 m-0">Sport</h2>
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
            <div class="btn">
                <!-- <button class="btn-lg"> -->
                    <!-- <a href="#"> -->
                        <!-- <ul>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle second-text fw-bold" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false"></i>Edit</a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Create table</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#">Settings</a></li> -->
                                    <!-- <li><a class="dropdown-item" href="#">Delete table</a></li>
                                </ul>
                            </li>
                        </ul> -->
                    <!-- </a> -->
                <!-- </button> -->
            </div>
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
                <table class="table table-hover bg-light">
                    <thead class="thead-light">
                          <tr>
                              <th scope="col">Team A</th>
                              <th>Team B</th>
                              <th>Referee</th>
                              <th >Date</th>
                              <th >Time</th>
                              <th>
                              <input type='submit' id="button" name='delete' class='btn btn-primary' value='Add'>
                              </th>
                          </tr>
                    </thead>
                    <tbody class="bg-light">
                            <?php
                                include("include/includes.php");
                                if ($conn->connect_error){
                                    die("Connection failed:  " . $conn->connect_error);
                                }
                                $sql = "select * from sports";
                                $result = $conn->Query($sql);
                                if(!$result){
                                    die("Invalid query: ". $conn->error);
                                }
                                while($row = $result->fetch_assoc()){
                                    echo "<tr>
                                    <td data-title='Versus' scope='row'>" . $row['Team A'] . "</td>
                                    <td data-title='Team B'>" . $row['Team B'] . "</td>
                                    <td data-title='Referee'>" . $row['Referee'] . "</td>
                                    <td data-title='Date' >" . $row['Date'] . "</td>
                                    <td data-title='Time' >" . $row['Time'] . "</td>
                                    <form action='deletesports.php' method='post'>
    <input type='hidden' name='id' value='".  $row['Id'] ."'>
    <th data-title='Edit'> <input type='submit' name='delete' class='btn btn-danger' value='Delete'></th>
</form>
                                </tr> ";                                  
                                }
                            ?>          
                    </tbody>
                </table>
                <!-- <div class="bg-modal">
                    <div class="modal-content">
                        <div class="col-md-4">
                            <div class="close">+</div>
                            <form>
                                <div class="form-group">
                                    <label>Firstname</label>
                                    <input type="text" id="firstname" class="form-control " />
                                </div>
                                <div class="form-group">
                                    <label>Lastname</label>
                                    <input type="text" id="lastname" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" id="address" class="form-control" />
                                </div>
                                <center><button type="button" class="btn btn-primary" onclick="addData();">Add Data</button></center>
                            </form>
                        </div>
                    </div>
                </div> -->
            <!-- </div> -->
        </div>
    </div>
    <div class="bg-modal">
        <div class="modal-contents">
            <h1 class="form-header">Form Input </h1>
            <div class="close">+</div>    
            <form action="sportform.php" method="post">
                    <select name="Team_a" style="margin: 15px auto; display: block; width: 50%; padding: 8px; border: 1px solid gray;">
                            <option >Cs 1st Year</option>
                            <option >Cs 2nd Year</option>
                            <option >Cs 3rd Year</option>
                            <option >IT 1st Year</option>
                            <option >IT 2nd Year</option>
                            <option >IT 3rd Year</option>
                            <option >Staff</option>
                    </select>
                    <select name="Team_b" style="margin: 15px auto; display: block; width: 50%; padding: 8px; border: 1px solid gray;">
                    <option >Cs 1st Year</option>
                            <option >Cs 2nd Year</option>
                            <option >Cs 3rd Year</option>
                            <option >IT 1st Year</option>
                            <option >IT 2nd Year</option>
                            <option >IT 3rd Year</option>
                            <option >Staff</option>
                    </select>
                    <select name=type style="margin: 15px auto; display: block; width: 50%; padding: 8px; border: 1px solid gray;">
                            <option >Football</option>
                            <option >Basketball</option>
                            <option >Volleyball</option>
                    </select>           
                <input type="text" name="Referee" placeholder="Referee">
                
                <input type="date" name="date" placeholder="Date">
                <input type="time" name="time" placeholder="Time">
                <button type="submit">Submit</button>
            </form>    
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
        document.getElementById('button').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "flex";
});

document.querySelector('.close').addEventListener("click", function() {
	document.querySelector('.bg-modal').style.display = "none";
});
    </script>
    <!-- <script src="script.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
