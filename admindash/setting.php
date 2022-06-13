</i><?php 
    session_start();
?>
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
            <a href="dashboard.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold"><i
                    class="fas fa-tachometer-alt me-2"></i>Dashboard</a>
            <a href="sport.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class='fas fa-football-ball'></i>Sport</a>
            <a href="score.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">    
                <i class='fa fa-calendar'></i>Score</a>
            <a href="feedback.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-comments me-2"></i>Feedback</a>
            <a href="comment.php" class="list-group-item list-group-item-action bg-transparent second-text fw-bold">
                <i class="fas fa-comments me-2"></i>Comment</a>
            <a href="setting.php" class="list-group-item list-group-item-action bg-transparent text-danger second-text fw-bold">
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
                    <h2 class="fs-2 m-0">Setting</h2>
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
                                <i class="fas fa-user me-2"></i></i><?php 
                                echo $_SESSION["username"] ;
                                ?>
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="setting.php">Profile</a></li>
                                <!-- <li><a class="dropdown-item" href="se">Settings</a></li> -->
                                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <section style="background-color: #efdbc1;">
              <div class="container py-5">
                <div class="row">
                  <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                      <ol class="breadcrumb mb-0">
                        <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li> -->
                        <li class="breadcrumb-item active" aria-current="page">Profile Setting</li>
                      </ol>
                    </nav>
                  </div>
                </div>
            
                <div class="row">
                  <div class="col-lg-4">
                    <div class="card mb-4">
                      <div class="card-body text-center">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                          class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3"></i><?php 
                                echo $_SESSION["username"] ;
                                ?></h5>
                        <p class="text-muted mb-4">Gyalpozhing College Of Information Technology</p>
                        
                      </div>
                    </div>
                    <div class="card mb-4 mb-lg-0">
                    </div>
                  </div>
                     <div class="col-lg-8 pb-5">
                     <form action="updateprofile.php" method="post">
                        <div class="row">
                      
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="account-fn">UserName</label>
                                  <input class="form-control" type="text" id="account-fn" name="username" value="<?php 
                                echo $_SESSION["username"] ;
                                ?>" disabled="">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                  <label for="account-email">E-mail Address</label>
                                  <input class="form-control" type="email" id="account-email" value="<?php 
                                include("include/includes.php");
                                $username=$_SESSION["username"] ;
                                if ($conn->connect_error){
                                    die("Connection failed:  " . $conn->connect_error);
                                }
                                $sql = "select * from `admin register` where UserName='$username'";
                                $result = $conn->Query($sql);
                                if(!$result){
                                    die("Invalid query: ". $conn->error);
                                }
                                else{
                                    $row = $result->fetch_assoc();
                                    echo $row['Email'];
                                }
                                ?>" disabled="">
                              </div>
                          </div>
                          <div class="col-md-12">
                              <div class="form-group">
                                  <label for="account-pass">Current Password</label>
                                  <input class="form-control" type="password" id="oldpass" name="oldpass">
                              </div>
                          </div>
                          <div class="col-md-6">
                              <div class="form-group">
                                    <label for="pass">Confirm Password</label>
                                    <input id="pass"
                                        type="password"
                                        name="pass"
                                        placeholder="Enter Password"
                                        required="" style="display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">

                              </div>
                          </div>
                          <div class="col-md-6">
                                <div class="form-group">
                                        <label for="confirm_pass">Confirm Password</label>
                                        <input id="confirm_pass"
                                            type="password"
                                            name="confirm_pass"
                                            placeholder="Confirm Password"
                                            required
                                            onkeyup="validate_password()" style="display: block;
    width: 100%;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;">
                                </div>
                              </div>
                          </div>
                          <span id="wrong_pass_alert"></span>
                          <div class="d-flex justify-content-center ">
                          <button type="submit" class="btn btn-primary submit_btn" id="create" onclick="wrong_pass_alert()" style="float: right !important;">Update</button>
                          <!-- <button type="button" class="btn btn-outline-primary ms-1">Message</button> -->
                        </div>
                          <div class="col-12">
                              <hr class="mt-2 mb-3">
                              <div class="d-flex flex-wrap justify-content-between align-items-center">
                                  <!-- <div class="custom-control custom-checkbox d-block">
                                      <input class="custom-control-input" type="checkbox" id="subscribe_me" checked="">
                                      <label class="custom-control-label" for="subscribe_me">Subscribe me to Newsletter</label>
                                  </div> -->
                                  <!-- <button class="btn btn-style-1 btn-primary" type="submit" href="index.html">Update Profile</button> -->
                                  
                              </div>
                          </div>
                      
                        </div>
                      </form>
                  </div>
                      <!--  -->
                  </div>
                </div>
              </div>
            </section>
                
     

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        var el = document.getElementById("wrapper");
        var toggleButton = document.getElementById("menu-toggle");

        toggleButton.onclick = function () {
            el.classList.toggle("toggled");
        };
    </script>
    <script>
        function validate_password() {
        var pass = document.getElementById('pass').value;
        var confirm_pass = document.getElementById('confirm_pass').value;
        if (pass != confirm_pass) {
            document.getElementById('wrong_pass_alert').style.color = 'red';
            document.getElementById('wrong_pass_alert').innerHTML
                = '☒ Use same password';
            document.getElementById('create').disabled = true;
            document.getElementById('create').style.opacity = (0.4);
        } else {
            document.getElementById('wrong_pass_alert').style.color = 'green';
            document.getElementById('wrong_pass_alert').innerHTML =
                '🗹 Password Matched';
            document.getElementById('create').disabled = false;
            document.getElementById('create').style.opacity = (1);
        }
        }

        function wrong_pass_alert() {
        if (document.getElementById('pass').value != "" &&
            document.getElementById('confirm_pass').value != "") {
            alert("Your response is submitted");
        } else {
            alert("Please fill all the fields");
        }
        }
    </script>
</body>

</html>