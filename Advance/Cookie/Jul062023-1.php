<?php
    $cookie_name = "myCookie";
    $cookie_value = "abcdefghijklmnopqrstuvwxyz";
    // setcookie(name, value, expire, path, domain, secure, httponly);
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookie</title>
</head>
<body>
    <?php 
    if(!isset($_COOKIE[$cookie_name])){
        echo "Cookie named '" . $cookie_name . "' is not set!";
    }else {
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }

    ?>
    
</body>
</html>