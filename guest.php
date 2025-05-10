<?php

$collection = require 'db.php'; // db.php returns a collection, that's why we assign it to a variable instead of include

//We set session vars as guest
$_SESSION['email'] = 'noEmail';
$_SESSION['name']  = 'Guest';
header("location: homepage.php");
