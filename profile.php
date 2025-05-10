<?php
    // session_start();
    // $name     = $_SESSION['name'];
    // $fullName = $_SESSION['fullName'];
    // $email    = $_SESSION['email'];
    // $age      = $_SESSION['age'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile | Sifthr</title>
    <link
      rel="shortcut icon"
      href="res/images/logoModuleFinal.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="blob.css" />

    <link rel="stylesheet" href="profile.css" />
</head>
<body>
<div w3-include-html="navbar.html"></div>
    <div class="blob-cont">
      <div class="yellow blob"></div>
      <div class="red blob"></div>
      <div class="green blob"></div>
    </div>

    <div class="container">
        <div class="profile-container">
          <div class="profile-image-container">
          <h2 id="profileImgTxt">Upload picture</h2>

            <div class="profile-image">
                <img src="res/images/testProfileImg.jpg" alt="#">
            </div>
            </div>
            <div class="profile-details box">
              <!-- <h2><?php echo $fullName ?></h2>
              <h3><?php echo $email ?></h3>
              <h3><?php echo $age ?></h3> -->
              <h2>Name: <span>John Patrick B. Salen</span></h2>
              <h3>E-mail: <span>johnpatricksalen@gmail.com</span></h3>
              <h3>Age: <span>21</span></h3>
            </div>
        </div>
        <div class="spacer"></div>
        <div class="stats-container">
          <div class="summary box">
            <h1>Summary</h1>
            <div class="line"></div>
            <div class="summary-details">
              <p><h1>B</h1>Overall Grade</p>
              <div class="summary-percent">
                <p><span>76%</span>Modules Completed</p>
                <p><span>56%</span>Quizzes Completed</p>
              </div>
            </div>
          </div>
          <div class="spacer"></div>
          <div class="modules-history box"></div>
          <div class="quiz-history box"></div>
        </div>
    </div>

    <svg id="filterSvg">
      <filter id="noiseFilter">
        <feTurbulence
          type="fractalNoise"
          baseFrequency=".6"
          stitchTiles="stitch"
        />
        <feColorMatrix
          in="colorNoise"
          type="matrix"
          values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 1 0"
        />
        <feComposite operator="in" in2="SourceGraphic" result="monoNoise" />
        <feBlend in="SourceGraphic" in2="monoNoise" mode="screen" />
      </filter>
    </svg>

    <script>
      let profile = document.querySelector(".profile-image");
      let profileImgTxt = document.getElementById("profileImgTxt");
      profile.addEventListener("mouseover", function (e) {
          profile.classList.add("hover");
          profileImgTxt.style.display = "block";
      })

      profile.addEventListener("mouseout", function (e) {
          profile.classList.remove("hover");
          profileImgTxt.style.display = "none";
      })

    </script>

    <script src="include.js"></script>
    <script>
      includeHTML();
    </script>
</body>
</html>
