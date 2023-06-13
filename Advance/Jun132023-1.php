<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<p>Today is " . date("d-m-Y") . "</p>";
        echo "<p>Today is " . date("Y/m/d") . "</p>";
        echo "<p>Today is " . date("d.m.Y") . "</p>";
        echo "<p>Today is " . date("l") . "</p>";
        echo "<p>Today is " . date('l, d F Y') . "</p>";
        echo "<p>Today is " . date('l, F d, Y') . "</p>";
        echo "<p>Time is " . date('h:i:s a') . "</p>";
        
        date_default_timezone_set("Asia/Karachi");

        echo "<p>Time is " . date('h:i:s a') . "</p>";

        $dob = mktime(18, 29, 54, 7, 03, 1983);//mktime(hour, minute, second, month, day, year)
        echo "<p>My date of birth is " . date("l, F d, Y @ h:i:sa", $dob). "</p>";

        $str = "08:47pm June 13 2014";
        $dt = strtotime($str);
        echo "<p>The date is " . date("l, F d, Y @ h:i:sa", $dt) . "</p>";

        $str = "Tomorrow";
        $dt = strtotime($str);
        echo "<p>The date is " . date("l, F d, Y @ h:i:sa", $dt) . "</p>";
       
        $str = "Next Sunday";
        $dt = strtotime($str);
        echo "<p>The date is " . date("l, F d, Y @ h:i:sa", $dt) . "</p>";

       
        $str = "+3 Months";
        $dt = strtotime($str);
        echo "<p>The date is " . date("l, F d, Y @ h:i:sa", $dt) . "</p>";

        $startdate = strtotime("Sunday");
        $enddate = strtotime("+6 weeks", $startdate);
        while ($startdate < $enddate) {
            echo date("M d", $startdate) . "<br>";
            $startdate = strtotime("+1 week", $startdate);
        }



                
    ?>
    
</body>
</html>