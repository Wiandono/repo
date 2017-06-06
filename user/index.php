<?php
  include "c_user.php";

  $controller = new c_user();

  if (empty($_SESSION['username'])) {
    $controller->viewHome("u");
  } else {
    if (isset($_GET['r'])) {
      $controller->viewRegistration($_SESSION['username']);
    } else {
      $controller->viewHome("m");
    }
  }
 ?>
