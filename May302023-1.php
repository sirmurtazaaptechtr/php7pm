<?php
    // $student = "Taha";
    // $student = "Tooba";
    $students = ["Taha","Tooba","Saad","Dua"];
    // $students = array("Taha","Tooba","Saad","Dua");
    $ages = ["Taha"=>19,"Tooba"=>22,"Saad"=>17,"Dua"=>24];
    // $ages = array("Taha"=>19,"Tooba"=>22,"Saad"=>17,"Dua"=>24);

    $data = array(15,"Ali",true,null,array(10,20,30),array("Ali","Sana","Tooba"));

    echo "<p>".$data[4][1]."</p>" ;
    echo "<p>".$data[5][1]."</p>" ;

    function myFun(){
        global $p,$q,$r;
        $p = 12;
        $q = 17;
        $r = 20; 
    }
    myFun();

    // echo "<p>$r</p>";
?>
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
    // echo "<p>$student</p>";
    // $students = []; // empty array
    $len = count($students);
    echo "<p>we have $len elements in the array</p>";
    // echo "<p>$students[0]</p>";
    // echo "<p>$students[1]</p>";
    foreach($students as $student){
        echo "<p>$student</p>";
    }
    // asort($ages);
    krsort($ages);
    foreach($ages as $name=>$age){
        echo "<p>Dear $name, you are $age years old.</p>";
    }

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";

    echo "<p>".$GLOBALS["p"]."</p>";
    echo "<p>".$GLOBALS["q"]."</p>";
    echo "<p>".$GLOBALS["r"]."</p>";
    
?>
</body>
</html>