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
    $pattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/i";
    $str = "Visit Aptech Learning";
    $pattern = "/Aptech Learning/i";
    echo preg_match($pattern, $str)."<br />"; //Returns 1 if the pattern was found in the string and 0 if not

    $str = "The rain in SPAIN falls mainly on the plains.";
    $pattern = "/ain\b/i";
    echo preg_match_all($pattern, $str)."<br />"; //Returns the number of times the pattern was found in the string, which may also be 0

    $str = "Visit Microsoft!";
    $pattern = "/microsoft/i";
    echo preg_replace($pattern, "Aptech Learning", $str)."<br />"; //Returns a new string where matched patterns have been replaced with another string

    $str = "Apples and bananas.";
    $pattern = "/ba(na){2}/i";
    echo preg_match($pattern, $str)."<br />"; 

    $str = "My name is Syed Murtaza Hussain where Hussain is my family name. I can write Hussain with multiple spellings like Hosain, Husain, Hossain, Hussain etc.";
    $pattern = "/\bh[ou]s{1,2}ain\b/i";

    echo preg_match_all($pattern,$str)."<br />";
    
?>    
</body>
</html>