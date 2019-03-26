<html>
<head>
    <title>Ticket</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <style type="text/css">
        body {
            background-image: url(slideShow5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .ticketBox {
            width: 560px;
            height: 380px;
            background: #f1f1f1;
            color: #790c0c;
            top: 60%;
            left: 50%;
            position: absolute;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            padding: 0px 30px;
        }
        .ticketBox p {
            color: #790c0c;
        }
        .ticketBox button {
            width: 200px;
            border: none;
            outline: none;
            height: 40px;
            background: #790c0c;
            color: white;
            font-size: 18px;
            border-radius: 20px;
        }
        button:hover { 
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div id="navbar">
        <a href="index.php"><img src="logo.jpg" alt="Logo" id="logo"></a>
        <div id="navbar-right">
            <a href="index.php" style="line-height: 50px; margin-right: 30px">Sign Out</a>
        </div>
    </div>
    <?php
    session_start();
    $con = mysqli_connect("localhost", "root", "") or die("Can not establish connection");
    mysqli_select_db($con, "movtic");
    $sql = "SELECT seat_num, play_time, total_price,reservation_date FROM reserve";
    $result = mysqli_query($con, $sql);
    $array = array();
    while($row = mysqli_fetch_array($result))
        $array= $row;
    ?>
    <div class="ticketBox">
        <p style="font-size: 30px"><b>Ticket</b></p>
        <hr style="border-style: dashed">
        <p>Guest Name: <?php echo $_SESSION['userFullName']; ?></p>
        <p>Movie Name: <?php echo $_SESSION['movieName']; ?></p>
        <p>Time: <?php echo $array['play_time']; ?></p>
        <p>Date: <?php echo $array['reservation_date']; ?></p>
        <p>Seat/s: <?php echo $array['seat_num']; ?></p>
        <p>Total Price: <?php echo $array['total_price']; ?> L.E</p>
        <button onclick="printFunc()" style="float: right; margin-right: 5px">Print Ticket</button>
    </div>
        <?php $con->close(); ?>
</body>
<script>
    function printFunc() {
        window.print();
    }
</script>
</html>