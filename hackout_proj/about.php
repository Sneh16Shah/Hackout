<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
     <!-- bootstrap css -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
     integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="about.css">
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
<img class="hero-wave" src="wave2.svg" alt="techify-hero-wave">

<section>
    <div class = container class="row">

      <div class = card>
        <div class = image>
          <img href = "#" src ="sristi.jpeg">
        </div>
        <div class = content>
          <h3>Sristi Shah</h3>
          <p>E-MAIL:            sristishah1910@gmail.com               Contact no.:         9955504121</p>
        </div>
      </div>    
      <div class = card>
        <div class = image>
          <img href = "#" src ="sneh.jpeg" height="200px" width="200px">
        </div>
        <div class = content>
          <h3>Sneh Shah</h3>
          <p>E-MAIL:            snehshah1675@gmail.com               Contact no.:         9586895105</p>
        </div>
      </div>    
      <div class = card>
        <div class = image>
          <img href = "#" src ="anish.jpeg" height="200px" width="200px">
        </div>
        <div class = content>
          <h3>Anish Jain</h3>
          <p>E-MAIL:            anishj469@gmail.com                  Contact no.:         9630929761</p>
        </div>
      </div>    
      <div class = card>
        <div class = image>
          <img href = "#" src ="kaustubh.jpeg">
        </div>
        <div class = content>
          <h3>Kaustubh Kale</h3>
          <p>E-MAIL:            kaustubhkale10324@gmail.com           Contact no.:         6263944597</p>
        </div>
      </div> 
      </div>
        
    </div>
  </section>
  
  </body>
  </html>