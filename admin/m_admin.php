<?php
  include "../koneksiMVC.php";

  class m_admin {
    public $hasil = array();
    public $mysqli;

    public function __construct() {
      $this->mysqli = new connection();
    }

    function validate($username ,$password) {
      $query = mysqli_query($this->mysqli->getConnection(),"SELECT * FROM user WHERE username = '".$username."' AND password = '".$password."'");
      $data = mysqli_fetch_array($query);

      if ($data['type'] == 'admin') {
        $_SESSION['username'] = $data['username'];
        return 'valid';
      } else {
        echo
         '<div class="alert alert-danger">
            <strong>Login gagal!</strong> Password atau username yang anda masukkan salah.
          </div>';
      }
    }

    function selectAllUser() {
      $query = "SELECT * FROM user WHERE type != 'admin'";
      return $this->execute($query);
    }
    function selectAllAds() {

    }
  }
 ?>
