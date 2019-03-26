<html>
<head>
    <title>Admin Page</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <style type="text/css">
        body {
            background-image: url(slideShow5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .adminBox {
            width: 560px;
            height: 360px;
            background: transperant;
            color: #790c0c;
            top: 60%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 0px 30px;
        }
        .adminBox p {
            color: #790c0c;
        }
        .button {
            position: relative;
            background-color: #f1f1f1;
            border: none;
            font-size: 18px;
            color: 790c0c;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
            width: 150px;
            overflow: hidden;
            cursor: pointer;
            float: right;
            margin-top: 50px;
        }
        .button:hover {
            background-color: #790c0c;
            color: white;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <a href="index.php"><img src="logo.jpg" alt="Logo" id="logo"></a>
        <div id="navbar-right">
            <a href="form.php" style="line-height: 50px">Login</a>
            <a href="regForm.php" style="line-height: 50px; margin-right: 37px">Sign Up</a>
        </div>
    </div>
    <div class="adminBox">
        <a href="deleteMovie.php" style="text-decoration: none"><button class="button" style="width: 250px; display: block; margin-left: auto; margin-right: auto; float: none; margin-bottom: 20px">Delete Movie</button></a>
        <a href="addMovie.php" style="text-decoration: none"><button class="button" style="width: 250px; display: block; margin-left: auto; margin-right: auto; float: none; margin-bottom: 20px">Add New Movie</button></a>
    </div>
</body>
</html>



