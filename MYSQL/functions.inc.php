<?php
    function pr($input){
        echo "<pre>";
        print_r($input);
        echo "</pre>";
    }
    function prx($input){
        echo "<pre>";
        print_r($input);
        echo "</pre>";
        die();
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    function get_safe_value($conn,$input){
        return mysqli_real_escape_string($conn,$input);
    }
?>