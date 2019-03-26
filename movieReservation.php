<html>
<head>
    <title>Reservation</title>
    <link href="css/reset-min.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap-theme.css" rel="stylesheet" type="text/css">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <script src="js/bootstrap.js" type="text/javascript"></script>
    <script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="https://demo.techbrij.com/jquery-1.4.1.min.js"></script>
    <link href="chosen_v1.8.7/docsupport/style.css" rel="stylesheet" />
    <link href="chosen_v1.8.7/chosen.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.2/jquery.js"></script>
    <script src="chosen_v1.8.7/chosen.jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <style type="text/css">
        body {
            background-image: url(slideShow5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        #holder {    
            height:270px;    
            width:550px;
            background-color:#F5F5F5;
            border:1px solid #A4A4A4;
            margin-left:10px;   
        }
        #place {
            position:relative;
            margin:7px;
        }
        #place li {
            font-size:0.6em;
            list-style: none outside none;
            position: absolute;
            color: #790c0c;
        }    
        #place .seat {
            background:url("images/available_seat_img.gif") no-repeat scroll 0 0 transparent;
            height:33px;
            width:33px;
            display:block;   
        }
        #place .row-3, #place .row-4 {
            margin-top:10px;
        }
        .reservationBox {
            width: 600px;
            background: #f1f1f1;
            color: #790c0c;
            top: 60%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 30px 30px;
        }
        .reservationBox h1 {
            margin: 0;
            padding: 0 0 10px;
            text-align: center;
            font-size: 22px;
        }
        .reservationBox p {
            margin: 0;
            padding: 0;
            font-weight: bold;
        }
        .reservationBox input {
            width: 100%;
            margin-bottom: 20px;
        }
        .reservationBox input[type = "text"] {
            border: none;
            border-bottom: 1px solid #790c0c;
            background: transparent;
            height: 35px;
            color: black;
            font-size: 14px;
        }
        .reservationBox input[type = "submit"] {
            border: none;
            outline: none;
            height: 40px;
            background: #790c0c;
            color: white;
            font-size: 18px;
            border-radius: 20px;
            margin-top: 10px;
        }
        input[type=date]::-webkit-inner-spin-button, 
        input[type=date]::-webkit-outer-spin-button { 
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
    <div class="reservationBox" style="height: 280px"> 
        <h1>Movie Reservation</h1>
        <form action="movieReservationphp.php" method="post" name="movieReservation.php">
            <p>Number of seats <input type="number" min="1" max="10" value="1" name="num_of_reserve_seats" id="num_of_reserve_seats" style="margin-left: 5px; width: 100px; margin-top: 10px"></p>
            <p style="margin-bottom: 10px; display: inline">Play Time</p>
            <select style="margin-left: 5px; margin-bottom: 10px" name="play_time" required autocomplete="off"><option value="12pm">12:00 PM</option><option value="3pm">3:00 PM</option><option value="6pm">6:00 PM</option><option value="9pm">9:00 PM</option><option value="12am">12:00 AM</option></select>
            <p>Reservation Date <input type="date" name="reservationDate" style="margin-left: 5px; width: 135px; margin-top: 10px" required autocomplete="off"></p>
            <input type="submit" name="subBtn" id="subBtn" value="Next" style="background: #790c0c">
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