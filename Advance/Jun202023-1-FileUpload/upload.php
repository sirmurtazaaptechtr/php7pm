<?php
// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// echo $target_dir;
// echo "<br />";
// echo $_FILES["fileToUpload"]["name"];
// echo "<br />";
// echo  basename($_FILES["fileToUpload"]["name"]);
// echo $target_dir . basename($_FILES["fileToUpload"]["name"]);


$target_dir = "image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// echo strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if(isset($_POST["submit"])){
    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false){
        $uploadOk = 1;
        echo "File is an image - " . $check["mime"] . ".";
    }else {
        $uploadOk = 0;
        echo "File is not an image.";
    }
    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = 0;
    }
    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 3145728) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    }else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
            echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";

            array_push($imgBox,$target_file);
            foreach($imgBox as $image)
            {
                echo "<div><img src='$image'></div>";
            }
        }else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}