<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v0.52.0/mapbox-gl.css' rel='stylesheet' />
</head>

<body>
    <!--------------------------------------------------->
    <!-- Header Section-->
    <!--------------------------------------------------->
    <section class="header">
        <div class="header__logo">
            <a href="index.php">
                <h1>ParkingList</h1>
            </a>
        </div>
        <div onclick="menuActive()" class="header__menu_image">
            <i class="fas fa-bars"></i>
        </div>
        <nav id="header__nav" class="header__nav">
            <ul class="header__nav-menu">
                <li><a href="about.php">About</a></li>
                <li><a href="rentDriveway.php">Rent Your Driveway</a></li>
                <li><a href="signin.php">Sign In</a></li>
                <li><a href="signup.php">Sign Up</a></li>
            </ul>
        </nav>
    </section>