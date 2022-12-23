<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php
if(isset($_POST['submit']))
{


$servername = "localhost";
$username = "root";
$password = "";
$database = "my_database";

$conn = new mysqli($servername, $username, $password);

if($conn->connect_error)
{
    die("Connection Failed: " . $conn->connect_error);
}

 /* $db_name = $_POST['db']; */

/* $sql = "CREATE DATABASE $db_name"; */
/* $sql = "CREATE TABLE table_2
(
u_id int AUTO_INCREMENT PRIMARY KEY,
    user_name varchar(22),
    passcode varchar(20)

)"; */

if ($conn->query($sql) === true)
{
    echo "DONE";
}
else{
    echo "Error" . $conn->error;
}
$conn->close ();
}
?>

<!-- <form method="POST">
    <label for="db">Database</label>
    <input type="text" name="db"> <br>

    <input type="submit" name="submit">
</form> -->
</body>
</html>