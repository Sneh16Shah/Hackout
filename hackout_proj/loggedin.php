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
    <!-- <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" /> -->
    <!-- custom stylesheet -->
    <link rel="stylesheet" href="style.css">

    <!-- Font awesome -->
    <!-- <script src="https://kit.fontawesome.com/9b54928ef1.js" crossorigin="anonymous"></script> -->
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
    <link rel="stylesheet" href="ff.css">
    <!-- <script src="https://kit.fontawesome.com/87df3b84c4.js" crossorigin="anonymous"></script> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->
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
                    <a class="nav-link px-4" href="about.php">Abouts</a>
                </li>
                <li class="nav-item navlink-border">
                    <a class="nav-link px-4" href="demo.php">Academics</a>
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
                <li class="nav-item">
                    <a class="nav-link px-4" href="forms.php"><button class="btn login-btn">Login</button></a>
                </li>
            </ul>
        </div>
    </nav>
<?php
    $connection=mysqli_connect("localhost","root");
    mysqli_select_db($connection,"hackout");
    // $un=$_POST("username");
    // $p=$_POST("password");
    // $job_role=$_POST["job_role"];
    // $job_desc=$_POST["job_desc"];
    // $join_date=$_POST["join_date"];
    // $tenure=$_POST["tenure"];
    // $location=$_POST["location"];
    // $salary=$_POST["salary"];
    // $name=$_POST["name"];
    // $email=$_POST["email"];
    // $mobile=$_POST["mobile"];
    $jkl="delete from job where join_date< SYSDATE()";
    mysqli_query($connection,$jkl);
    $qry="select* from job";
    $arr=mysqli_query($connection,$qry);
    echo "<br>";
    while($row=mysqli_fetch_array($arr))
    {   
        echo '<div class="sgp">';
        // echo $row['job_role'];
        // echo "<u>";
        echo "<span>Job role - </span>";
        echo $row['job_role'];
        // echo "</u>";
        echo "<br>";
        echo "<span>Job desc - </span>";
        echo $row['job_desc'];
        echo "<br><span> Joining date - </span>";
        echo $row['join_date'];
        echo "<br><span> Tenure - </span>";
        echo $row['tenure'];
        echo " months<br><span> Location - </span>";
        echo $row['location'];
        echo " <br><span> Salary - </span>";
        echo $row['salary'];
        echo "Rs <br><span>Name - </span>";
        echo $row['name'];
        echo " <br><span>Email - </span>";
        echo $row['email'];
        echo "<br><span> Mobile - </span>";
        echo $row['mobile'];
        $link="http://localhost/hackout/readmore.php";
            $jr=$row['job_role'];
            // echo "<td><a href=$link?job_role='$jr'>Read More</a> </td>";
            // $readmore="http://localhost/hackout/readmore.php";
            // $od=$row['order_id'];
            // $tot=$row['Total_bill'];
            // echo "<td><a href=$readmore?job_role='$jr'>Read</a> </td>";
        echo "</div>";
        // echo "<br>"; 
    }
?>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>