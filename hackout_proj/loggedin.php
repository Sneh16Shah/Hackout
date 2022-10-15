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
    $qry="select* from job";
    $arr=mysqli_query($connection,$qry);
    while($row=mysqli_fetch_array($arr))
    {   
        echo $row['job_role']." ".$row['job_desc']." ".$row['join_date']." ".$row['tenure']." ".$row['location']." ".$row['salary']." ".$row['name']." ".$row['email']." ".$row['mobile'];
        $link="http://localhost/hackout/job.php";
            $od=$row['order_id'];
            echo "<td><a href=$link?order_id='$od'>Make it not delivered</a> </td>";
            $invoice="http://localhost/Dbms_project/invoice.php";
            $od=$row['order_id'];
            $tot=$row['Total_bill'];
            echo "<td><a href=$invoice?order_id='$od'&bill='$tot'>Print invoice</a> </td>";
        echo "<br>"; 
    }
?>