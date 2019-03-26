<html>
<head>
    <title>Registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Work+Sans" rel="stylesheet">
    <link rel="shortcut icon" href="favicon.ico">
    <style type="text/css">
        body {
            background-image: url(slideShow5.jpg);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
    </style>
<body>
    <div id="navbar">      
        <a href="index.php"><img src="logo.jpg" alt="Logo" id="logo"></a>
    </div>
    <div class="regBox" style="height: 710px; top: 90%;">
        <img src="avatar.jpg" alt="background" class="avatar">
        <h1>Register Here</h1>
        <p style="font-weight: lighter; font-size: 11px; margin-top: 0; margin-bottom: 10px;">Please fill in this form to create an account.</p>
        <form action="regFormphp.php" method="post" name="regForm">
            <p>Full Name</p>
            <input type="text" name="fullName" id="fullName" placeholder="Enter your full name" required autocomplete="off">
            <p>Username</p>
            <p style="font-size: 10px; color: #790c0c; font-weight: lighter; display: inline; text-align: center; margin-top: 0" id="usernameValidation"></p>
            <input type="text" name="username" id="username" placeholder="Enter your username" required autocomplete="off" onkeyup="validateFields()">
            <p>Phone Number</p>
            <input type="tel" name="phNum" id="phNum" placeholder="Enter your phone number" maxlength="11" required autocomplete="off">
            <p>E-mail</p>
            <input type="email" name="email" id="email" placeholder="Enter your E-mail" required autocomplete="off">
            <p>Password</p>
            <p style="font-size: 10px; color: #790c0c; font-weight: lighter; display: inline; text-align: center; margin-top: 0" id="validPassword"></p>
            <input type="password" name="password" id="password" placeholder="Enter your password" autocomplete="off" onkeyup="validatePassword()" required>
            <p>Confirm Password</p>
            <p style="font-size: 10px; color: #790c0c; font-weight: lighter; display: inline; text-align: center; margin-top: 0" id="validConPassword"></p>
            <input type="password" name="conPassword" id="conPassword" placeholder="Re-enter your password" autocomplete="off" onkeyup="validatePassword()" required>
            <input type="submit" name="subBtn" id="subBtn" value="Sign Up" style="background: #790c0c">
            <p style="display: inline; font-weight: lighter; font-size: 11px; margin-top: 0; margin-bottom: 10px; color: dimgray">By creating an account you agree to our</p>
            <a href="terms.php" style="font-weight: bold" target="_blank">Terms & Privacy</a>
            <h1 style="color: dimgray; font-size: 13px; text-align: left; font-weight: normal; display: inline">Already have an account?</h1>
            <a href="form.php" style="font-weight: bold">LOGIN</a>
        </form>
    </div>
    <script type="text/javascript">
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
            if (document.body.scrollTop || document.documentElement.scrollTop) {
                document.getElementById("navbar").style.padding = "5px 5px";
            } else {
                document.getElementById("navbar").style.padding = "20px 10px";
            }
        }
        function validatePassword() {
            var password = regForm.password.value;
            var numExpression = /[0-9]/;
            var lowCaseExpression = /[a-z]/;
            var upCaseExpression = /[A-Z]/;
            var spCharExpression = /[_!@#$%&]/;
            if(password == "") {
                document.getElementById("validPassword").innerHTML = "";
            } else if(password != "") {
                if(password.length < 8) {
                    document.getElementById("validPassword").innerHTML = "Password must contain at least eight characters!";
                } else if(!numExpression.test(password) || !lowCaseExpression.test(password) || !upCaseExpression.test(password) || (!spCharExpression.test(password))) {
                    document.getElementById("validPassword").innerHTML = "Password must contain at least one number, one lower case letter, one upper case letter and one special character (_ ! @ # $ % &)";
                } else {
                    document.getElementById("validPassword").style.color = "green";
                    document.getElementById("validPassword").innerHTML = "Valid Password";
                }
            }
            var conPassword = regForm.conPassword.value;
            if(conPassword == "") {
                document.getElementById("validConPassword").innerHTML = "";
            } else if(password != conPassword) {
                document.getElementById("validConPassword").style.color = "#790c0c";
                document.getElementById("validConPassword").innerHTML = "Mismatching passwords!";
                conPassword.focus;
            } else if(password == conPassword) {
                document.getElementById("validConPassword").style.color = "green";
                document.getElementById("validConPassword").innerHTML = "Matching passwords";
            }
            if(password != conPassword) {
                document.getElementById("subBtn").style.disabled = "true";
            }
        }
    </script>
</body>
</head>
</html>