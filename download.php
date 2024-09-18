
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FitProAI - Work Hard To Get Better Life</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Catamaran:wght@600;700;800;900&family=Rubik:wght@400;500;800&display=swap"
        rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.png">
    <link rel="preload" as="image" href="./assets/images/hero-circle-one.png">
    <link rel="preload" as="image" href="./assets/images/hero-circle-two.png">
    <link rel="preload" as="image" href="./assets/images/heart-rate.svg">
    <link rel="preload" as="image" href="./assets/images/calories.svg">

</head>

<body id="top">

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <ion-icon name="barbell-sharp" aria-hidden="true"></ion-icon>
                <span class="span">FitProAI</span>
            </a>

            <nav class="navbar" data-navbar>

                <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                    <ion-icon name="close-sharp" aria-hidden="true"></ion-icon>
                </button>

                <ul class="navbar-list">

                    <li>
                        <a href="home.php" class="navbar-link active" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="home.php" class="navbar-link" data-nav-link>About Us</a>
                    </li>


                    <li>
                        <a href="home.php" class="navbar-link" data-nav-link>Videos</a>
                    </li>

                    <li>
                        <a href="home.php" class="navbar-link" data-nav-link>Contact Us</a>
                    </li>
                </ul>

            </nav>

            <a href="login.php" class="btn btn-secondary">Log Out</a>

            <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </button>

        </div>
    </header>

    <main>
        <article>
    
            <!-- 
            - #HERO
          -->
    
            <section class="section hero bg-dark has-after has-bg-image" id="home" aria-label="hero" data-section
                style="background-image: url('./assets/images/hero-bg.png')">
                <div class="container">
    
                    <div class="hero-content">
    
                        <p class="hero-subtitle">
                            <strong class="strong">The Best</strong>Fitness Club
                        </p>
    
                        <h1 class="h1 hero-title">Work Hard To Get Better Life</h1>
    
                        <p class="section-text">
                            It doesn’t matter if your goal is to get stronger, burn fat, or to just stay fit our world class
                            coaches will guide you every step of the way..
                        </p>
    
                        <a href="download1.php" class="btn btn-primary">Download FitProAI App</a>
    
                    </div>
    
                    <div class="hero-banner">
    
                        <img src="./assets/images/hero-banner.png" width="660" height="753" alt="hero banner" class="w-100">
    
                        <img src="./assets/images/hero-circle-one.png" width="666" height="666" aria-hidden="true" alt=""
                            class="circle circle-1">
                        <img src="./assets/images/hero-circle-two.png" width="666" height="666" aria-hidden="true" alt=""
                            class="circle circle-2">
    
                        <img src="./assets/images/heart-rate.svg" width="255" height="270" alt="heart rate"
                            class="abs-img abs-img-1">
                        <img src="./assets/images/calories.svg" width="348" height="224" alt="calories"
                            class="abs-img abs-img-2">
    
                    </div>
    
                </div>
            </section>