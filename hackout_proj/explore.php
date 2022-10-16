<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CollegeBuddy</title>

    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- aos css -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="explore.css">

    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/9b54928ef1.js" crossorigin="anonymous"></script>
    <!-- Bootstrap scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
</head>

<body>
<nav id="go-to-top" class="navbar navbar-expand-lg selectDisable">
        <a class="navbar-brand" href="index.html">
            CollegeBuddy
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item navlink-border">
                    <a class="nav-link px-4" href="index.php">Home</a>
                </li>
                <li class="nav-item navlink-border">
                    <a class="nav-link px-4" href="academic.php">Academics</a>
                </li>
                <li class="nav-item navlink-border">
                    <!-- <a class="nav-link px-4" href="jobs.html">Jobs</a> -->
                    <div class="dropdown">
                        <button class="dropbtn">Jobs</button>
                        <div class="dropdown-content">
                            <a href="job.php">Post a job</a>
                            <a href="chk.php">View jobs</a>
                        </div>
                    </div>
                </li>
                <li class="nav-item navlink-border">
                    <a class="nav-link px-4" href="about.php">About us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link px-4" href="login.php"><button class="btn1 login-btn">Login</button></a>
                </li>
            </ul>
        </div>
    </nav>
    <section class="main">
        <div class="container">
    
            <div class="card-wrapper">
              
              <div class="card">
                
                <div class="card-image">
                  <img src="https://img.favpng.com/8/7/25/clip-art-job-hunting-career-illustration-png-favpng-YWm1E7HgbiStwvnuPdL2v3fuP.jpg" alt="profile one" height="450px" width="350px">
                </div>
        
              <div class="details">
                <h2>Job
                  <br>
                  <span class="job-title">UI Developer</span>
                </h2>
              </div>
            </div>
          </div><!-- end box wrapper --> 
            
            
        <div class="card-wrapper">
              
              <div class="card profile-two">
                
                <div class="card-image profile-img--two">
                  <img src="https://www.hupport.com/signature/wp-content/uploads/2021/10/academic.gif" alt="profile two" height="450px" width="350px">
                </div>
                <div class="details jane">
                    <h2>Academics
                      <br>
                      <span class="job-title">UI Designer</span>
                    </h2>
                </div>
            </div>
         </div><!-- END box wrapper -->
             
         </div><!-- END container -->    
    </section>
        <footer>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <h1><a id="back-to-top" href="#go-to-top">CollegeBuddy</a></h1>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <p><a href="https://github.com/KushalBhanot/Techify/blob/master/LICENSE">GNU General Public
                                License
                                v3.0</a></p>
                        <p>&#169; CollegeBuddy - 2020</p>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4">
                        <a href="https://github.com/Sneh16Shah/Hackout">
                            <i class="fab fa-github fa-3x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
</body>

</html>