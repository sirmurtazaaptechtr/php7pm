<?php
    require('functions.inc.php');
    $cars = ["Suzuki","Honda","BMW","Toyota"];
    pr($cars);

    // include('header.inc.php');    

    // include('home.php');

    // include('footer.inc.php');

    $cc = readfile('abc.txt');

    echo "it has $cc characters in it.";

    $thefile = fopen('abc.txt',"a") or die("unable to open the file.");

    $content = "My name is Syed Murtaza Hussain";

    fwrite($thefile,$content);

    fclose($thefile);
?>

