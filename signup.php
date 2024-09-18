<?php
session_start();
include("connect.php");
include("functions.php");






if($_SERVER['REQUEST_METHOD']== "POST")
{
    //something was posted
    $username= $_POST['username'];
  
    $gmail= $_POST['gmail'];
    $password= $_POST['password'];

  

    if(!empty($username)&& !empty($password)&& !is_numeric($username))
    {

//save to database
        $query= "insert into signin (username,password,gmail) values ('$username','$password','$gmail')";

       
         if (mysqli_query($con, $query))
        {


      if ($_SESSION) {
        header("Location: home.php");
        die;
      }
          
        }

        else {
          echo "Username is already exist.";
        }
}
      
}

?> 






<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <script src="sweetalert2.all.min.js"></script>
    <script src="jquery-3.7.1.min.js"></script>
    <link rel="shortcut icon" href="img/sign-in.png">
    <title>Sign up </title>
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
        
          
          <form action="" method="post" class="sign-up-form">
            <h2 class="title">Sign up</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Username" name="username" />
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="gmail" />
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="password" placeholder="Password" name="password" />
            </div>

            <Button type="submit" class="btn" name="Submit">Sign In</Button>

            <p class="social-text">Or Sign up with social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/login" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://twitter.com/i/flow/login" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://accounts.google.com" class="social-icon">
                <i class="fab fa-google"></i>
              </a>
              <a href="https://www.linkedin.com/login" class="social-icon">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </form>
        </div>
      </div>
        <div class="panels-container">
          <div class="panel right-panel">
            <div class="content">
              <h3>One of us ?</h3>
              <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum
              laboriosam ad deleniti.
              </p>
              <a href="login.php">
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
            </a>
          </div>
          <img src="img/register.svg" class="image" alt="logo" />
        </div>
      </div>
      <script src="app.js"></script>
  </body>  
</html>
