<?php
 require('config.php');
 $cquery = "SELECT * FROM `course`";
 $cresult = mysqli_query($conn,$cquery);

 if(isset($_POST['submit'])) {
    $name = $_POST['std_name'];
    $email = $_POST['std_email'];
    $password = $_POST['std_password'];
    $age = $_POST['std_age'];
    $select = $_POST['std_select'];


    $sql = "INSERT INTO `student`( `s_name`, `s_email`, `s_password`, `s_age`, `course_id`) VALUES ('$name','$email','$password','$age','$select')";

    if ($conn->query($sql) == true) {
        echo '<p>Submit Successfully!</p>';
    } else {
        echo 'Error' . $sql . '</br>' . $conn->error;
    }
  
    $conn->close();
    
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Student Form</title>
</head>

<body>
    <div class="container">
        <div class="mt-5"></div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h3 class="text-muted">Student Course Selection:</h3>
                <form method="POST">
                    <div class="mb-3 mt-3">
                        <label for="std-name" class="form-label">Student Name:</label>
                        <input type="text" class="form-control" placeholder="Enter your name" name="std_name">
                    </div>
                    <div class="mb-3">
                        <label for="std_email" class="form-label">Email:</label>
                        <input type="email" class="form-control"  placeholder="Enter your email" name="std_email">
                    </div>
                    <div class="mb-3">
                        <label for="std_password" class="form-label">Password:</label>
                        <input type="password" class="form-control"  placeholder="Enter your password" name="std_password">
                    </div>
                    <div class="mb-3">
                        <label for="std_age" class="form-label">Age:</label>
                        <input type="text" class="form-control"  placeholder="Enter your age" name="std_age">
                    </div>

                    <div class="mb-3">
                        <label for="std_select" class="form-label">Select Your Course</label>
                        <select name="std_select" id="" class="form-select">-- Select Your Course --<?php 
                        while($row= mysqli_fetch_assoc($cresult)){
                        ?>
                        <option value="<?php echo $row['c_id'];?>"><?php echo $row['c_name'];?></option>
                        <?php }?></select>
                    </div>
                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>

            </div>
            <div class="col-lg-4"></div>
        </div>

        
    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>