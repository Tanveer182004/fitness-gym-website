<?php
session_start();
include("connect.php");
include("functions.php");

// $user_data = check_login($con);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FitProAI</title>
    <link rel="shortcut icon" href="img/gym.png" type="icon">
    <script type="module" src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.esm.js"></script>
    <script nomodule src="https://cdn.jsdelivr.net/npm/@ionic/core/dist/ionic/ionic.js"></script>
    <link rel="stylesheet" href="css.css" />
</head>

<body>
    <!-- Menu -->
    <div class="menu">
        <div class="container flex">

            <div class="mobile-btn">
                <ion-icon name="grid"></ion-icon>
            </div>
            <div class="logo">
                <img src="img/exercise.png" alt="logo" />
                <div class="nav-item"><a href="#home"><h1>FitProAI</h1></a></div>
            </div>

            <ul class="nav">
                <li class="nav-item"><a href="#home">Home</a></li>
                <li class="nav-item"><a href="#why-us">Features</a></li>
                <li class="nav-item"><a href="#explore">Explore</a></li>
                <li class="nav-item"><a href="#discount">Subscription</a></li>
            </ul>

            <a href="login.php" class="btn">Login / Register</a>
        </div>
    </div>
    <!-- End Menu -->

    <!-- Header -->
    <header class="header" id="home">
        <div class="container flex">
            <div class="text">
                <h1 class="mb">
                    Complete
                    <span><u>
                        Daily
                    </u>
                    </span> <br />
                    <span><u>Workout</u></span> At Home.!
                </h1>

                <h2 class="mb">Feel Great.
                    Body and Mind.
                </h2>
                <p class="mb">
                    Choose from hundreds of workouts, healthy recipes, relaxing meditations, and expert articles, for a whole body and mind approach to feeling great.
                </p>

                <a href="login.php" class="btn mt">Start Now</a>
            </div>

            <div class="visual">
                <img src="img/1.png" alt="" />
            </div>
        </div>
    </header>
    <!-- End Header -->

    <!-- Why Us -->
    <div class="section" id="why-us">
        <div class="container flex">
            <div class="text">
                <h2 class="primary mb">Why Choose Us?</h2>
                <h3 class="secondary mb">Boost your mood and energy</h3>
                <p class="tertiary">
                    Boost Your Mood and Energy. Post-workout bliss is a good feeling. Your body produces endorphins that trigger a positive feeling. 
                </p> <br/>

                <h3 class="secondary mb">Improved Health</h3>
                <p class="tertiary">
                    Improved physical health. First and foremost, going to the gym can do wonders for your physical health. 
                </p>
            </div>
            <div class="visual">
                <img src="img/3.png" alt="" />
            </div>
        </div>
    </div>
    <!-- End Why Us -->

    <!-- Explore -->
    <div class="section" id="explore">
        <div class="container flex">
            <div class="visual">
                <img src="img/2.png" alt="" />
            </div>
            <div class="text">
                <h2 class="primary mb">
                    Explore Our Fitness <br />
                    Studio
                </h2>
                <p class="tertiary mb">
                    Our concept is simple. Provide our local communities with the most motivating fitness environment possible.  As a valued member, you will receive the cleanest facilities with the friendliest staff guaranteed.  No matter your gym experience or level of fitness, you will find our atmosphere welcoming and inspiring. Our mission is to ultimately help you achieve your end goal. 
                </p>

                <a href="login.php" class="btn mt">Get Started Now</a>
            </div>
        </div>
    </div>
    <!-- End Explore -->

    <!-- Trainer -->
    <div class="section" id="trainer">
        <h2 class="primary mb">Our Trainer</h2>
        <div class="container flex">
            <div class="trainer">
                <img src="img/ai chat.avif" alt="logo" />
                <h3 class="secondary mb">AI Chat</h3>
                <p class="tertiary mb">
                    You can chat or schedule your plans with AI.
                </p>

                <a href="login.php" class="btn-2">
                    <ion-icon name="arrow-redo-circle-outline"></ion-icon>
                </a>
            </div>
        </div>
    </div>
    <!-- End Trainer -->

    <!-- Testimonial -->
    <div class="section" id="testimonial">
        <div class="container flex">
            <div class="text">
                <h2 class="primary">
                    That's What Our Super <br />
                    Client Says
                </h2>

                <br />
                <br />
                <br />

                <div class="client">
                    <img src="img/4.png" alt="" />
                    <h2 class="secondary">Exelent Training</h2>
                    <p class="tertiary">
                        Going to the gym helps to improve physical health. Regular exercise can reduce the risk of chronic diseases and promote overall health. Secondly, it helps to improve mental health by reducing stress and anxiety levels. Thirdly, it can help you to build a community and make new friends with similar goals.
                    </p>
                </div>
            </div>
            <div class="visual">
                <img src="img/1.png" alt="" />
            </div>
        </div>
    </div>
    <!-- End Testimonial -->

    <!-- Discount -->
    <div class="section" id="discount">
        <div class="container flex">
            <div class="visual">
                <img src="img/5.png" alt="" />
            </div>
            <div class="text">
                <h2 class="primary mb">
                    Fitness Classes This Summer, Pay Now And Get 45% Discount
                </h2>

                <p class="tertiary mb">
                    Get ready to sweat this summer with our exciting fitness classes! Sign up now and enjoy a whopping 45% discount on all our classes. Whether you're into high-intensity workouts, yoga, or dance-based routines, we have something for everyone. Our experienced instructors will guide you through fun and effective workouts that will leave you feeling energized and motivated. Don't miss this chance to achieve your fitness goals at a great price. Pay now and secure your spot in our summer fitness program!
                </p>

                <a href="sub.html" class="btn bt">Book Now</a>
            </div>
        </div>
    </div>
    <!-- End Discount -->

    <!-- Footer -->
    <footer class="footer">
        <div class="container flex">
            <p class="tertiary">
                &copy; 2024 All Rights Reserved.
            </p>
        </div>
    </footer>

    <!-- End Footer -->
    <script src="js.js"></script>
</body>

</html>