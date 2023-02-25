<?php
include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="./login.css">
</head>

<body>
    <form name="form" method = "POST" onsubmit="return isvalid()" action = "login.php">
        <h1>Login</h1>
        <div class="textbox">
            <input type="email" placeholder="Email" name="email">
        </div>
        <div class="textbox">
            <input type="password" placeholder="Password" name="pass">
        </div>
        <div>
            <input type="submit" value="Login" class="loginstyle" name="login_style">
        </div>
        <div class="register">
            Don't have an account?
            <br>
            <a href="./register.html">Register</a>
        </div>
    </form>
    <script>
            function isvalid(){
                var email = document.form.email.value;
                var pass = document.form.pass.value;
                if(email.length=="" && pass.length==""){
                    alert(" Email and password field is empty!!!");
                    return false;
                }
                else if(email.length==""){
                    alert(" Email field is empty!!!");
                    return false;
                }
                else if(pass.length==""){
                    alert(" Password field is empty!!!");
                    return false;
                }

            }
        </script>
</body>

</html>


