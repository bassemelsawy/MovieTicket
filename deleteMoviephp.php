<link rel="shortcut icon" href="favicon.ico">
<?php
    $movieName = $_POST["movieName"];
    
    $con = mysqli_connect("localhost", "root", "") or die("Can't establish connection");
    mysqli_select_db($con, "movtic") or die("Can't select database");
    
    $sqlStatment = "DELETE FROM movie WHERE movie_name = '$movieName'";
    $sqlStatment2 = "DELETE FROM reserve WHERE movie_name = '$movieName'";
    
    $result = mysqli_query($con,$sqlStatment);
    $result2 = mysqli_query($con,$sqlStatment2);
    if ($result == false)
	{
		die ("Error ".mysqli_error($con));
	}
	$row = mysqli_fetch_array($result);
    include("adminDeleteMovie.php");
?>