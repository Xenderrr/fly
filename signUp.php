<?php
require_once __DIR__ . '\php\boot.php';

$user = null;

if (check_auth()) {
  // Получим данные пользователя по сохранённому идентификатору
  $stmt = pdo()->prepare("SELECT * FROM users WHERE `id` = :id");//SELECT * FROM users FULL JOIN client ON id = client_id FULL JOIN documents ON id = client_id WHERE `id` = :id
  $stmt->execute(['id' => $_SESSION['user_id']]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  $user_id = $user['id'];
}
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
  <?php if ($user) {
    require_once "personalAccount.php";
  } else { ?>
    <div class="container">
      <div class="row py-5">
        <form method="post" action="\php\do_register.php">
          <div class="col-lg-6">
            <br>
            <br>
            <h1 class="mb-5">Registration</h1>

            <?php flash(); ?>

            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <br>
            <br>
            <br>
            <div class="d-flex justify-content-between">
              <button type="submit" class="btn btn-primary">Register</button>
              <a class="btn btn-outline-primary" href="signIn.php">Login</a>
            </div>
          </div>
        </form>
      </div>
    <?php } ?>
  </div>
  <?php require_once "blocks/footer.php" ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript" src='js/main.js'></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>