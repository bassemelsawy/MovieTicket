<link rel="shortcut icon" href="favicon.ico">
<?php
    session_start();
    $username= $_POST["username"];
    $password= $_POST["password"];
    $con = mysqli_connect("localhost", "root", "") or die("Can't establish connection");
    mysqli_select_db($con, "movtic") or die("Can't select database");
    
    $sqlStatment = "SELECT * FROM usertable WHERE username = '$username'";
    $result =mysqli_query($con,$sqlStatment);
    if ($result == false)
	{
		die ("Error ".mysqli_error($con));
	}
	$row = mysqli_fetch_array($result);
	$answer = $row ["user_password"];
    $userFullName = $row["full_name"];
    $_SESSION['userFullName'] = $userFullName;

	if( $password == $answer ) {
		include("homePage.php"); 
	}
	else {
		header('Location: form.php');
	}
?>