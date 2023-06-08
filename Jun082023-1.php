<?php
    $name = $email = $website = $comment = $gender = "";
    $nameerror = $emailerror = $gendererror = $websiteerror = "";

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
            if(!preg_match("/^[a-zA-Z-' ]*$/",$name))
            {
                $nameerror = "Only letters and white space allowed";
            }
        }
        if(empty($_POST["email"])){
            $emailerror = "E-Mail is required";
        }else{
            $email = cleandata($_POST["email"]);
            if(!filter_var($email,FILTER_VALIDATE_EMAIL))
            {
                $emailerror = "Invalid email format";                
            }
        }
        if(empty($_POST["website"])){
            $website = "";
        }else{
            $website = cleandata($_POST["website"]);
            if(!filter_var($website,FILTER_VALIDATE_URL)){
                $websiteerror = "Invalid URL";
            }
        }
        if(empty($_POST["comment"])){
            $comment = "";
        }else{
            $comment = cleandata($_POST["comment"]);
        }
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
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        <span>* <?php echo $nameerror;?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email;?>">
        <span>* <?php echo $emailerror;?></span>
        <br><br>
        Website(URL): <input type="text" name="website" value="<?php echo $website;?>">
        <span> <?php echo $websiteerror;?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40">
            <?php echo $comment;?>
            </textarea><br><br>
        Gender:
            <input type="radio" name="gender" value="female"<?php if(isset($gender)&& $gender == "female"){echo "checked";}?>>Female
            <input type="radio" name="gender" value="male"<?php if(isset($gender)&& $gender == "male"){echo "checked";}?>>Male
            <input type="radio" name="gender" value="other"<?php if(isset($gender)&& $gender == "other"){echo "checked";}?>>Other
            <span>* <?php echo $gendererror;?></span>
            <br><br>
            <input type="submit" value="Send">
    </form>
    <div>
        <?php            
            if(empty($nameerror) && empty($emailerror) && empty($websiteerror) && empty($gendererror))
            {
                echo "<h2>Output</h2>";
                echo "<ul>
                    <li><b>Name : </b>$name</li>
                    <li><b>E-mail : </b>$email</li>
                    <li><b>Website : </b>$website</li>
                    <li><b>Comment : </b>$comment</li>
                    <li><b>Gender : </b>$gender</li>
                </ul>";
            }else {
                echo "<h4>No Output - The form contains errors</h4>";
            }
        ?>
    </div>
</body>
</html>