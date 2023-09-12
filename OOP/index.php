<?php
    require_once('Class/Employee.php');

    $emp1 = new PartTimeEmployee(15);
    $emp2 = new FullTimeEmployee(17);
    $emp3 = new Employee(25);

    $emp1->set_name("Saad");
    $emp1->set_age(17);
    $emp1->set_gender("male");
    $emp1->set_salary("$65");
    
    $emp2->set_name("Hamza");
    $emp2->set_age(18);
    $emp2->set_gender("male");
    $emp2->set_salary("$3500");
    
    $emp3->set_name("Mani");
    $emp3->set_age(19);
    $emp3->set_gender("male");

    echo $emp1->display_data();
    echo $emp2->display_data();
    echo $emp3->display_data();

    echo "<pre>";
    print_r($GLOBALS);
    echo "</pre>";