<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "course";

$conn = new mysqli($servername, $username, $password, $db_name);

if($conn->connect_error){
    die ("Connection Error".$conn->connect_error);
}
// echo ("Connection Succefully")





?>