<?php
require 'config/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <form action="" method="post">
    <input type="text" name="fn" id="" placeholder="fn">
    <input type="email" name="email" id="" placeholder="email">
    <input type="password" name="pass" id="" placeholder="pass1">
    <input type="password" name="pass2" id="" placeholder="pass2">
    <button type="submit" name="submit">daftar</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    if (reguser($_POST)) {
      header("Location:login.php?info=success");
    } else {
      header('Location:signup.php?info=erorr');
    }
  }
  ?>
</body>

</html>