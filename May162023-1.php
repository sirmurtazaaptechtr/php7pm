<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo INF . "<br />";
        echo PHP_FLOAT_MAX * 2 . "<br />";

        echo NAN . "<br />";
        echo log(-1) . "<br />";

        $number = 15;
        echo var_dump(is_finite($number)) . "<br />";
        
        $number = 55;
        echo var_dump(is_infinite($number)) . "<br />";

        $x = 5985;
        echo var_dump(is_numeric($x)) . "<br />";

        $x = "5985";
        echo var_dump(is_numeric($x)) . "<br />";

        $x = "59.85" + 100;
        echo var_dump(is_numeric($x)) . "<br />";

        $x = "Hello";
        echo var_dump(is_numeric($x)) . "<br />";

        $number = (int) 3.14159;

        echo var_dump($number) . "<br />";

        $str1 = (int) "22.7";
        $str2 = (float) "22.7";

        echo var_dump($str1) . "<br />";
        echo var_dump($str2) . "<br />";

        echo pi() . "<br />";
        echo min(0, 150, 30, 20, -8, -200) . "<br />";  // returns -200
        echo max(0, 150, 30, 20, -8, -200) . "<br />";  // returns 150

        echo abs(-79.28) . "<br />";

        echo sqrt(81) . "<br />";

        echo round(16.60) . "<br />";  // returns 17
        echo round(16.49) . "<br />";  // returns 16

        echo rand() . "<br />"; //generates random number between int-max and int-min
        echo rand(10,20) . "<br />";//generates random number between 10 and 20

        define("AUTHOR","Syed Murtaza Hussain");
        define("THECARS", ["Alfa Romeo","BMW","Toyota"]);

        echo "this script is written by " . AUTHOR . "<br />";

        echo THECARS[0] . "<br />";

        const ABC = "this constant is by const";       

        echo ABC . "<br />";

        $x = 15;
        $y = 1;

        $x = $y;
        $y = 3;
        echo $x . ", " . $y . "<br />";

        $x = &$y;
        $y = 14;
        echo $x . ", " . $y . "<br />";

        $data = "num";
        $$data = 15;
        echo $num;
        

    ?>
</body>
</html>