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
            background-image: url(slideShow4.jpg);
            background-size: cover;
            background-repeat: no-repeat;
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
        .center {
            text-align: center;
        }
        .pagination {
            display: inline-block;
        }
        .pagination a {
            color: #ddd;
            float: left;
            padding: 8px 16px;
            text-decoration: none;
            transition: background-color .3s;
            border: 1px solid #ddd;
            margin: 0 4px;
        }
        .pagination a.active {
            background-color: #ddd;
            color: #790c0c;
            border: 1px solid #790c0c;
            font-weight: bolder;
            text-decoration: underline;
        }
        .pagination a:hover:not(.active) {
            background-color: #ddd;
            color: #790c0c;
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
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-2">
                    <img src="Fantastic-Beasts.jpg" style="margin-bottom: 10px">
                    <img src="At-Eternity's-Gate.jpg" style="margin-bottom: 10px">
                    <img src="Goosebumps-2.jpg" style="margin-bottom: 10px">
                </div>
                <div class="col-md-2">
                    <img src="Green-Book.jpg" style="margin-bottom: 10px">
                    <img src="Halloween.jpg" style="margin-bottom: 10px">
                    <img src="Instant-Family.jpg" style="margin-bottom: 10px">
                </div>
                <div class="col-md-2">
                    <img src="Smallfoot.jpg" style="margin-bottom: 10px">
                    <img src="Team-Khan.jpg" style="margin-bottom: 10px">
                    <img src="The-Last-Race.jpg" style="margin-bottom: 10px">
                </div>
                <div class="col-md-2">
                    <img src="Hunter-Killer.jpg" style="margin-bottom: 10px">
                    <img src="Creed-II.jpg" style="margin-bottom: 10px">
                    <img src="Robin-Hood.jpg" style="margin-bottom: 10px">
                </div>
                <div class="col-md-2">
                    <img src="The-Favourite.jpg" style="margin-bottom: 10px">
                    <img src="Shoplifters.jpg" style="margin-bottom: 10px">
                    <img src="Becoming-Astrid.jpg" style="margin-bottom: 10px">
                </div>
                <div class="col-md-2">
                    <img src="If-Beale-Street-Could-Talk.jpg" style="margin-bottom: 10px">
                    <img src="Anna-and-the-Apocalypse.jpg" style="margin-bottom: 10px">
                    <img src="The-Possession-of-Hannah-Grace.jpg" style="margin-bottom: 10px">
                </div>
            </div>
        </div>
    </section>
    <footer>
        <div class="center">
            <div class="pagination">
                <a href="homePage.php">1</a>
                <a href="secondPage.php">2</a>
                <a href="thirdPage.php">3</a>
                <a href="forthPage.php" class="active">4</a>
                <a href="fifthPage.php">5</a>
                <a href="sixthPage.php">6</a>
            </div>
        </div>
    </footer>
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