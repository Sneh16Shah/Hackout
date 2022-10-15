<!-- <div id='div' class='text'>
<!DOCTYPE html>
<html lang="en">
<head>
    <title> Login </title>
</head>
<body>
<div class="signup-form" id="align">
    <form action="login.php" method="post">
        <input type="email" name="username" placeholder="username">
        <input type="email" name="username" placeholder="password">
        <button type="submit">
    </form> -->
    <!-- <div class="hint-text">Reviewer login? <a href="reviewerlogin.php">login here</a></div> -->
<!-- </div>
</body>
</html>
</div> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
    <link rel="stylesheet" href="forms.css">
    <script src="https://kit.fontawesome.com/87df3b84c4.js" crossorigin="anonymous"></script>

</head>
<body>
    <!-- <img class="hero-wave" src="wave3.svg" alt="techify-hero-wave"> -->
    <div class="heading">
        <h2>Fill The details of the job</h2>
    </div>
    <div class="container">
        <form action='login.php' method='POST'>
          <div class="row">
            <h4>Job Description</h4>
            <div class="input-group input-group-icon">
              <input type="text" name="job_role" placeholder="Job Role"/>
              <div class="input-icon"><i class="fa fa-user"></i></div>
            </div>
            <div class="input-group input-group-icon">
              <input type="text" name="job_desc" placeholder="Job Description"/>
              <div class="input-icon"><i class="fa-solid fa-briefcase"></i></div>
              <!-- <div class="input-icon"><i class="fa fa-user"></i></div> -->
            </div>
            
          </div>
          <div class="row">
            <div class="col-half">
              <h4>Joining Date</h4>
              <div class="input-group">
                <div class="col-third">
                  <input type="date" name="join_date" placeholder="DD/MM/YYYY"/>
                </div>
                <!-- <div class="col-third">
                  <input type="text" placeholder="MM"/>
                </div>
                <div class="col-third">
                  <input type="text" placeholder="YYYY"/>
                </div> -->
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
            <div class="input-group input-group-icon">
              <input type="text" name="location" placeholder="Location"/>
              <div class="input-icon"><i class="fa-solid fa-location-dot"></i></div>
              <!-- <div class="input-icon"><i class="fa fa-credit-card"></i></div> -->
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

            <div class="input-group input-group-icon">
                <input type="text" name="name" placeholder="Full Name"/>
                <div class="input-icon"><i class="fa fa-user"></i></div>
              </div>
            <div class="input-group input-group-icon">
              <input type="email" name="email" placeholder="Email Address"/>
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div>
            <!-- <div class="input-group input-group-icon"> -->
              <input type="number" name="mobile" placeholder="Mobile Number"/>
              <!-- <div class="input-icon"><i class="fa-solid fa-phone"></i></div>
              <div class="input-icon"><i class="fa fa-envelope"></i></div>
            </div> -->
            
          <div class="row">
            <h4>Terms and Conditions</h4>
            <div class="input-group">
              <input id="terms" type="checkbox"/>
              <label for="terms">I assure that this job information is completely true .</label>
            </div>
          </div>
            <button type="submit">submit</button>
        </form>
      </div>
</body>
</html>