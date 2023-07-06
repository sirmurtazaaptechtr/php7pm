<?php
    echo "<pre>";
    print_r(filter_list());
    echo "</pre>";

    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Sr.no.</th>
                <th>Filter Name</th>
                <th>Filter ID</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $srno = 1;
                foreach (filter_list() as $id =>$filter) {
                    echo '<tr><td>' . $srno . '</td><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
                    $srno++;
                }               
            ?>            
        </tbody>
    </table>
    <?php
        //Sanitize a String
        $str = "<h1>Hello World!</h1>";
        // echo $str;
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo "<p>$newstr</p>";
        
        // Validate an Integer
        // $int = 100;
        $int = "Ali Raza";

        if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
          echo("<p>$int Integer is valid</p>");
        } else {
          echo("<p>$int Integer is not valid</p>");
        }
    ?>
</body>
</html>