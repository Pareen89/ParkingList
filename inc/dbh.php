<?php 
$servername = "localhost";
$dBUsername = "root";
$dBPassword = "BayArea2018!";
$dBName = "parkinglist_signin";

$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);

if (!conn) {
    die('Connection failed: ' . mysqli_connect_error());
}