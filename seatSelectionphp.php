<link rel="shortcut icon" href="favicon.ico">
<?php
    session_start();
    $num_of_reserve_seats = $_SESSION['num_of_reserve_seats'];
    $play_time = $_SESSION['play_time'];
    $reservationDate = $_SESSION['reservationDate'];
    $movieName = $_SESSION['movieName'];
    $seat_num = $_POST["seatNum"];
    
    $seatNumResults = "";
    foreach($seat_num as $selected) {
        $seatNumResults .= $selected . ' '; 
    }
    $con = mysqli_connect("localhost", "root", "") or die("Can't establish connection");
    mysqli_select_db($con, "movtic") or die("Can't select database");
    
    $sqlStatment = "INSERT INTO reserve (seat_num, movie_ID, reservation_date, num_of_reserved_seats, play_time) VALUES ('$seatNumResults', '$movieName', '$reservationDate', '$num_of_reserve_seats', '$play_time')";

    $result =mysqli_query($con,$sqlStatment);
    if ($result == false)
	{
		die ("Error ".mysqli_error($con));
	}
	$row = mysqli_fetch_array($result);
    include("ticket.php");
?>