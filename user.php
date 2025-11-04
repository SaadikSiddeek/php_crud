<?php

include 'connect.php';

if (isset($_POST['submit'])) {

  if (empty($name) || empty($email) || empty($mobile) || empty($password)) {
    echo "<script>alert('All fields are required!');</script>";
  } else {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "insert into `crud`(name,email,mobile,password)
          values('$name','$email','$mobile','$password')";

    $result = mysqli_query($con, $sql);

    if ($result) {
      header('location:display.php');
    } else {
      die(mysqli_error($con));
    }
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Crud Operation</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>

  <div class="container my-5">
    <form method="post">

      <div class="mb-3">
        <label class="form-label">Name</label>
        <input type="text" class="form-control" placeholder="Enter your name..." name="name" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email" class="form-control" placeholder="Enter your email..." name="email" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label">Mobile</label>
        <input type="text" class="form-control" placeholder="Enter your mobile number..." name="mobile" autocomplete="off">
      </div>

      <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="text" class="form-control" placeholder="Enter your password..." name="password" autocomplete="off">
      </div>

      <button type="submit" class="btn btn-primary" name="submit">Submit</button>

    </form>
  </div>

</body>

</html>