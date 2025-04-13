<?php
session_start();
$name = $_SESSION['name'];
echo "Login successful, welcome $name";
