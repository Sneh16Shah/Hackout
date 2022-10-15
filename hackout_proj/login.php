<?php
    $connection=mysqli_connect("localhost","root");
    mysqli_select_db($connection,"hackout");
    // $un=$_POST("username");
    // $p=$_POST("password");
    $job_role=$_POST["job_role"];
    $job_desc=$_POST["job_desc"];
    $join_date=$_POST["join_date"];
    $tenure=$_POST["tenure"];
    $location=$_POST["location"];
    $salary=$_POST["salary"];
    $name=$_POST["name"];
    $email=$_POST["email"];
    $mobile=$_POST["mobile"];
    $qry="insert into job(job_role,job_desc,join_date,tenure,location,salary,name,email,mobile) values('$job_role','$job_desc','$join_date','$tenure','$location','$salary','$name','$email','$mobile')";
    mysqli_query($connection,$qry);
    header("location:loggedin.php");
?>  