<?php

class M_data extends CI_Model {

    var $tabel = 'post_berita'; //variabel tabel 
var $tabel_user = 'user'; 
    function __construct() {
        parent::__construct();
    }



//ajjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjid


public function teslogsession($username,$password){

$this->db->where('username', $username);
$this->db->where('password', $password);
$query = $this->db->get('user');
if($query->num_rows()>0)
{

foreach ($query->result() as  $row) {
    $sess=array('username'=>$row->username,
                'password'=>$row->password
    );
}
$this->session->get_userdata($sess);
redirect('home/test');
}else
{


$this->session->set_flashdata('info','username atau password salah');
}

}









    function input_data($data) {
        $this->db->insert($this->tabel, $data);
        return TRUE;
    }

 function input_data_user($data) {
        $this->db->insert($this->tabel_user, $data);
        return TRUE;
    }
function ambil_data($table_name){


$this->db->select('kategori.nama');
$this->db->from('post_berita');
$this->db->join('kategori','kategori.id_kategori=post_berita.id_kategori','inner');
$query=$this->db->get();


   $ambil_data= $this->db->get($table_name,15);
   return $ambil_data->result_array();
    }

   
function ambil_data_tes($table_name){


$this->db->select('*');
$this->db->from('post_berita');

$this->db->join('kategori','kategori.id_kategori=post_berita.id_kategori','inner');
$query=$this->db->get();


   $ambil_data= $this->db->get($table_name);
   return $query->result_array();
    }







function ambil_data_user($where,$tablename){



 $ambil_data=$this->db->get_where($tablename,$where);

   return $ambil_data->result_array();
    }


function ambil_data_id($where,$tablename){



 $ambil_data=$this->db->get_where($tablename,$where);

   return $ambil_data->result_array();
    }







    function edit_data($where,$table){      
        return $this->db->get_where($table,$where);
    }
 
    function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }


function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
}





function ambil_data_satu($where,$table_name){
   $ambil_data= $this->db->get_where($table_name,$where);
   return $ambil_data->result_array();
    }




    function ambil_data_dua($where,$table_name){
   $ambil_data= $this->db->get_where($table_name,$where);
   return $ambil_data->result_array();
    }


    function ambil_data_tiga($where,$table_name){
   $ambil_data= $this->db->get_where($table_name,$where);
   return $ambil_data->result_array();
    }


    function ambil_data_empat($where,$table_name){
   $ambil_data= $this->db->get_where($table_name,$where);
   return $ambil_data->result_array();
    }


    function ambil_data_lima($where,$table_name){
   $ambil_data= $this->db->get_where($table_name,$where);
   return $ambil_data->result_array();
    }


    function ambil_data_enam($where,$table_name){
   $ambil_data= $this->db->get_where($table_name,$where);
   return $ambil_data->result_array();
    }


    function ambil_data_tujuh($where,$table_name){
   $ambil_data= $this->db->get_where($table_name,$where);
   return $ambil_data->result_array();
    }




//adjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjd



}

?>
