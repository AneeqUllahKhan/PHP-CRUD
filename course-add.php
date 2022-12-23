<?php
 require('config.php');

 if(isset($_POST['submit'])) {
    $name = $_POST['crs_name'];
    $des = $_POST['crs_des'];
    $fee = $_POST['crs_fee'];

    $sql = "INSERT INTO `course`(`c_name`, `c_des`, `c_fee`) VALUES ('$name','$des','$fee')";

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
    <title>Course Form</title>
</head>

<body>
    <div class="container">
        <div class="mt-5"></div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <h3 class="text-muted">Course Addition:</h3>
                <form method="POST">
                    <div class="mb-3 mt-3">
                        <label for="crs-name" class="form-label">Course Name:</label>
                        <input type="text" class="form-control" placeholder="Enter course name" name="crs_name">
                    </div>
                    <div class="mb-3">
                        <label for="crs_des" class="form-label">Course Description:</label>
                        <input type="text" class="form-control"  placeholder="Enter course description" name="crs_des">
                    </div>
                    <div class="mb-3">
                        <label for="crs_fee" class="form-label">Course Fees</label>
                        <input type="text" class="form-control"  placeholder="Enter course fees" name="crs_fee">
                    </div>
                    <button type="submit" class="btn btn-success" name="submit">Submit</button>
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