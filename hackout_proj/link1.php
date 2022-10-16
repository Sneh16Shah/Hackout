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
    <link rel="stylesheet" href="link1.css">

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
                    <a class="nav-link px-4" href="academic.php">Academics</a>
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
  
    <div class='container'>
        <div class='center list flex-column'>
          <div class='card flex-row'>
            <img src='https://thumbs.dreamstime.com/b/black-website-www-vector-icon-wireframe-globe-white-background-168880806.jpg' class='book'>
            <div class='flex-column info'>
              <div class='title'>TutorialsPoint </div>
              <div class='author'>Harper Lee</div>
              <div class='hidden bottom summary'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ratione impedit temporibus maiores autem aperiam assumenda exercitationem, quisquam nobis esse.
              </div>
            </div>
            <div class='flex-column group'>
              <div class='hidden bottom'>
                <button class='simple'>Read</button>
              </div>
            </div>
          </div>
          <div class='card flex-row'>
            <img src='https://assets.turbologo.com/blog/en/2019/10/19084944/youtube-logo-illustration.jpg' class='book'>
            <div class='flex-column info'>
              <div class='title'>Babbar Playlist</div>
              <div class='author'>Author:Love Babbar</div>
              <div class='hidden bottom summary'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ratione impedit temporibus maiores autem aperiam assumenda exercitationem, quisquam nobis esse.
              </div>
            </div>
            <div class='flex-column group'>
              <div class='hidden bottom'>
                <button class='simple'>Visit</button>
              </div>
            </div>
          </div>
          <div class='card flex-row'>
            <img src='https://assets.turbologo.com/blog/en/2019/10/19084944/youtube-logo-illustration.jpg' class='book'>
            <div class='flex-column info'>
              <div class='title'>GateSmashers Playlist</div>
              <div class='author'>Author: Varun Singla </div>
              <div class='hidden bottom summary'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ratione impedit temporibus maiores autem aperiam assumenda exercitationem, quisquam nobis esse.
              </div>
            </div>
            <div class='flex-column group'>
              <div class='hidden bottom'>
                <button class='simple'>Visit</button>
              </div>
            </div>
          </div>
          <div class='card flex-row'>
            <img src='https://i.pinimg.com/originals/0f/8b/28/0f8b2870896edcde8f6149fe2733faaf.jpg' class='book'>
            <div class='flex-column info'>
              <div class='title'>LeetCode</div>
              <!-- <div class='author'>F Scott Fitzgerald</div> -->
              <div class='hidden bottom summary'>
                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod ratione impedit temporibus maiores autem aperiam assumenda exercitationem, quisquam nobis esse.
              </div>
            </div>
            <div class='flex-column group'>
              <div class='hidden bottom'>
                <button class='simple'>Practice</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
      <script src="link1.js"></script>
</body>

</html>