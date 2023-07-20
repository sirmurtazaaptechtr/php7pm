<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$cars = array("Volvo", "BMW", "Toyota");

$ageJText = json_encode($age);
$carsJText = json_encode($cars);

echo $ageJText . "<br />";
echo $carsJText . "<br />";


$theAge = json_decode($ageJText);

echo "<pre>";
print_r($theAge);
echo "</pre>";

foreach($theAge as $name=>$age){    
    echo "<p>Dear $name, you are $age years old.</p>";
}

// reading JSON file
$theJSON = file_get_contents('breakfast_menu.json');

$dataJSON = json_decode($theJSON);
echo "<pre>";
print_r($dataJSON->breakfast_menu->food[0]);
echo "</pre>";