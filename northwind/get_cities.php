<?php
    require('connection.inc.php');

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $country = $_POST['country'];
        $sql = "SELECT DISTINCT `city` FROM `customers` WHERE `country` = '$country'";
        $res = mysqli_query($conn,$sql);

        $option = "<option selected>Select City</option>";
        while($rows = mysqli_fetch_assoc($res)){
            $option .= '<option value="'.$rows['city'].'">'.$rows['city'].'</option>';
        }
        echo $option;
    }
?>