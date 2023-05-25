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
        // echo "its working...";

        // for($x=1;$x<=15;$x++)
        // {
        //     if($x%2 !=  0)
        //     {
        //         // break;
        //         continue;
        //     }
        //     echo "<p>$x</p>"; 
        // }
        $num1 = 11;
        $num2 = 20;
        $flag = 1;
        for($num=$num1;$num<=$num2;$num++)
        {
            for($dvr=2;$dvr<$num;$dvr++)
            {                
                if($num%$dvr == 0)
                {
                    $flag = 0;
                    break;
                }
            }
            if($flag == 1)
            {
                echo "<p>$num</p>";
            }
            $flag = 1;
        }
        

        #__________________________________________________
        $tab = 7;
        $st = 1;
        $ed = 10;

        for($cnt = $st; $cnt <= $ed; $cnt++)
        {
            $mul = $tab*$cnt;
            echo "<p>$tab X $cnt = $mul</p>"; 
        }


        #__________________________________________________
    ?>
</body>
</html>