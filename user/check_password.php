<?php
  include "m_user.php";

  $model = new m_user();

  if(!empty($_POST["cpassword"]) && !empty($_POST["password"])) {
    if($_POST["cpassword"] != $_POST["password"]) {
      echo "<span style='color:#D60202;'>Not Match</span>";
    } else {
      echo "<span style='color:#2FC332;'>Good job!</span>";
    }
  }
?>
