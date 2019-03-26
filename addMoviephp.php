<link rel="shortcut icon" href="favicon.ico">
<?php
    $movieName = $_POST["movieName"];
    $movieID = $_POST["movieID"];
    $movieDescription = $_POST["movieDescription"];
    $movieDirector = $_POST["movieDirector"];
    $movieCast = $_POST["movieCast"];
    $movieCategory = $_POST["movieCategory"];
    $movieDuration = $_POST["movieDuration"];
    $movieRate = $_POST["movieRate"];
    $movieTrailer = $_POST["movieTrailer"];
    $is3D = $_POST["is3D"];
    $is18plus = $_POST["is18plus"];

    $con = mysqli_connect("localhost", "root", "") or die("Can't establish connection");
    mysqli_select_db($con, "movtic") or die("Can't select database");
    
    $sqlStatmentMovieName = "SELECT movie_name FROM movie WHERE movie_name = $movieName";
    $sqlStatmentMovieID = "SELECT movie_ID FROM movie WHERE movie_ID = $movieID";

    $resultMovieName = mysqli_query($con, $sqlStatmentMovieName);
    $resultMovieID = mysqli_query($con, $sqlStatmentMovieID);

    if($resultMovieName == false || $resultMovieID == false) {
        
        $sqlStatment = "INSERT INTO movie (plus18, is3D, movie_name, movie_ID, description, director, cast, category, duration, movie_rate, movie_trailer) VALUES ('$is18plus', '$is3D', '$movieName', '$movieID', '$movieDescription', '$movieDirector', '$movieCast', '$movieCategory', '$movieDuration', '$movieRate', '$movieTrailer')";

        $result =mysqli_query($con,$sqlStatment);
        if ($result == false)
        {
            include("addMovie.php");
        } else {
            $row = mysqli_fetch_array($result);
            include("adminHomePage.php");
        }
    }

    
?>