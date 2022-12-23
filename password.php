<?php
 
    require('config.php');
    if(isset($_POST['submit'])){

        
    
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    $query =  "INSERT INTO s_password (username, `password`) VALUES ('$username','$password')";
    $result = mysqli_query($conn,$query);


    if( strlen($password) < 8){
        $pwdError = "Password is too short";
        
    }
    if( strlen($password) > 20){
        $pwdError = "Password is too long";
    }
    if( !preg_match("@[0-9]@", $password)){
        $pwdError = "Password include atleast one number";
    }  
    if( !preg_match("#[a-z]+#", $password)){
        $pwdError = "Password include atleast one letter";
    }
    if( !preg_match("#[A-Z]+#", $password)){
        $pwdError = "Password include atleast one uppercase";
    }
    if( !preg_match("#^\w#", $password)){
        $pwdError = "Password include atleast one symbol";
    }
    if( empty($pwdError)){
        if(preg_match("#^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$#", $password)){
           $pwdError = "Your Password is strong";
        }else{
            $pwdError = "Your Password is not safe";
        }
    }

    if ($conn->query($query) == true) {
        $sub_suc = "Submit Successfully";
    } else {
        echo 'Error' . $query . '</br>' . $conn->error;
    }
  
    $conn->close();



    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Condition</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<div class="container mt-5">
    
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
        <h5 class="text-success text-center" >Password Condition</h5>
        <hr class="dropdown-divider">

        <form action="" method="POST">

        <div class="mb-3 mt-3">
         <label for="username" class="form-label">Username</label>
         <input type="txt" class="form-control" placeholder="Enter your username" name="username">
        </div>
        <div class="mb-3">
           <label for="pwd" class="form-label">Password</label>
           <input type="password" class="form-control" placeholder="Enter your password" name="pwd">
           <?php
            echo $pwdError
           ?>
        </div>
        <div class="mb-3">
           <button name="submit" class="btn btn-success">Submit</button><br> <br>
           <?php
            echo $sub_suc
           ?>
        </div>
        </form>
        <div class="col-lg-4"></div>
    </div>
</div>
    
</body>
</html>