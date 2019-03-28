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
    $target_dir = "images/";
    $target_file = $target_dir . basename($_FILES["movie_image"]["name"]);



    $con = mysqli_connect("localhost", "root", "") or die("Can't establish connection");
    mysqli_select_db($con, "movtic") or die("Can't select database");
    
    if (move_uploaded_file($_FILES["movie_image"]["tmp_name"], $target_file)) {
      //  echo "The file ". basename( $_FILES["movie_image"]["name"]). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }

    $sqlStatmentMovieName = "SELECT movie_name FROM movie WHERE movie_name = $movieName";
    $sqlStatmentMovieID = "SELECT movie_ID FROM movie WHERE movie_ID = $movieID";

    $resultMovieName = mysqli_query($con, $sqlStatmentMovieName);
    $resultMovieID = mysqli_query($con, $sqlStatmentMovieID);
        echo "string";

    if($resultMovieName == false || $resultMovieID == false) {
        
        $sqlStatment = "INSERT INTO movie (plus18, is3D, movie_name, movie_ID, description, director, cast, category, duration, movie_rate, movie_trailer, movie_poster) VALUES ('$is18plus', '$is3D', '$movieName', '$movieID', '$movieDescription', '$movieDirector', '$movieCast', '$movieCategory', '$movieDuration', '$movieRate', '$movieTrailer','$target_file')";

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