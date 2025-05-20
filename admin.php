<?php
    $isAdmin = $_SESSION['isAdmin'] ?? false;
    // admin verification here to avoid anyone just going to the homepage
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Tab Icon/Favicon -->
    <link rel="shortcut icon" href="res/images/logoModuleFinal.png" type="image/x-icon" />

    <!-- Background Styling -->
    <link rel="stylesheet" href="blob.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="admin.css">


    <!-- Custom CSS link here -->
    <title>Admin Page</title>


</head>

<body>
    <!-- Dynamically load the navigation bar -->
    <div w3-include-html="navbar.html"></div>

    <!-- Animation of background-->
    <div class="blob-cont">
        <div class="yellow blob"></div>
        <div class="red blob"></div>
        <div class="green blob"></div>
    </div>

    <div class="container">
        <div class="admin-container">

        </div>
        <!-- Insert content here -->
    </div>

    <!-- Script for the nav dynamic loading -->
    <script src="include.js"></script>
    <script>
    includeHTML();
    </script>
    <script>
    const isAdmin = <?php echo json_encode((bool)$isAdmin); ?>;
    if (!isAdmin) { //if not an admin
        document.querySelector('.admin-container').innerHTML = 'Error, you are not an admin. You will be logged out.'

        setTimeout(() => {
            console.log("This runs after 2 seconds");
            window.location.href = "index.html";

        }, 2000);
    }
    </script>
</body>

</html>