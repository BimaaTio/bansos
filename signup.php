<?php
require 'config/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Akun &mdash; SIMSOS</title>
  <link rel="stylesheet" href="assets/css/bootstrap.css">
</head>

<body>
  <!-- <form action="" method="post">
    <input type="text" name="fn" id="" placeholder="fn">
    <input type="email" name="email" id="" placeholder="email">
    <input type="password" name="pass" id="" placeholder="pass1">
    <input type="password" name="pass2" id="" placeholder="pass2">
    <button type="submit" name="submit">daftar</button>
  </form> -->

  <?php
  if (isset($_POST['submit'])) {
    if (reguser($_POST)) {
      header("Location:login.php?info=success");
    } else {
      header('Location:signup.php?info=erorr');
    }
  }
  ?>

  <div class="container pt-5">
    <div class="row justify-content-center mt-5">
      <div class="col-9">
        <div class="card shadow-sm p-3">
          <div class="card-body">
            <form>
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row mb-4">
                <div class="col">
                  <div class="form-outline">
                    <label class="form-label" for="form3Example1">Nama Lengkap</label>
                    <input type="text" id="form3Example1" name="fn" class="form-control" />
                  </div>
                </div>
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3">Email address</label>
                  <input type="email" id="form3Example3" name="email" class="form-control" />
                </div>
                <!-- Password input -->
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Password</label>
                  <input type="password" id="form3Example4" name="pass" class="form-control" />
                </div>
                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example4">Konfirmasi Password</label>
                  <input type="password" id="form3Example4" name="pass2" class="form-control" />
                </div>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Sign up</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>



  <script src="assets/js/boostrap.js"></script>
</body>

</html>