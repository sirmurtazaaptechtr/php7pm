<?php
    $name = $email = $website = $comment = $gender = "";
    $nameerror = $emailerror = $gendererror = "";

    function cleandata($input){
        $input = htmlspecialchars($input);
        $input = trim($input);
        $input = stripslashes($input);
        return $input;
    }

    if($_SERVER["REQUEST_METHOD"] == 'POST')
    {
        if(empty($_POST["name"])){                    
            $nameerror = "Name is required";
        }else{
            $name = cleandata($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $emailerror = "E-Mail is required";
        }else{
            $email = cleandata($_POST["email"]);
        }
        $website = cleandata($_POST["website"]);
        $comment = cleandata($_POST["comment"]);
        if(empty($_POST["gender"])){
            $gendererror = "Gender is required";
        }else{
            $gender = cleandata($_POST["gender"]);
        }
    }     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form span {
            color: red;
        }
    </style>
</head>
<body>
    <form action="<?php echo cleandata($_SERVER["PHP_SELF"]);?>" method="post">
        <span>* required field</span><br><br>
        Name: <input type="text" name="name">
        <span>* <?php echo $nameerror;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span>* <?php echo $emailerror;?></span>
        <br><br>
        Website: <input type="text" name="website"><br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea><br><br>
        Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span>* <?php echo $gendererror;?></span>
            <br><br>
            <input type="submit" value="Send">
    </form>
    <div>
        <?php
            echo "<h2>Output</h2>";
            echo "<ul>
                <li><b>Name : </b>$name</li>
                <li><b>E-mail : </b>$email</li>
                <li><b>Website : </b>$website</li>
                <li><b>Comment : </b>$comment</li>
                <li><b>Gender : </b>$gender</li>
            </ul>";
        ?>
    </div>
</body>
</html>