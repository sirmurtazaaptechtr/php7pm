<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo "Welcome to my php website"; ?></title>
</head>
<body>
    <?php

        ECHO "Hello World!";

        $num1 = 15;
        $num2 = 5;

        $res = $num1 / $num2;
        eChO "<h1>this is php file</h1>";
        echo "<h2>" . "$num1 / $num2 = $res" . "</h2>";

        $color = "red";
        echo "My car is " . $color . "<br>";
        // echo "My house is " . $COLOR . "<br>";
        # echo "My boat is " . $coLOR . "<br>";

        /*
        This is a multiple-lines comment block
        that spans over multiple
        lines
        */

        // You can also use comments to leave out parts of a code line
        $x = 5 +/* 15 */+ 5;
        echo $x;

        $txt = "Hello world!";
        $a = 5;
        $b = 10.5;

        $txt2 = "Aptech Learning";

        echo "<br> I am studying PHP at $txt2";


    ?>

    
    
</body>
</html>