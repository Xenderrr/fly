<?php

require_once __DIR__ . '\php\boot.php';

/*if (check_auth()) {
    header('Location: /signUp.php');
    die;
}*/
//Тут сначала эта строчка работала, а потом стала выдавать ошибку. Без неё тоже работает так что аминь
?>
<!doctype html>
<html lang="en">

<head>
  <?php
  require_once "blocks/head.html";
  ?>
</head>

<body>
  <?php require_once "blocks/header.html" ?>
  <div class="container">
    <div class="row py-5">
      <div class="col-lg-6">
        <br>
        <br>
        <h1 class="mb-5">Login</h1>

        <?php flash() ?>

        <form method="post" action="\php\do_login.php">
          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" class="form-control" id="username" name="username" required>
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>
          <div class="d-flex justify-content-between">
            <button type="submit" class="btn btn-primary">Login</button>
            <a class="btn btn-outline-primary" href="signUp.php">Register</a>
          </div>
        </form>

      </div>
    </div>
  </div>
  <?php require_once "blocks/footer.php" ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>