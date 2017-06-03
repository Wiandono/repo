<?php
  include "m_user.php";

  $model = new m_user();

  if(!empty($_POST["username"])) {
    $model->validateUsername($_POST["username"]);
  }

  if(!empty($_POST["email"])) {
    $model->validateEmail($_POST["email"]);
  }

  if(!empty($_POST["password"])) {
    if(strlen($_POST["password"]) < 8) {
      echo "<span style='color:#D60202;' id='1'>Must be 8 characters</span>";
    } else {
      echo "<span style='color:#2FC332;;'>Good job!</span>";
    }
  }
?>
