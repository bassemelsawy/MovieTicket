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
        <form action="addMoviephp.php" method="post" name="addMovie" enctype="multipart/form-data">
    <div class="regBox" style="height: 1010px; top: 100%">
        <h1 style="margin-top: 0px">Add New Movie</h1>
        <p style="font-weight: lighter; font-size: 11px; margin-top: 0; margin-bottom: 10px;">Please fill in all fields.</p>
            <p>Name</p>
            <input type="text" name="movieName" id="movieName" placeholder="Enter movie name" required autocomplete="off">
            <p>ID</p>
            <input type="number" name="movieID" id="movieID" placeholder="Enter movie ID" required autocomplete="off">
            <p>Description</p>
            <input type="text" name="movieDescription" id="movieDescription" placeholder="Enter movie description" required autocomplete="off">
            <p>Director</p>
            <input type="text" name="movieDirector" id="movieDirector" placeholder="Enter movie director" autocomplete="off" required autocomplete="off">
            <p>Cast</p>
            <input type="text" name="movieCast" id="movieCast" placeholder="Clint Eastwood, Bradley Cooper, ..." autocomplete="off" required autocomplete="off">
            <p>Category</p>
            <input type="text" name="movieCategory" id="movieCategory" placeholder="Crime, Drama, ..." autocomplete="off" required>
            <p>Duration</p>
            <input type="text" name="movieDuration" id="movieDuration" placeholder="1h 56min" autocomplete="off" required>
            <p>Rate</p>
            <input type="text" name="movieRate" id="movieRate" placeholder="7.3/10" autocomplete="off" required>
            <p>Trailer</p>
            <input type="text" name="movieTrailer" id="movieTrailer" placeholder="Enter URL trailer" autocomplete="off" required>
            <p>Is the movie 3D?</p>
            <input type="text" name="is3D" id="is3D" placeholder="yes = 1, No = 0" autocomplete="off" required>
            <p>Movie image</p>
            <input type="file" name="movie_image" id="movie_image" placeholder="upload photo" autocomplete="off" required>
            <p>Is the movie 18 Plus?</p>
            <input type="text" name="is18plus" id="is18plus" placeholder="yes = 1, No = 0" autocomplete="off" required>
            <input type="submit" name="subBtn" id="subBtn" value="Add Movie" style="background: #790c0c">
    </div>
    </form>
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