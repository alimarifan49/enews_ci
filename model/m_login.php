<?php

class M_login extends CI_Model {

    var $tabel = 'post_berita'; //variabel tabel 

    function __construct() {
        parent::__construct();
    }

//cek admin
    function user($username,$password){
       $query=$this->db->query("SELECT * FROM user WHERE username='$username' AND password='$password' LIMIT 1");
        return $query;
    }
 

}


?>
