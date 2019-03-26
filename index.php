<html>
<head>
    <title>Index</title>
    <link href="css/reset-min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <style>
        body {
            background: #f1f1f1;
        }
        #main-slider {
            background-image: url(slideShow5.jpg);
            background-attachment: fixed;
            background-size: cover;
            background-position: 50% 50%;
            background-repeat: no-repeat;
            padding: 200px 0;
            color: #fff;
        }
        #main-slider .item {
            -moz-transition: opacity ease-in-out 500ms;
            -o-transition: opacity ease-in-out 500ms;
            -webkit-transition: opacity ease-in-out 500ms;
            transition: opacity ease-in-out 500ms;
            left: 0 !important;
            opacity: 0;
            top: 0;
            position: absolute;
            width: 100%;
            display: block !important;
            text-align: center;
        }
        #main-slider .item:first-child {
            top: auto;
            position: relative;
        }
        #main-slider .item.active {
            opacity: 1;
            -moz-transition: opacity ease-in-out 500ms;
            -o-transition: opacity ease-in-out 500ms;
            -webkit-transition: opacity ease-in-out 500ms;
            transition: opacity ease-in-out 500ms;
        }
        #main-slider .prev,
        #main-slider .next {
            position: absolute;
            top: 50%;
            display: inline-block;
            margin-top: -50px;
            height: 50px;
            width: 50px;
            line-height: 170px;
        }
        #main-slider .prev {
            left: 15px;
        }
        #main-slider .next {
            right: 0px;
        }
        #main-slider h1 {
            font-size: 58px;
            font-family: monospace;
            text-shadow: 0 10px rgba(0, 0, 0, 0.5);
        }
        #main-slider p {
            font-size: 16px;
            font-family: sans-serif;
            font-weight: lighter;
        }
        .center {
            text-align: center;
        }
</style>
</head>
<body>
   <div id="navbar">
        <a href="index.php"><img src="logo.jpg" alt="Logo" id="logo"></a>
        <div id="navbar-right">
            <a href="form.php" style="line-height: 50px">Login</a>
            <a href="regForm.php" style="line-height: 50px">Sign Up</a>
            <a href="contactUs.php" style="line-height: 50px">Contact Us</a>
        </div>
    </div>
    <section id="main-slider" class="carousel">
        <div class="carousel-inner">
            <div class="item active">
                <div class="container">
                    <div class="carousel-content">
                        <h1>Online Cinema Ticketing with MOVTIC</h1>
                        <p>MOVTIC is the best, easiest and fastest option for you to ticket your seat whenever you want.</p>
                    </div>
                </div>
            </div>
			<div class="item">
                <div class="container">
                    <div class="carousel-content">
                        <h1>MOVTIC NEW VISION</h1>
                        <p class="lead">View all details about the movies, and ticket your seat by just a click.</p>
                    </div>
                </div>
            </div>
        </div>
		     <a class="prev" href="#main-slider" data-slide="prev"><img src="sprite_prev.png"></a>
			 <a class="next" href="#main-slider" data-slide="next"><img src="sprite_next.png"></a>
    </section>
    <br>
    <h1 style="text-align: center; font-size: 36px; color: #790c0c">Login to enjoy your movie!</h1>
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
