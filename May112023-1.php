<?php
    $tilte = "Welcome to First WebApp";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $tilte ?></title>
</head>
<body>
    <?php
        echo "<h1>Welcome to my first PHP-Web-Application</h1>";

        $number = 255;

        echo "My Number is " . $number . "<br>";
        echo "My Number is $number <br>";

        // Single Line Comment
        # another way to write single line comment

        /*
        this is
        a Multiline 
        comment
        */

        # You can also use comments to leave out parts of a code line

        $exp = 5 /*+ 15 */+ 10;

        echo "The result is " . $exp ."<br>";

        $pLang = "PHP";

        echo "I am learning $pLang <br>";

        echo "it is fun to learn $pLang <br>";


        function myfun ($name)
        {
            global $z;
            echo "<p>This function is executed by $name</p>";
            static $x = 5;
            $y = 10;
            $z = "I am Free";
            $x++; // $x = $x + 1;            
            $y-=4; // $y = $y - 4;

            echo "X = $x  & Y = $y <br>";
            echo "z = $z <br>";

        }

        myfun("Ali Raza");
        myfun("Nabeel Shah");
        myfun("Tooba Jawaid");

        echo $z;
        
    ?>    
</body>
</html>