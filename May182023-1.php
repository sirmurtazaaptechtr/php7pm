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
        # echo "Php is working...";

        $num1 = 15;
        $num2 = 5;

        echo "$num1 % $num2 = " . $num1%$num2 . "<br />";
        echo "$num1 ^ $num2 = " . $num1**$num2 . "<br />";
        
        echo '($num1,$num2) = '. "($num1,$num2)" . "<br />";
        
        $num1 = $num2;        
        echo 'After $num1 = $num2; ($num1,$num2) = '. "($num1,$num2)" . "<br />";

        $num1 += $num2;        
        echo 'After $num1 += $num2; ($num1,$num2) = '. "($num1,$num2)" . "<br />";

        $num1 -= $num2;        
        echo 'After $num1 -= $num2; ($num1,$num2) = '. "($num1,$num2)" . "<br />";

        $num1 *= $num2;        
        echo 'After $num1 *= $num2; ($num1,$num2) = '. "($num1,$num2)" . "<br />";

        $num1 /= $num2;        
        echo 'After $num1 /= $num2; ($num1,$num2) = '. "($num1,$num2)" . "<br />";

        $num1 %= $num2;        
        echo 'After $num1 %= $num2; ($num1,$num2) = '. "($num1,$num2)" . "<br />";
        
        echo var_dump($num1==$num2) . ' when $num1 == $num2 ' .  "<br />";
        echo var_dump($num1<>$num2) . ' when $num1 <> $num2 ' .  "<br />";
        echo var_dump($num1!=$num2) . ' when $num1 != $num2 ' .  "<br />";
        
        $num1 = '5';
        $num2 = 5;

        echo 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br /><br />";
        
        echo var_dump($num1===$num2) . ' when $num1 === $num2 ' .  "<br />";
        echo var_dump($num1!==$num2) . ' when $num1 !== $num2 ' .  "<br />";
        echo var_dump($num1<$num2) . ' when $num1 < $num2 ' .  "<br />";
        echo var_dump($num1>$num2) . ' when $num1 > $num2 ' .  "<br />";
        echo var_dump($num1<=$num2) . ' when $num1 <= $num2 ' .  "<br />";
        echo var_dump($num1>=$num2) . ' when $num1 >= $num2 ' .  "<br />";

        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";
        echo var_dump($num1<=>$num2) . ' when $num1 <=> $num2 ' .  "<br />";
        
        $num1 = 15;
        $num2 = 5;
        
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";
        echo var_dump($num1<=>$num2) . ' when $num1 <=> $num2 ' .  "<br />";
        
        $num1 = 5;
        $num2 = 15;
        
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";
        echo var_dump($num1<=>$num2) . ' when $num1 <=> $num2 ' .  "<br />";
        
        
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";        
        echo "++$num1 + $num2 = " . ++$num1 + $num2 . "<br />"; 
       
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";        
        echo "$num1++ + $num2 = " . $num1++ + $num2 . "<br />"; 
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";        
       
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";        
        echo "--$num1 + $num2 = " . --$num1 + $num2 . "<br />"; 
       
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";        
        echo "$num1-- + $num2 = " . $num1-- + $num2 . "<br />"; 
        echo "$num1-- + $num2 = " . $num1-- + $num2 . "<br />"; 
        echo "<br/>" . 'Assume($num1,$num2) = '. "($num1,$num2)" . "<br />";
        
        $a = false;
        $b = false;
        echo var_dump($a) . var_dump($b) . var_dump($a&&$b) . "<br />"; 
        echo var_dump($a) . var_dump($b) . var_dump($a||$b) . "<br />"; 
        echo var_dump($a) . var_dump($b) . var_dump($a xor $b) . "<br />"; 

        
        
        

                
        
    ?>
    
</body>
</html>