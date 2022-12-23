<?php
include 'config.php';

$query =
    'SELECT * FROM student INNER JOIN course ON student.course_id = course.c_id';

$result = mysqli_query($conn, $query);
if (!$result) {
    echo '<p>Error' . mysqli_error($conn) . '</p>';
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="style.css">

    <title>Student Information</title>
  </head>
  <body>

  
<div class="container-fluid"><br>
<div class="mt-5"></div>
<h3 class="text-center">Student Information :</h3>
<table>
  <tr>
    <th>S.ID</th>
    <th>Student Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Age</th>
    <th>Course</th>
    <th>Course Description</th>
    <th>Course Fee</th>
    <th>Action</th>
  </tr>
  
  <?php while ($row = mysqli_fetch_assoc($result)) { ?>
  <tr>
    <td><?php echo $row['s_id']; ?></td>
    <td><?php echo $row['s_name']; ?></td>
    <td><?php echo $row['s_email']; ?></td>
    <td><?php echo $row['s_password']; ?></td>
    <td><?php echo $row['s_age']; ?></td>
    <td><?php echo $row['c_name']; ?></td>
    <td><?php echo $row['c_des']; ?></td>
    <td><?php echo $row['c_fee']; ?></td>
    
    <td><a href="edit.php?id=<?php echo $row[
        's_id'
    ]; ?>" class="btn btn-success">Edit Student</a>
    &nbsp;<a href="delete.php?id=<?php echo $row[
        's_id'
    ]; ?>" class="btn btn-danger">Delete Student</a></td>
  </tr>






<?php } ?>
</table>
</div>



   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>