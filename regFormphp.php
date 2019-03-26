<link rel="shortcut icon" href="favicon.ico">
<?php
    $fullName = $_POST["fullName"];
    $phNum = $_POST["phNum"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $username = $_POST["username"];

    $con = mysqli_connect("localhost", "root", "") or die("Can't establish connection");
    mysqli_select_db($con, "movtic") or die("Can't select database");
    
    $sqlStatmentUsername = "SELECT username FROM usertable WHERE username = $username";
    $sqlStatmentPhoneNum = "SELECT phone_num FROM usertable WHERE phone_num = $phNum";
    $sqlStatmentEmail = "SELECT email FROM usertable WHERE email = $email";
    
    $resultUsername = mysqli_query($con, $sqlStatmentUsername);
    $resultPhoneNum = mysqli_query($con, $sqlStatmentPhoneNum);
    $resultEmail = mysqli_query($con, $sqlStatmentEmail);
    
    if($resultUsername == false || $resultPhoneNum == false || $resultEmail == false) {
        
        $sqlStatment = "INSERT INTO usertable (username, user_password, full_name, phone_num, email) VALUES ('$username', '$password', '$fullName', '$phNum', '$email')";
        
        $result =mysqli_query($con,$sqlStatment);
        
        if ($result == false)
        {
            include("regForm.php");
        }
        else {
            $row = mysqli_fetch_array($result);
            include("homePage.php");
        }
    }
?>