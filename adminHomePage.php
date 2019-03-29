<html>
<head>
    <title>Admin Movies</title>
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
            <a href="index.php" style="line-height: 50px">Sign Out</a>
        </div>
    </div>
<?php
    $con = mysqli_connect("localhost", "root", "") or die("Can not establish connection");
    mysqli_select_db($con, "movtic");
    $sql = "SELECT description , movie_poster , movie_ID FROM movie";
    $result = mysqli_query($con, $sql);
    $array = array();
    while($row = mysqli_fetch_array($result))
        $array[] = $row;
    $size = sizeof($array);
    ?>
    <section>
        <div class="container" style="margin-top: 150px">
            <div class="row">
            	<?php for ($i = 0; $i < $size; $i++)  {?>
                <div class="col-md-12">
                    <a href="movieDetails.php?id=<?php echo $array[$i]['movie_ID']; ?>"/> 
                     <?php    echo '<img src="'.$array[$i]['movie_poster'].'" style="margin-bottom: 10px; margin-right: 20px; float: left"/>'; ?>
                    <p style="color: white; margin-top: 50px; font-family: monospace; font-size: 18px"> <?php echo $array[$i]['description']; ?> </p>
                </div>
                <?php
                }
                ?>
                <a href="addMovie.php" style="text-decoration: none"><button class="button" style="width: 250px; display: block; margin-left: auto; margin-right: auto; float: none; margin-bottom: 20px">Add Another Movie</button></a>
            </div>
        </div>
    </section>
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