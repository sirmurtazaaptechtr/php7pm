<?php
    declare(strict_types=1); // strict requirement
    function writeMsg() {
        echo "<p>Hello world!</p>";
    }
    writeMsg();

    function sqrer(int $number = 2)
    {
        echo "<p>" . $number*$number . "</p>";
    }
    sqrer(17);

    function  sum(int $number1,int $number2){
        echo "<p>" . $number1+$number2 . "</p>";
    }
    sum(4,7);

    function familyName($fname) {
        echo "$fname Shaikh.<br>";
    }
    familyName("Saleem");
    familyName("Jamal");
    familyName("Akram");
    familyName("Saad Ali");
    familyName("Sana");
    sqrer();

    function mod($number,$divisor) : int{
        return $number%$divisor;
    }

    $res = mod(11,2);
    echo "<p>$res</p>";

    echo '<p>' . mod(17,3) . '</p>';