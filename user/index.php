<?php
  include "c_user.php";

  $controller = new c_user();

  if (empty($_SESSION['username'])) {
    $controller->getHome("u");
  } else {
    $controller->getHome("m");
  }
 ?>
