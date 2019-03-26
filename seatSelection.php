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
            top: 70%;
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
    <?php
        session_start();
        $movie_name = $_SESSION['movieName'];
        $play_time = $_SESSION['play_time'];
        $reservationDate = $_SESSION['reservationDate'];
        $seatNum = $_SESSION['num_of_reserve_seats'];
        $con = mysqli_connect("localhost", "root", "") or die("Can not establish connection");
        mysqli_select_db($con, "movtic");
        $sql = "SELECT seat_num FROM reserve WHERE movie_name = '$movie_name' AND play_time = '$play_time' AND reservation_date = '$reservationDate'";
        $result = mysqli_query($con, $sql);
        $seats = array();
        while ($row = mysqli_fetch_array($result)) {
            $seats = array_merge($seats, explode(' ', $row['seat_num']));
        }
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-6" style="margin-top: 300px">
                <div class="reservationBox" style="margin-top: 50px; height: 410px"> 
                    <h1>Movie Reservation</h1>
                    <form action="seatSelectionphp.php" method="post" name="movieReservation.php">
                        <p style="margin-bottom: 10px">You have <?php echo $seatNum ?> selectable seat/s</p>
                        <p style="display: inline">Seat Selection</p>
                        <select data-placeholder="Choose your suitable seat" id="userRequest_activity" name="seatNum[]" onchange="maxAllowedMultiselect(this)"  multiple required style="height: 230px; width: 100px">
                            <?php for ($i = 0; $i < 70; $i++) { $f = 0;
                                foreach ($seats as $seat) {
                                if ($i+1 == $seat) {
                                    echo $i . " " . $seat;
                                    $f=1;
                                }
                                } ?>
                            <?php if($f == 0) {?> <option><?php {echo $i+1; } }?></option>
                            <?php } ?>
                        </select>
                        <p style="font-size: 12px; margin-left: 50px">Use (Ctrl+left click) for multiple selections</p>
                        <input type="submit" name="subBtn" id="subBtn" value="Reserve" style="background: #790c0c">
                    </form>
                </div>
                <?php $con->close(); ?>
            </div>
            <div class="col-md-6" style="margin-top: 200px">
               <p style="text-align: center; font-size: 24px; color: white; font-weight: bold; text-decoration: underline">Seat Chart</p>
                <div id="holder" style="display: block; margin-left: auto; margin-right: auto; margin-top: 15px">
                    <p style="text-align: center; font-size: 24px; color: #790c0c; font-weight: bold; margin-top: 15px">SCREEN</p>
                    <ul  id="place">
                        <li class="seat" style="top:0px;left:0px">1</li>
                        <li class="seat" style="top:0px;left:35px">2</li>
                        <li class="seat" style="top:0px;left:70px">3</li>
                        <li class="seat" style="top:0px;left:105px">4</li>
                        <li class="seat" style="top:0px;left:140px">5</li>
                        <li class="seat" style="top:0px;left:175px">6</li>
                        <li class="seat" style="top:0px;left:210px">7</li>
                        <li class="seat" style="top:0px;left:280px">8</li>
                        <li class="seat" style="top:0px;left:315px">9</li>
                        <li class="seat" style="top:0px;left:350px">10</li>
                        <li class="seat" style="top:0px;left:385px">11</li>
                        <li class="seat" style="top:0px;left:420px">12</li>
                        <li class="seat" style="top:0px;left:455px">13</li>
                        <li class="seat" style="top:0px;left:490px">14</li>
                        <li class="seat" style="top:35px;left:0px">15</li>
                        <li class="seat" style="top:35px;left:35px">16</li>
                        <li class="seat" style="top:35px;left:70px">17</li>
                        <li class="seat" style="top:35px;left:105px">18</li>
                        <li class="seat" style="top:35px;left:140px">19</li>
                        <li class="seat" style="top:35px;left:175px">20</li>
                        <li class="seat" style="top:35px;left:210px">21</li>
                        <li class="seat" style="top:35px;left:280px">22</li>
                        <li class="seat" style="top:35px;left:315px">23</li>
                        <li class="seat" style="top:35px;left:350px">24</li>
                        <li class="seat" style="top:35px;left:385px">25</li>
                        <li class="seat" style="top:35px;left:420px">26</li>
                        <li class="seat" style="top:35px;left:455px">27</li>
                        <li class="seat" style="top:35px;left:490px">28</li>
                        <li class="seat" style="top:70px;left:0px">29</li>
                        <li class="seat" style="top:70px;left:35px">30</li>
                        <li class="seat" style="top:70px;left:70px">31</li>
                        <li class="seat" style="top:70px;left:105px">32</li>
                        <li class="seat" style="top:70px;left:140px">33</li>
                        <li class="seat" style="top:70px;left:175px">34</li>
                        <li class="seat" style="top:70px;left:210px">35</li>
                        <li class="seat" style="top:70px;left:280px">36</li>
                        <li class="seat" style="top:70px;left:315px">37</li>
                        <li class="seat" style="top:70px;left:350px">38</li>
                        <li class="seat" style="top:70px;left:385px">39</li>
                        <li class="seat" style="top:70px;left:420px">40</li>
                        <li class="seat" style="top:70px;left:455px">41</li>
                        <li class="seat" style="top:70px;left:490px">42</li>
                        <li class="seat row-3" style="top:105px;left:0px">43</li>
                        <li class="seat row-3" style="top:105px;left:35px">44</li>
                        <li class="seat row-3" style="top:105px;left:70px">45</li>
                        <li class="seat row-3" style="top:105px;left:105px">46</li>
                        <li class="seat row-3" style="top:105px;left:140px">47</li>
                        <li class="seat row-3" style="top:105px;left:175px">48</li>
                        <li class="seat row-3" style="top:105px;left:210px">49</li>
                        <li class="seat row-3" style="top:105px;left:280px">50</li>
                        <li class="seat row-3" style="top:105px;left:315px">51</li>
                        <li class="seat row-3" style="top:105px;left:350px">52</li>
                        <li class="seat row-3" style="top:105px;left:385px">53</li>
                        <li class="seat row-3" style="top:105px;left:420px">54</li>
                        <li class="seat row-3" style="top:105px;left:455px">55</li>
                        <li class="seat row-3" style="top:105px;left:490px">56</li>
                        <li class="seat row-4" style="top:140px;left:0px">57</li>
                        <li class="seat row-4" style="top:140px;left:35px">58</li>
                        <li class="seat row-4" style="top:140px;left:70px">59</li>
                        <li class="seat row-4" style="top:140px;left:105px">60</li>
                        <li class="seat row-4" style="top:140px;left:140px">61</li>
                        <li class="seat row-4" style="top:140px;left:175px">62</li>
                        <li class="seat row-4" style="top:140px;left:210px">63</li>
                        <li class="seat row-4" style="top:140px;left:280px">64</li>
                        <li class="seat row-4" style="top:140px;left:315px">65</li>
                        <li class="seat row-4" style="top:140px;left:350px">66</li>
                        <li class="seat row-4" style="top:140px;left:385px">67</li>
                        <li class="seat row-4" style="top:140px;left:420px">68</li>
                        <li class="seat row-4" style="top:140px;left:455px">69</li>
                        <li class="seat row-4" style="top:140px;left:490px">70</li>
                    </ul>    
                </div>
            </div>
        </div>
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
        
        function maxAllowedMultiselect(obj) {
            var maxAllowedCount = <?php echo $seatNum ?>;
            var selectedOptions = jQuery('#'+obj.id+" option[value!=\'\']:selected");
            if (selectedOptions.length >= maxAllowedCount) {
                if (selectedOptions.length > maxAllowedCount) {
                    selectedOptions.each(function(i) {
                        if (i >= maxAllowedCount) {
                            jQuery(this).prop("selected",false);
                        }
                    });
                }
                jQuery('#'+obj.id+' option[value!=\'\']').not(':selected').prop("disabled",true);
            } else {
                jQuery('#'+obj.id+' option[value!=\'\']').prop("disabled",false);
            }
        }
    </script>
</body>
</html>