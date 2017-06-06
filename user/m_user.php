<?php
  include "../koneksiMVC.php";

  class m_user {
    public $mysqli;

    public function __construct() {
      $this->mysqli = new connection();
    }

    function execute($query) {
      return mysqli_query($this->mysqli->getConnection(),$query);
    }

    function fetch($query) {
      return mysqli_fetch_row($query);
    }

    function validateUsername($username) {
      $query = "SELECT count(*) FROM user WHERE username = '$username'";
      $hasil = $this->execute($query);
      $row = $this->fetch($hasil);
      $user_count = $row[0];
      if($user_count > 0) {
          echo "<span style='color:#D60202;'>Username Not Available</span>";
      } else{
          echo "<span style='color:#2FC332;'>Username Available</span>";
      }
    }

    function validateEmail($email) {
      $query = "SELECT count(*) FROM member WHERE email = '$email'";
      $hasil = $this->execute($query);
      $row = $this->fetch($hasil);
      $user_count = $row[0];
      if($user_count > 0) {
          echo "<span style='color:#D60202;'>Email Already Registered</span>";
      } else{
          echo "<span style='color:#2FC332;'>Email Available</span>";
      }
    }

    function validateForm($username, $email, $password, $cpassword) {
      $query1 = "SELECT count(*) FROM user WHERE username = '$username'";
      $hasil1 = $this->execute($query1);
      $row1 = $this->fetch($hasil1);
      $user_count1 = $row1[0];

      $query2 = "SELECT count(*) FROM member WHERE email = '$email'";
      $hasil2 = $this->execute($query2);
      $row2 = $this->fetch($hasil2);
      $user_count2 = $row2[0];

      if ($user_count1 > 0) {
        return "invalidU";
      } elseif ($user_count2 > 0) {
        return "invalidE";
      } elseif (strlen($password) < 8) {
        return "invalidP";
      } elseif ($password != $cpassword) {
        return "invalidCP";
      } else {
        return "valid";
      }
    }

    function createDump($username, $email, $password, $cpassword) {
      $query = "INSERT INTO `dump`(`username`, `email`, `password`, `cpassword`) VALUES ('$username', '$email', '$password', '$cpassword')";
      $hasil = $this->execute($query);
    }

    function readDump($username) {
      $query = "SELECT * FROM `dump` WHERE `username` = '$username';";
      return $this->execute($query);
    }
  }
 ?>
