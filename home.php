<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/home.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<body>
<?php
session_start();
if (!isset($_SESSION['username']))
{
    echo "You are not logged in.";
    header('Location : index.html');
    exit();
}
?>
<header>
    <div class="logo-img">
        <img src="images/logo-dei.jpg" alt="dei" width="120" height="120">
    </div>
    <div class="logo-name">
        <h4>Dayalbagh Educational Institute</h4>
    </div>
    <ul class="nav-links">
        <li><a href="#" class="choose">Home</a></li>
        <li><a href="marks.html">Marks</a></li>
        <li><a href="#">Details</a></li>
        <li><a href="registration.html">Registration</a></li>
    </ul>
    <div class="burger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
</header>
<div class="container-body">
<h4><?php

    ?>
</h4>
</div>
<script src="js/responsive.js"></script>
</body>
</html>