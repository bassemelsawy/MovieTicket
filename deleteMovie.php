<html>
<head>
    <title>Delete Movie</title>
    <link href="css/reset-min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <style type="text/css">
        body {
            background-image: url(slideShow5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        } 
        input[type = "number"] {
            border: none;
            border-bottom: 1px solid #790c0c;
            background: transparent;
            height: 35px;
            color: dimgrey;
            font-size: 14px;
            margin-bottom: 20px;
        }
        input[type=number]::-webkit-inner-spin-button, 
        input[type=number]::-webkit-outer-spin-button { 
            -webkit-appearance: none; 
            margin: 0; 
        }
    </style>
</head>
<body>
    <div id="navbar">
        <a href="index.php"><img src="logo.jpg" alt="Logo" id="logo"></a>
        <div id="navbar-right">
            <a href="index.php" style="line-height: 50px">Sign Out</a>
        </div>
    </div>
    <?php
    $con = mysqli_connect("localhost", "root", "") or die("Can not establish connection");
    mysqli_select_db($con, "movtic");
    $sql = "SELECT movie_name FROM movie";
    $result = mysqli_query($con, $sql);
    $array = array();
    while($row = mysqli_fetch_array($result))
        $array[] = $row;
    $size = sizeof($array);
    ?>
    <div class="regBox" style="height: 200px; top: 50%">
        <form action="deleteMoviephp.php" method="post" name="deleteMovie">
            <p>Select Movie</p> 
            <select style="width: 100%; margin-bottom: 15px" name="movieName"><option selected disabled hidden value="">Select Movie...</option><?php for ($i = 0; $i < $size; $i++) { ?><option><?php echo $array[$i]['movie_name'];}?></option></select>
            <input type="submit" name="subBtn" id="subBtn" value="Delete Movie" style="background: #790c0c">
        </form>
    </div>
    <script>
            window.onscroll = function() {scrollFunction()};
            function scrollFunction() {
                if (document.body.scrollTop || document.documentElement.scrollTop) {
                    document.getElementById("navbar").style.padding = "5px 5px";
                } else {
                    document.getElementById("navbar").style.padding = "20px 10px";
                }
            }
    </script>
</body>
</html>