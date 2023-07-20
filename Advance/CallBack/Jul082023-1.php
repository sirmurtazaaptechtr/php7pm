<?php
    function arrPrint($data)
    {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    function calclenofSting($str) {
        return strlen($str);
    }
    $len = calclenofSting("Syed Murtaza Hussain");
    echo $len;

    $names = ["Ahmed","Anas","Dua","Tooba"];
    $copyNames = array_map(function($name){
        return "Dr. $name";
    },$names);
    arrPrint($copyNames);

    $lengths = array_map("calclenofSting",$names);    
    arrPrint($lengths);
    
