<?php
  include "../koneksiMVC.php";

  class m_user {
    public $hasil = array();
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
  }
 ?>
