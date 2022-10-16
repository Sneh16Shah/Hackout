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
    <link rel="stylesheet" href="style.css">

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

    <section id="hero-section">
        <div class="container-fluid-hero">
            <div class="row">
                <div class="col-lg-6 hero-intro">
                    <h1><span>Welcome to CollegeBuddy</span></h1>
                    <p></p>
                    <a href="#main"><button class="btn btn-lg cta">Explore</button></a>
                </div>
                <div class="col-lg-6 hero-image pt-5 pl-5">
                    <img class="image-fluid 	.d-none .d-lg-block .d-xl-none image-width" src="Hero Image.gif"
                        alt="Hero Image">
                </div>
            </div>
        </div>
        <img class="hero-wave" src="wave.svg" alt="techify-hero-wave">
    </section>

    <section class="main" id="main"> <p class="heading">Services</p>
        <div class="container">
            <div class="card-wrapper">
                <a href="academic.php">

                <div class="card profile-two">

                    <div class="card-image profile-img--two">
                        <img src="https://s.tmimgcdn.com/scr/1200x750/66500/academic-education-logo-template_66582-original.jpg"
                            alt="profile two" height="300px" width="300px">
                    </div>
                    <div class="details jane">
                        <h2>Academics
                            <br>
                            <!-- <span class="job-title">UI Designer</span> -->
                        </h2>
                    </div>
                </div>
            </a>
            </div><!-- END box wrapper -->
            <div class="card-wrapper">
                <a href="jobs.php">
                <div class="card">

                    <div class="card-image">
                        <img src="https://banner2.cleanpng.com/20180706/bgp/kisspng-job-interview-question-business-symbol-leben-5b3f852b21f8c0.3797354115308895151392.jpg"
                            alt="profile one" height="300px" width="300px">
                    </div>

                    <div class="details">
                        <h2>Interviews
                            <br>
                            <!-- <span class="job-title">UI Developer</span> -->
                        </h2>
                    </div>
                </div>
                </a>
            </div><!-- end box wrapper -->

            <div class="card-wrapper">
                <a href="chk.php">
                <div class="card">

                    <div class="card-image">
                        <img src="https://png.pngtree.com/png-vector/20191021/ourmid/pngtree-vector-jobs-icon-png-image_1834034.jpg"
                            alt="profile one" height="300px" width="300px">
                    </div>

                    <div class="details">
                        <h2>Jobs
                            <br>
                            <!-- <span class="job-title">UI Developer</span> -->
                        </h2>
                    </div>
                </div>
                </a>
            </div><!-- end box wrapper -->



        </div><!-- END container -->
    </section>

    <section id="build-flex">
        <div class="container-fluid hack">
            <h1>Built during <a href="">#HackOut 2020</a> <span>under 48 hours.</span></h1>
        </div>
    </section>
    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <h1><a id="back-to-top" href="#go-to-top">CollegeBuddy</a></h1>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <p><a href="https://github.com/KushalBhanot/Techify/blob/master/LICENSE">GNU General Public License
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