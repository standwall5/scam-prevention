<?php
    session_start();
    $name  = $_SESSION['name'];
    $email = $_SESSION['email'];
    $isAdmin = $_SESSION['isAdmin'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home | Sifthr</title>
    <link rel="shortcut icon" href="res/images/logoModuleFinal.png" type="image/x-icon" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet" href="homeStyle.css" />
    <link rel="stylesheet" href="blob.css" />
</head>

<body>
    <div w3-include-html="navbar.html"></div>
    <div class="blob-cont">
        <div class="yellow blob"></div>
        <div class="red blob"></div>
        <div class="green blob"></div>
    </div>
    <div class="container">
        <!-- Blobs -->

        <!-- Menu -->
        <div class="menu">
            <div class="box">
                <h1>Learning Materials <?php echo $name ?></h1>
                <p>
                    This interactive learning module is specifically designed to educate
                    individuals, particularly the elderly, about the dangers of social
                    media ad scams and how to identify them.
                </p>
                <div class="items">
                    <ul type="none">
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                    </ul>
                </div>
            </div>
            <div class="box">
                <h1>Quizzes</h1>
                <p>
                    Test your knowledge and reinforce what you've learned about social
                    media ad scams. This quiz will help you identify the signs of
                    fraudulent ads and ensure you're equipped with the right strategies
                    to stay safe online. Ready to challenge yourself?
                </p>
                <div class="items">
                    <ul type="none">
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                    </ul>
                </div>
            </div>
            <div class="box">
                <h1>Latest News</h1>
                <p>
                    Stay updated with the foregoing dangers present online. The most
                    updated information regarding recent social media advertisement and
                    online scams.
                </p>
                <div class="items">
                    <ul type="none">
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                    </ul>
                </div>
            </div>
            <div class="box">
                <h1>Support</h1>
                <p>
                    Test your knowledge and reinforce what you've learned about social
                    media ad scams. This quiz will help you identify the signs of
                    fraudulent ads and ensure you're equipped with the right strategies
                    to stay safe online. Ready to challenge yourself?
                </p>
                <div class="items">
                    <ul type="none">
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                        <li><img src="" alt="" /></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <svg id="filterSvg">
        <filter id="noiseFilter">
            <feTurbulence type="fractalNoise" baseFrequency=".6" stitchTiles="stitch" />
            <feColorMatrix in="colorNoise" type="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0" />
            <feComposite operator="in" in2="SourceGraphic" result="monoNoise" />
            <feBlend in="SourceGraphic" in2="monoNoise" mode="screen" />
        </filter>
    </svg>
    <script src="include.js"></script>
    <script>
    includeHTML();
    </script>
</body>

</html>