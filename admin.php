<html>
<head>
    <title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <style type="text/css">
        body {
            background-image: url(slideShow5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
<body>
    <div id="navbar">      
        <a href="index.php"><img src="logo.jpg" alt="Logo" id="logo"></a>
        <div id="navbar-right">
            <a style="margin-right: 37px; line-height: 50px" href="regForm.php">Sign Up</a>
        </div>
    </div>
    <div class="loginBox"> 
        <img src="avatar.jpg" alt="background" class="avatar">
        <h1>Admin Login</h1>
        <form action="loginAdminForm.php" method="post" name="adminForm">
            <p>Username</p>
            <input type="text" name="username" id="username" placeholder="Enter your username" autocomplete="off">
            <p>Password</p>
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off">
            <input type="submit" name="subBtn" id="subBtn" value="Login" style="background: #790c0c">
            <h1 style="color: dimgray; font-size: 13px; text-align: left; font-weight: normal; display: inline">Back to User Login</h1>
            <a href="form.php" style="font-weight: bold">Click Here</a>
        </form>
    </div>
</body>
</head>
</html>