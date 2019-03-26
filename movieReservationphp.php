<link rel="shortcut icon" href="favicon.ico">
<?php
    session_start();
    $_SESSION['num_of_reserve_seats'] = $_POST["num_of_reserve_seats"];
    $_SESSION['play_time'] = $_POST["play_time"];
    $_SESSION['reservationDate'] = $_POST["reservationDate"];
    
    include("seatSelection.php");
?>