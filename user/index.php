<?php
  include "c_user.php";

  $controller = new c_user();

  if (empty($_SESSION['username'])) {
    $controller->viewHome("u");
  } else {
    if (isset($_GET['r'])) {
      $controller->viewRegistration($_SESSION['username']);
    } elseif (isset($_GET['e'])) {
      $controller->viewProfile($_SESSION['username'], $_GET['e']);
    } elseif (isset($_GET['l'])) {
      $controller->logout();
    } elseif (isset($_GET['m'])) {
      $controller->viewMessage($_SESSION['username']);
    } elseif (isset($_GET['s'])) {
      $controller->viewSent($_SESSION['username']);
    } elseif (isset($_GET['a'])) {
      $controller->viewAds($_SESSION['username']);
    } else {
      $controller->viewHome("m");
    }
  }
 ?>
