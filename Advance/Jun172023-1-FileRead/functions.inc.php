<?php
    function pr ($arr=[]){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";    
    }
    function prx ($arr=[]){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";    
        die();
    }
?>