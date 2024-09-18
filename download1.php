
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="my.css">
    <title>Downloads</title>
</head>
<body>
    <div id="hero">
        <div class="navbar">
            <a href="home.php">
            <img src="pics/downloading.png" class="logo">
            </a>
            <div class="user">
                <a href="https://www.webintoapp.com/app-maker">
                <button type="button">Proceed to Download</button>
                </a>
            </div>
        </div>
        <div class="container">
        </div>
        <div class="slider">
            <img src="pics/left.png" alt="logo" id="prev">
            <div class="preview">
                <img src="pics/default home.png" class="active thumbnail">
                <img src="pics/login.png" class="thumbnail">
                <img src="pics/signup.png" class="thumbnail">
                <img src="pics/main home.png" class="thumbnail">
                <img src="pics/classes.png" class="thumbnail">
                <img src="pics/video.png" class="thumbnail">
            </div>
            <img src="pics/right.png" alt="logo" id="next">
        </div>
    </div>
    <script>

        var prev = document.getElementById("prev");
        var next = document.getElementById("next");
        var thumbnail = document.getElementById("thumbnail");
        var hero = document.getElementById("hero");

        var backgroundImg = new Array(
           "pics/default home.png",
            "pics/login.png",
            "pics/signup.png",
            "pics/main home.png",
            "pics/classes.png",
            "pics/video.png"
        );
        let i = 0;
        next.onclick = function() {
            if(i<5) {
                hero.style.backgroundImage = 'url("'+backgroundImg[i+1]+'")';
                i++;
            }
        }
        prev.onclick = function() {
            if(i>0) {
                hero.style.backgroundImage = 'url("'+backgroundImg[i-1]+'")';
                i--;
            }
        }

    </script>
</body>
</html>