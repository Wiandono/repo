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

    function execute($query) {
      return mysqli_query($this->mysqli->getConnection(),$query);
    }

    function fetch($query) {
      return mysqli_fetch_row($query);
    }

    function selectAllUser() {
      $query = "SELECT * FROM member";
      return $this->execute($query);
    }

    function selectAllAds() {

    }

    function deleteUser($id) {
      $query = "DELETE FROM member WHERE member_id='$id'";
      return $this->execute($query);
    }

    function getTotalUser() {
      $query = "SELECT Count(member_id) AS NumberOfMember FROM member;";
      return $this->execute($query);
    }
  }
 ?>
