<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "northwind";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    echo "<p>$database connected successfully";
}