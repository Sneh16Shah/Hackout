<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="job.css">
    <script src="https://kit.fontawesome.com/87df3b84c4.js" crossorigin="anonymous"></script>

</head>
<body>
  <nav id="go-to-top" class="navbar navbar-expand-lg selectDisable">
    <a class="navbar-brand" href="index.php">
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
                <a class="nav-link px-4" href="demo.php">Academics</a>
            </li>
            <li class="nav-item navlink-border">
                <!-- <a class="nav-link px-4" href="jobs.php">Jobs</a> -->
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
<!-- <img class="hero-wave" src="wave2.svg" alt="techify-hero-wave"> -->
    <div class="heading">
      <br>
        <h2 class="heading">FORM</h2>
    </div>
    <div class="container">
        <form action="chk.php" method="POST">
          <div class="row">
            <h4>Job Description</h4>
            <div class="input-group input-group-icon">
              <input type="text" name="job_role" placeholder="Job Role"/>
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" name="job_desc" placeholder="Job Description"/>
              <div class="input-icon"><i class="fa-solid fa-briefcase"></i></div>
            </div>
            
          </div>
          <div class="row">
            <div class="col-half">
              <h4>Joining Date</h4>
              <div class="input-group">
                <div class="col">
                  <input type="date" name="join_date" placeholder="DD-MM-YYYY">
                </div>
              </div>  
            </div>
            <div class="col-half">
              <h4>Tenure</h4>
              <div >
                <div class="input-group input-group-icon">
                  <input type="number" name="tenure" placeholder="Tenure (months)"/>
                  <div class="input-icon"><i class="fa-solid fa-business-time"></i></div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <h4>More Details</h4>
            <div class="col-half">
            <div class="input-group input-group-icon">
              <input type="text" name="location" placeholder="Location"/>
              <div class="input-icon"><i class="fa-solid fa-location-dot"></i></div>
              <!-- <div class="input-icon"><i class="fa fa-credit-card"></i></div> -->
            </div>
            </div>
            <div class="col-half">
              <div class="input-group input-group-icon">
                <input type="number" name="salary" placeholder="Salary"/>
                <div class="input-icon"><i class="fa-solid fa-indian-rupee-sign"></i></div>
                <!-- <div class="input-icon"><i class="fa fa-user"></i></div> -->
              </div>
            </div>
            
          </div>
          <h4>Contact Details</h4>
          <div class="col-third">
            <div class="input-group input-group-icon">
                <input type="text" name="name" placeholder="Full Name"/>
                <div class="input-icon"><i class="fa fa-user"></i></div>
              </div>
          </div>
          <div class="col-third">
            <div class="input-group input-group-icon">
              <input type="email" name="name" placeholder="Email Address"/>
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>
          </div>
          <div class="col-third">
            <div class="input-group input-group-icon">
              <input type="number" name="mobile" placeholder="Mobile Number"/>
              <div class="input-icon"><i class="fa-solid fa-phone"></i></div>
              <!-- <div class="input-icon"><i class="fa fa-envelope"></i></div> -->
            </div>
          </div>
            
          <div class="row text-center">
            <!-- <h4>Terms and Conditions</h4> -->
            <div class="input-group">
              <input id="terms" type="checkbox"/>
              <label for="terms">I assure that this job information is completely true .</label>
            </div>
          </div>
          <div>
          <button type="button">Submit</button>
          </div>
        </form>
      </div>
</body>
</html>