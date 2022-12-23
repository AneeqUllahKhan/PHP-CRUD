<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

  <?php
  include('config.php');
  $id = $_GET['id'];
  $query = "SELECT * FROM `student`WHERE`s_id`='$id'";
  $result = mysqli_query($conn, $query);

  $row = mysqli_fetch_row($result);

  if (isset($_POST['submit'])) {

    $name = $_POST['name'];
    $message = $_POST['message'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];


    $squery = "UPDATE `student` SET `s_name`='$name',`s_email`='$email',`s_password`='$subject',`s_age`='$message' WHERE `s_id`='$id'";

    $sreult = mysqli_query($conn, $squery);

    if ($sreult) {
      header('location:view.php');
    } else {
      echo "</p> Error" . mysqli_error($conn) . "</p>";
    }
  }



  ?>

  <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
    <form method="post">
      <div class="row">
        <div class="form-group col-md-6">
          <label for="name">Your Name</label>
          <input type="text" name="name" class="form-control" id="name" required value="<?php echo $row[1] ?>">
        </div>
        <div class="form-group col-md-6">
          <label for="name">Your Email</label>
          <input type="email" class="form-control" name="email" id="email" required value="<?php echo $row[2] ?>">
        </div>
      </div>
      <div class="form-group">
        <label for="name">Password</label>
        <input type="text" class="form-control" name="subject" id="subject" required value="<?php echo $row[3] ?>">
      </div>
      <div class="form-group">
        <label for="name">Age</label>
        <input class="form-control" name="message" rows="10" required value="<?php echo $row[4] ?>" />
      </div>

      <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
    </form>
  </div>

</body>

</html>