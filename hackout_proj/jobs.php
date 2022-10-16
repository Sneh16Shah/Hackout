<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jobs Page</title>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="jobs.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
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
    <div class="container">
        <div class="wrap1">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <input type="text" class="searchTerm" id="company" placeholder="Company (Eg.-Google)">
                        <button type="submit" class="searchButton" onclick="search_company()">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap2">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <h3 class="txt 1"> Interview Experiences</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="wrap3">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <input type="text" class="searchTerm" id="company_que" placeholder="Company (Eg.- Google)">
                        <button type="submit" class="searchButton" onclick="search_company_questions()">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap4">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <h3 class="txt 1">Company Questions Archives</h3>

                    </div>
                </div>
            </div>
        </div>

        <div class="wrap5">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <input type="text" class="searchTerm" id="dsa_que" placeholder="DSA Topic (Eg.-Arrays)">
                        <button type="submit" class="searchButton" onclick="questions()">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap6">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <h3 class="txt 1">Topic wise DSA Practice</h3>

                    </div>
                </div>
            </div>
        </div>
        <div class="wrap7">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <input type="text" class="searchTerm" id="i_que" placeholder="Technology (Eg.-Cpp)">
                        <button type="submit" class="searchButton" onclick="i_questions()">
                            <i class="fa-solid fa-magnifying-glass"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="wrap8">
            <div class="row">
                <div class="col">
                    <div class="search">
                        <h3 class="txt 1">Technology-wise questions</h3>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <img class="hero-wave" src="wave.svg" alt="techify-hero-wave">
    <script src="script.js"></script>
</body>

</html>