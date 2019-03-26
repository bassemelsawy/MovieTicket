<?php
$un=$_POST["username"]; //da esm el text area elly el user byktb feha el username 
$pw=$_POST["password"]; //da esm el text area elly el user byktb feha el password


else {
	$con = mysqli_connect("localhost","root","") or die (" can not establish connection ");
	mysqli_select_db($con,"movtic") or die (" can not select db "); //3and hyb2a smha moviee
	
	$statment1 = "SELECT * from user where name = '$un' ";
	$result =mysqli_query($con,$statment1);
	if ($result==false)
	{
		die ("Error: ".mysqli_error($con));
	}
	$row = mysqli_fetch_array($result);
	$answer=$row ["password"];

	if( $pw == $answer ) {
		include("homePage.php"); //t2reban msmhash home , check bs esm el page elly el mfrod yro7 leha b3d ma y log in
	}
	else {
		header('Location: form.php');
	}
}
?>