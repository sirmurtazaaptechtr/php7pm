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
        $txt1 = "Hello";
        $txt2 = "World!";
        echo $txt1 . " " . $txt2 . "<br />";
        echo $txt1 . "<br />";
        echo $txt2 . "<br />";        
        $txt1 .= " ";
        $txt1 .= $txt2;        
        echo $txt1 . "<br />";
        echo $txt2 . "<br />";
        // $arr1 = [27,24,25,17];
        // $arr2 = [19,17,18,20,21,22,20,19];
        $arr1 = ["Anas"=>27,"Dua"=>24,"Asad"=>25,"Nabeel"=>17];
        $arr2 = ["Taha"=>19,"Saad"=>17,"Hamza"=>18,"Shayan"=>20,"Mavia"=>21,"Tooba"=>22,"Alyan"=>20,"Jahanzeb"=>19];
        $arr3 = ["Anas"=>27,"Asad"=>25,"Nabeel"=>17,"Dua"=>24];
        $arr4 = ["Anas"=>27,"Dua"=>"24","Asad"=>25,"Nabeel"=>17];
        $res = $arr1 + $arr2; // Union
        echo "<pre>";
        print_r($res);
        echo "</pre>";
        // var_dump($res);
        var_dump($arr1==$arr2);
        echo "<br />";
        var_dump($arr1==$arr3);
        echo "<br />";
        var_dump($arr1===$arr3);
        echo "<br />";
        var_dump($arr1===$arr4);
        echo "<br />";
        $num = 20;
        $msg = $num % 2 == 0 ? "$num is Even" : "$num is Odd";
        echo $msg . "<br />";
        $db_age = null;
        $age = $db_age ?? " ___ ";
        echo "You are $age years old. <br />";

        $age = 17;

        if($age >= 18){
            echo "<p>You are eligible for DL</p>";
        }elseif(18-$age == 1){
            echo "<p>You will be eligible for DL after " . 18-$age . " year</p>";
        }else{
            echo "<p>You will be eligible for DL after " . 18-$age . " years</p>";
        }        
        
        echo date_default_timezone_get() . "<br />";

        date_default_timezone_set("Asia/Karachi");
        
        echo date_default_timezone_get() . "<br />";
        
        $time = date("H");
        // echo $time;
        if($time < 10){
            echo "Good Morning!";
        }elseif($time < 20){
            echo "Good Day!";
        }else{
            echo "Good Night!";
        }
    ?>    
</body>
</html>