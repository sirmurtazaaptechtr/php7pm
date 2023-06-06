<?php
    $name = $email = $website = $comment = $gender = "";
    function cleanData ($input){
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }        
    // echo cleanData($_SERVER["PHP_SELF"]);
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
    <form action="<?php echo cleanData($_SERVER["PHP_SELF"])?>" method="post">
    Name: <input type="text" name="name"><br><br>
    E-mail: <input type="text" name="email"><br><br>
    Website: <input type="text" name="website"><br><br>
    Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
    Gender:
    <input type="radio" name="gender" value="female">Female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other<br><br>
    <input type="submit" value="Send">
    </form>
    <?php
        if($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = cleanData($_POST['name']);
            $email = cleanData($_POST['email']);
            $website = cleanData($_POST['website']);
            $comment = cleanData($_POST['comment']);
            $gender = cleanData($_POST['gender']);
        }else {
            $name = cleanData($_GET['name']);
            $email = cleanData($_GET['email']);
            $website = cleanData($_GET['website']);
            $comment = cleanData($_GET['comment']);
            $gender = cleanData($_GET['gender']);

        }
        echo "<h2>Output</h2>";
        echo "<p>Name : $name</p>";
        echo "<p>E-mail : $email</p>";
        echo "<p>Website : $website</p>";
        echo "<p>Comment : $comment</p>";
        echo "<p>Gender : $gender</p>";
    ?>
</body>
</html>