<?php
  include "c_admin.php";

  $controller = new c_admin();

  if (empty($_SESSION['username'])) {
    $controller->viewLogin();
  } else {
    if (isset($_GET['l'])) {
      $controller->logout();
    } else if(isset($_GET['d'])) {
      $id = $_GET['d'];
      $controller->deleteUser($id);
    } else if (isset($_GET['a'])) {
      $controller->viewAds($_GET['a']);
    } else if(isset($_GET['m'])) {
      $controller->viewUser($_GET['m']);
    } else if(isset($_GET['u'])) {
      $controller->verifyAds($_GET['u']);
    } else if(isset($_GET['da'])) {
      $controller->deleteAds($_GET['da']);
    }else {
      $controller->viewUser('member');
    }
  }
 ?>
