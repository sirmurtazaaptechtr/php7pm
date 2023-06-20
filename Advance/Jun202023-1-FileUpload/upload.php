<?php
$target_dir = "image/";

// echo "<pre>";
// print_r($_FILES);
// echo "</pre>";

// echo $target_dir;
// echo "<br />";
// echo $_FILES["fileToUpload"]["name"];
// echo "<br />";
// echo  basename($_FILES["fileToUpload"]["name"]);
// echo $target_dir . basename($_FILES["fileToUpload"]["name"]);


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
// echo strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image