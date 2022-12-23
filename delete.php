
<?php

include("config.php");

$id = $_GET['id'];

$query = "DELETE FROM `student` WHERE `s_id` = '$id'";
$squery = "DELETE FROM `course` WHERE `c_id` = '$id'";

$result1 = mysqli_query($conn, $query);
$result2 = mysqli_query($conn, $squery);

if ($result1 === FALSE || $result2 === FALSE) {
    echo "<script>alert('Error :" . mysqli_error($conn) . "');</script>";
} else {
    header("location:view.php");
}



?>