<?php
session_start();
include("connect.php");
include("functions.php");



// Perform your database operations here to validate the login
// For demonstration purposes, let's assume the login is successful
// You should replace this with your actual database validation code




if($_SERVER['REQUEST_METHOD']== "POST")
{
    //something was posted
    
    $username= $_POST['username'];
    $password= $_POST['password'];

    if(!empty($username)&& !empty($password)&& !is_numeric($username))
    {

//read from database
        $query= ("Select * from signin where username= '$username' limit 1");
        $result = mysqli_query($con,$query);

        

        
        if($result)
        {
            if($result && mysqli_num_rows($result)>0)
        {
            $user_data= mysqli_fetch_assoc($result);
            if($user_data['password']==$password)
                {
                $_SESSION['username']= $user_data['username'];

                
                if($_SESSION) {
                        echo '<script>
                        document.addEventListener("DOMContentLoaded", function() {
                        Swal.fire({
                        title: "Success",
                        text: "Login successful. Redirecting to new page...",
                        icon: "success",
                        timer: 3000,
                        timerProgressBar: true,
                        willClose: () => {
                            window.location.href = "home.php";
                        }
                        });
                        });
                        </script>';
                }

            } 
        }
    }
    
} else {
        // Display an error message as a popup
        echo `<script>
            document.addEventListener("DOMContentLoaded", function() {
                Swal.fire({
                    title: "Error",
                    text: "Login failed. Please try again.",
                    icon: "error",
                    timer: 2000,
                    timerProgressBar: true
                });
            });
          </script>`;
    }



}


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    
    
    <title>Login</title>
</head>
<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
    
    
                <form action="" method="post" class="sign-in-form" id="loginForm">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username" />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password" />
                    </div>



                    <input type="submit" value="Login" class="btn solid" id="btn" />




                    <p class="social-text">Or Sign in with social platforms</p>
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
                    </div>
                </form>
            </div>
        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Debitis,
                        ex ratione. Aliquid!
                    </p>
                    <a href="signup.php">
                    <button class="btn transparent" id="sign-up-btn">
                        Sign up
                    </button>
                    </a>
                </div>
                <img src="img/log.svg" class="image" alt="" />
            </div>
        
        </div>
        
        <script src="app.js"></script>
        <script src="login.js"></script>
        <script src="jquery-3.7.1.min.js"></script>
        <script src="sweetalert2.all.min.js"></script>


            
            
        
        
</body>
</html>