<?php
  require_once("c_admin.php");

  if (isset($_SESSION['username'])) {
    header("location: index.php");
  }

  if (isset($_POST['login'])) {
    $controller = new c_admin();
    $controller->login();
  }

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/login.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class = "container">
      <div class="wrapper">
        <form method="POST" class="form-signin">
          <h3 class="form-signin-heading">Please Sign In</h3>
          <input type="text" class="form-control" name="username" placeholder="Username" required="" autofocus="" />
          <input type="password" class="form-control" name="password" placeholder="Password" required=""/>
          <button class="btn btn-lg btn-primary btn-block" name="login" value="Login" type="submit">Login</button>
        </form>
      </div>
    </div>
  </body>
</html>
