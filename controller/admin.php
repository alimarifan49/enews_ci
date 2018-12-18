<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

Class Admin extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->model('m_login');
        //$this->load->helper('form','url');
         if($this->session->userdata('masuk') != TRUE){

            redirect('home');
        }
        else if($this->session->userdata('akses')=='2'){
        	redirect('home');
        }

    }


	public function index(){


		$data['session']=$this->session->userdata('nama');
		$data['isi']='/admin/dashboard';
		$this->load->view("/admin/adminhome", $data);
	}


	public function data(){

		$data['isi']='/admin/data';
		$data['hasil']=$this->m_data->ambil_data('post_berita');
		$this->load->view("/admin/adminhome", $data);
	}

	public function tambahpost(){
		$data['isi']='/admin/tambahpost';
		$this->load->view("/admin/adminhome", $data);
	}

		public function dashboard(){
		$data['isi']='/admin/dashboard';
		$this->load->view("/admin/adminhome", $data);
	}


	function insertpost(){
		$judul = $this->input->post('judul');
		$deskripsi = $this->input->post('deskripsi');
		$isi = $this->input->post('isi');
 		$id_penulis = $this->input->post('id_penulis');
		$status = $this->input->post('status');

 		$tgl = $this->input->post('tanggal');
 		$id_kategori = $this->input->post('id_kategori');

		$data = array(
			'judul' => $judul,
			'deskripsi' => $deskripsi,
			'isi' => $isi,
			'tanggal'=> $tgl,
			'id_penulis'=> $id_penulis,
			'status'=>$status,
			'id_kategori'=> $id_kategori
		
			);


		$this->m_data->input_data($data);
		redirect('admin/data');
	}

function edit($id){
	$data['isi']='/admin/update';
	$where = array('id_post' => $id);
	$data['post_berita'] = $this->m_data->edit_data($where,'post_berita')->result();
	$this->load->view('/admin/adminhome',$data);
}
    function logout(){
        $this->session->sess_destroy();
         redirect('home');
    }




function p_update(){
	$id = $this->input->post('id');
	$judul = $this->input->post('judul');
	$deskripsi = $this->input->post('deskripsi');
	$isi = $this->input->post('isi');
	$tgl = $this->input->post('tanggal');
	$id_kategori = $this->input->post('id_kategori');
	$status = $this->input->post('status');
	$id_penulis = $this->input->post('id_penulis');
	$data = array(
		'judul' => $judul,
		'deskripsi' => $deskripsi,
		'isi' => $isi,
		'tanggal'=> $tgl,
		'id_penulis'=> $id_penulis,
		'status'=>$status,
		'id_kategori'=> $id_kategori
		
	);

	$where = array(
		'id_post' => $id
	);

	$this->m_data->update_data($where,$data,'post_berita');
	redirect('admin/data');
}

function hapus($id){
		$where = array('id_post' => $id);
		$this->m_data->hapus_data($where,'post_berita');
		redirect('admin/data');
	}



//----------------------------------------

protected function masterlist($tipe)
    {
        $data;
        switch ($tipe) {
            case "kode":
                $q = "SELECT id_kategori FROM post_berita";
                $hsl = $this->db->query($q);
                $data = $hsl->result_array();
                break;
            case "pencipta":
                $q = "SELECT * FROM master_pencipta ORDER BY nama_pencipta ASC";
                $hsl = $this->db->query($q);
                $data = $hsl->result_array();
                break;
       
        }

        return $data;
    }


   public function entr()
    {
        $data["kategori"] = $this->masterlist("kategori");
        $data["komentar"] = $this->masterlist("komentar");
        $this->__output('/admin/all', $data);
    }


//---------------------------------------------------------


}


?>
