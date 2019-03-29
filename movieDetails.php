<html>
<head>
    <title>Movie Details</title>
    <link href="css/reset-min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-image: url(slideShow5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        h1 {
            margin: 0;
            padding: 20px 0 10px;
            text-align: center;
            font-size: 36px;
            color: #ffffff;
            font-weight: bolder;
            text-decoration: underline;
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
            font-size: 16px;
            -webkit-transition-duration: 0.4s;
            transition-duration: 0.4s;
            cursor: pointer;
            width: 150px;
            overflow: hidden;
            width: 250px; 
            float: right;
            margin-right: 20px;
            margin-bottom: 20px
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
            <a href="index.php" style="line-height: 50px">Sign Out</a>
        </div>
    </div>
    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "") or die("Can not establish connection");
    mysqli_select_db($con, "movtic");
    $movie_id = $_GET['id'];
    $sql = "SELECT * FROM movie WHERE movie_ID=$movie_id";
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_array($result))
        $array = $row;
    ?>

    <div style="padding: 150px 20px 10px 20px">
        <h1><?php $movie_name = $array['movie_name']; echo $movie_name; $_SESSION['movieName'] = $movie_name;?></h1> 
         <?php    echo '<img src="'.$array['movie_poster'].'" style="margin-bottom: 10px; margin-right: 20px; float: left"/>'; ?> 
        <p style="color: white; margin-top: 10px; font-family: monospace; font-size: 22px"> DESCRIPTION:<?php echo $array['description']; ?></p>
        <p style="color: white; font-family: monospace; font-size: 22px">CATEGORY: <?php echo $array['category']; ?></p>
        <p style="color: white; font-family: monospace; font-size: 22px">CAST: <?php echo $array['cast']; ?></p>
        <p style="color: white; margin-top: 10px; font-family: monospace; font-size: 22px">DIRECTOR: <?php echo $array['director']; ?></p>
        <p style="color: white; margin-top: 10px; font-family: monospace; font-size: 22px">DURATION: <?php echo $array['duration']; ?></p>
        <p style="color: white; margin-top: 10px; font-family: monospace; font-size: 22px">RATE: <?php echo $array['movie_rate']; ?></p>
        <p style="color: white; margin-top: 10px; font-family: monospace; font-size: 22px">TRAILER: 
        <a href="<?php echo $array['movie_trailer']; ?>" target="_blank"><?php echo $array['movie_trailer']; ?></a></p>
        <p style="color: white; margin-top: 10px; font-family: monospace; font-size: 22px">3D: <?php if($array['is3D'] == 0) {echo "No";} else {echo "Yes";}?></p>
        <p style="color: white; margin-top: 10px; font-family: monospace; font-size: 22px">18 PLUS: <?php if($array['plus18'] == 0) {echo "No";} else {echo "Yes";} ?></p>
    </div>
    <a href="movieReservation.php" style="text-decoration: none"><button class="button">Reserve</button></a>  
        <?php $con->close(); ?>
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