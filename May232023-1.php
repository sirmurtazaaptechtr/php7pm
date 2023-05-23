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
        $favColor = "black";
        switch($favColor){
            case "red":
                echo "You have selected $favColor";
            break;
            case "green":
                echo "You have selected $favColor";
            break;
            case "blue":
                echo "You have selected $favColor";
            break;
            case "pink":
                echo "You have selected $favColor";
            break;
            default:
                echo "Unable to find $favColor";
            break;
        }

        $alphabet = 'e';
        switch($alphabet){
            case 'a':
            case 'e':
            case 'i':
            case 'o':
            case 'u':
            case 'A':
            case 'E':
            case 'I':
            case 'O':
            case 'U':
                echo "<p>$alphabet is a vowal.</p>";
            break;
            case 'z':
            case 'Z':
                echo "<p>$alphabet is consonent and last alphabet.</p>";
            break;
            default:
                echo "<p>$alphabet is consonent.</p>";
            break;
        }

        echo "<p>For Loop</p>";
        for($x=1;$x<=5;$x++)
        {
            echo "<p>$x. Syed Murtaza Hussain</p>";
        }
        
        echo "<p>While Loop</p>";
        $y = 1;
        while($y<=5)
        {
            echo "<p>$y. Syed Murtaza Hussain</p>";
            $y++;
        }
        
        echo "<p>do-While Loop</p>";
        $z = 1;
        do{
            echo "<p>$z. Syed Murtaza Hussain</p>";
            $z++;
        }while($z<=5);
        echo "<p>______________________________________________</p>";

        $arr1 = ["Anas"=>27,"Dua"=>24,"Asad"=>25,"Nabeel"=>17];
        $arr2 = ["Taha"=>19,"Saad"=>17,"Hamza"=>18,"Shayan"=>20,"Mavia"=>21,"Tooba"=>22,"Alyan"=>20,"Jahanzeb"=>19];
        $arr3 = $arr1+$arr2;
        
        // $cnt = 1;
        $cnt = 0;
        foreach($arr3 as $name=>$age)
        {
            echo "<p>".++$cnt.". Dear $name, you are $age years old.</p>";
            // $cnt++;
        }
        
        // echo "<pre>";
        // print_r($arr3);
        // echo "</pre>";
        ?>
</body>
</html>