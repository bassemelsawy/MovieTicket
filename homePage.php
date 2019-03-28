<html>
<head>
    <title>Movies</title>
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
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }
        .mySlides {
            display: none;
        }
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 10s;
            animation-name: fade;
            animation-duration: 10s;
        }
        @-webkit-keyframes fade {
            from {opacity: 1} 
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: 1} 
            to {opacity: 1}
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
    <section>
        <div class="slideshow-container" style="margin-top:150px">
            <div class="mySlides fade">
                <img src="movieSlideShow1.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="movieSlideShow2.jpg" style="width:100%">
            </div>
            <div class="mySlides fade">
                <img src="movieSlideShow3.jpg" style="width:100%">
            </div>
        </div>
        <br>
    </section>
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
        <div class="container">
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

            </div>
        </div>
    </section>
    <?php $con->close(); ?>
    <script>
        var slideIndex = 0;
        showSlides();
        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none"; 
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            } 
            slides[slideIndex-1].style.display = "block"; 
            setTimeout(showSlides, 6000);
        }

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