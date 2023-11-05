<?php

session_start();
require_once 'db.php';
$db = new Database();

// Button isset jika user telah menekan tombol sign-in

if( isset( $_POST["signin"])) {

  $username = $_POST["username"];
  $password = $_POST["password"];

  $result = mysqli_query($db->con, "SELECT * FROM usertb WHERE usernameid = '$username'");
  
  if(mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    if( password_verify($password, $row["password"])) {  

      // Session Login Aktif
      $_SESSION["login"] = true;

      // $id berisi id dari Database usertb
      $id = $row["id"];
      echo "<script>
              alert('Anda berhasil masuk');
              document.location.href = 'index.php?id=$id';
            </script>";
      exit;
    }
  }
}
 // jika $error diatas aktif,maka alert popup muncul
 if( isset($error) ) {
  echo "<script>
        alert('Username atau Password yang anda masukkan salah');
      </script>";
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<form action="" method="post">
<section class="vh-100" style="background-color: #84fab0;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
              <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="username" required />
              <label class="form-label" for="typeEmailX-2">Username</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="password" required />
              <label class="form-label" for="typePasswordX-2">Password</label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
              <label class="form-check-label" for="form1Example3"> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="signin">Login</button>

            <hr class="my-4">

              <div class="text-center">Didn't have an account? <a href="register.php">Create Account</a></div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</form>
</body>
</html>