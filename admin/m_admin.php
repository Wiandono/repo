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

    function executeMulti($query) {
      return mysqli_multi_query($this->mysqli->getConnection(),$query);
    }

    function fetch($query) {
      return mysqli_fetch_row($query);
    }

    function selectAll($type) {
      $query = "SELECT * FROM $type";
      return $this->execute($query);
    }

    function deleteUser($id) {
      $userID = $this->getID($id);
      $ID = $this->fetch($userID);
      $query = "DELETE FROM ads WHERE member_id = $id;";
      $query.= "DELETE FROM member WHERE member_id = $id;";
      $query.= "DELETE FROM user WHERE id = $ID[0]";
      $this->executeMulti($query);
    }

    function deleteAds($id) {
      $query = "DELETE FROM ads WHERE ads_id = $id";
      return $this->execute($query);
    }

    function deleteAdsFromUser($id) {
      $query = "DELETE FROM ads WHERE member_id = $id";
      return $this->execute($query);
    }

    function verifyAds($id) {
      $query = "UPDATE ads SET status = '1' WHERE ads_id = $id";
      return $this->execute($query);
    }

    function getID($id) {
      $query = "SELECT user_id FROM member where member_id = $id";
      return $this->execute($query);
    }

    function getTotalUser() {
      $query = "SELECT Count(member_id) AS NumberOfMember FROM member;";
      return $this->execute($query);
    }

    function getTotalAds() {
      $query = "SELECT Count(ads_id) AS NumberOfAds FROM ads;";
      return $this->execute($query);
    }
  }
 ?>
