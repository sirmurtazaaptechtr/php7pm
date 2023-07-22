<?php
require('connection.inc.php');
require('functions.inc.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>

<body>


    <?php
    // define variables and set to empty values
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["name"])) {
            $nameErr = "Name is required";
        } else {
            $name = test_input($_POST["name"]);
            // check if name only contains letters and whitespace
            if (!preg_match("/^[a-zA-Z-' ]*$/", $name)) {
                $nameErr = "Only letters and white space allowed";
            }
        }

        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            // check if e-mail address is well-formed
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }

        if (empty($_POST["website"])) {
            $website = "";
        } else {
            $website = test_input($_POST["website"]);
            // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $website)) {
                $websiteErr = "Invalid URL";
            }
        }

        if (empty($_POST["comment"])) {
            $comment = "";
        } else {
            $comment = test_input($_POST["comment"]);
        }

        if (empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
    }


    ?>

    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name" value="<?php echo $name; ?>">
        <span class="error">* <?php echo $nameErr; ?></span>
        <br><br>
        E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
        <span class="error">* <?php echo $emailErr; ?></span>
        <br><br>
        Website: <input type="text" name="website" value="<?php echo $website; ?>">
        <span class="error"><?php echo $websiteErr; ?></span>
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"><?php echo $comment; ?></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "female") echo "checked"; ?> value="female">Female
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "male") echo "checked"; ?> value="male">Male
        <input type="radio" name="gender" <?php if (isset($gender) && $gender == "other") echo "checked"; ?> value="other">Other
        <span class="error">* <?php echo $genderErr; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <input type="reset" name="reset" value="Clear">
    </form>
    <?php
    if (isset($_GET['type'])) {
        if (test_input($_GET['type']) == 'delete') {
            $delID = test_input($_GET['id']);
            $delete_sql = "DELETE FROM `formstbl` WHERE ID = $delID";
            mysqli_query($conn, $delete_sql);
        }
    }
    if (isset($_POST['submit'])) {
        if (empty($nameErr) && empty($emailErr) && empty($genderErr) && empty($websiteErr)) {
            // this block will be executed when there is no error in the form

            $submit_sql = "INSERT INTO `formstbl` (`Name`, `Email`, `Website`, `Comment`, `Gender`) VALUES ('$name', '$email', '$website', '$comment', '$gender')";
            mysqli_query($conn, $submit_sql);
        }
    }    
    $display_sql = "SELECT * FROM `formstbl` ORDER BY `Name`";
    $res = mysqli_query($conn, $display_sql);
    pr($_GET);      
    ?>
    <table border="1">
        <thead>
            <tr>
                <th>Sr.no</th>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Email</th>
                <th>Website</th>
                <th>Comment</th>
                <th>Date Modified</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $srno = 1;
            while ($rows = mysqli_fetch_assoc($res)) {
                echo "<tr>";
                echo "<td>" . $srno . "</td>";
                echo "<td>" . $rows['ID'] . "</td>";
                echo "<td>" . $rows['Name'] . "</td>";
                echo "<td>" . $rows['Gender'] . "</td>";
                echo "<td>" . $rows['Email'] . "</td>";
                echo "<td>" . $rows['Website'] . "</td>";
                echo "<td>" . $rows['Comment'] . "</td>";
                echo "<td>" . $rows['Date'] . "</td>";
                echo '<td><a href="?type=delete&id=' . $rows['ID'] . '">Delete</a></td>';
                echo "</tr>";
                $srno++;
            }            
            ?>
        </tbody>
    </table>
</body>
</html>