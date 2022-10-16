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
    <link rel="stylesheet" href="login.css">

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/87df3b84c4.js" crossorigin="anonymous"></script>

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
                            <a href="forms.php">Post a job</a>
                            <a href="jobs.php">View jobs</a>
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
  
    <div class="wrapper">
        <div class="login-text">
          <button class="cta"><i class="fas fa-chevron-down fa-1x"></i></button>
          <div class="text">
            <a href="">Login</a>
            <hr>
            <!-- <br> -->
            <input type="text" placeholder="Username">
            <br>
            <input type="password" placeholder="Password">
            <br>
            <button class="login-btn">Log In</button>
          </div>
        </div>
        <div class="call-text">
          <button>Join your college buddy</button>
        </div>
      
      </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <script src="login.js"></script>
</body>

</html>