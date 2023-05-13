<?php
    $title = "echo and print";
    $txt1 = "Learn PHP";
    $txt2 = "W3Schools.com";
    $x = 5;
    $y = 4;
    $pVal = 0;    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
</head>
<body>
    <?php
        echo "Php is working...";
        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";

        echo "<h2>" . $txt1 . "</h2>";
        echo "<h2>$txt1</h2>";
        echo "Study PHP at " . $txt2 . "<br>";
        echo "Study PHP at  $txt2 <br>";
        echo $x + $y . "<br>";
        echo $x - $y . "<br>";
        echo $x * $y . "<br>";
        echo $x / $y . "<br>";

        
        echo $pVal . "<br>";

        $pVal = print "This statement is displayed by print function. <br>";
        echo $pVal . "<br>";

        $data = "Asad Azam";
        var_dump($data);
        echo "<br>";
        $data = 15;
        var_dump($data);
        echo "<br>";
        $data = 22.7;
        var_dump($data);
        echo "<br>";
        $data = true;
        var_dump($data);
        echo "<br>";
        echo($data);
        echo "<br>";
        $data = false;
        var_dump($data);        
        echo "<br>";
        echo($data);
        echo "<br>";
        $data = array("Dua","Anas","Nabeel","Saad","Hamza","Jahanzaib","Mavia","Tooba","Asad","Zubair");
        var_dump($data);
        echo "<br>";
        
        $data = null;
        var_dump($data);
        echo "<br>";
        
        $str = "Syed Mavia Ali";
        
        $length = strlen($str);
        
        echo '"' . $str. '"' . " has " . $length . " characters in it.<br>";
        
        $wc = str_word_count($str);
        
        echo '"' . $str. '"' . " has " . $wc . " words in it.<br>";
        
        $rev = strrev($str);

        echo "Mirror of $str is $rev <br>";
        
        $str = "Hello this is world! in new world";
        
        $pos = strpos($str,"world");
        var_dump($pos);
        echo "<br>";
        $pos = strpos($str,"AliBaba");
        var_dump($pos);
        echo "<br>";

        $repdStr = str_replace("world","car",$str);

        echo $repdStr . "<br>";


        var_dump(2+2);
        echo "<br>";
        var_dump(2.5*4);
        echo "<br>";
        var_dump(1/2);
        echo "<br>";
        
        echo PHP_INT_MAX;
        echo "<br>";
        echo PHP_INT_MIN;
        echo "<br>";
        echo PHP_INT_SIZE;
        echo "<br>";
        
        
        $var = 10;
        $res = is_int($var);
        var_dump($res);
        echo "<br>";

        echo PHP_FLOAT_MAX;
        echo "<br>";
        echo PHP_FLOAT_MIN;
        echo "<br>";
        echo PHP_FLOAT_DIG;
        echo "<br>";
        echo PHP_FLOAT_EPSILON;
        echo "<br>";

        $var = 10.365;
        var_dump(is_float($var));
        








    ?>    
</body>
</html>