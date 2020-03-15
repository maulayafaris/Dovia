<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Password</title>
    <link rel="stylesheet" href="resources/css/bootstrap.css">
    <link rel="stylesheet" href="resources/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="resources/css/login.css">

    <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- Mie Style -->
    <link rel="stylesheet" href="resources/floating-labels.css">
</head>
<?php
include "connect.php";

if (isset($_POST['next']) && $_POST['next'] == "Next") {
    $email = $_POST['email'];
    $newpass = $_POST['passwd'];

    $query = mysqli_query($connect, "UPDATE user_data SET password = '$newpass' WHERE email = '$email'");
    if ($query) {
        header("location:login.php");
    }
}
?>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Login Form -->
    <form action="" method="post">
      <h3></h3>
      <input type="text" name="email" placeholder="email anda">
      <input type="text" name="passwd" placeholder="Password baru">
      <input type="submit" class="fadeIn fourth" name="next" value="Next">
    </form>
  </div>
</div>    
</body>
</html>