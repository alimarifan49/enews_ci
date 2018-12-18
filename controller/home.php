<?php

Class Home extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('m_data');
        $this->load->model('m_login');
        //$this->load->helper('form','url');
      // if($this->session->userdata('akses')=='1' || $this->session->userdata('akses')=='3' ){
       	//redirect('admin');
        //}
    }

	public function index(){
		$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['konten']='real_ft';
		$data['hasil']=$this->m_data->ambil_data_tes('post_berita');
		$this->load->view("home", $data);
	}



public function detail(){

$id = $this->input->get('id');
$where = array('id_post' => $id );

$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_id($where,'post_berita');
			$data['konten']='detail';
		$this->load->view("home", $data);


}









	public function homee()
	{$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data('post_berita');
			$data['konten']='homepage';
		$this->load->view("home", $data);
	}


	public function teshome()
	{$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data('post_berita');
			$data['konten']='homepage';
		$this->load->view("home", $data);
	} 















	public function politik()
	{



	$where = array(
		'id_kategori' => '1'
	);
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_satu($where,'post_berita');
			$data['konten']='politik';
		$this->load->view("home", $data);
	}


	public function beritaterkini()
	{
		$where = array(
		'id_kategori' => '2'
	);
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_dua($where,'post_berita');
			$data['konten']='beritaterkini';
		$this->load->view("home", $data);
	}


	public function bisnis()
	{
		$where = array(
		'id_kategori' => '3'
	);
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_tiga($where,'post_berita');
			$data['konten']='bisnis';
		$this->load->view("home", $data);
	}

	public function teknologi()
	{
		$where = array(
		'id_kategori' => '4'
	);
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_empat($where,'post_berita');
			$data['konten']='teknologi';
		$this->load->view("home", $data);
	}

	public function kesehatan()
	{
		$where = array(
		'id_kategori' => '5'
	);
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_lima($where,'post_berita');
			$data['konten']='kesehatan';
		$this->load->view("home", $data);
	}

		public function travel()
	{
		$where = array(
		'id_kategori' => '6'
	);
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_enam($where,'post_berita');
			$data['konten']='travel';
		$this->load->view("home", $data);
	}

		public function olahraga()
	{
		$where = array(
		'id_kategori' => '7'
	);
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
		$data['hasil']=$this->m_data->ambil_data_tujuh($where,'post_berita');
			$data['konten']='olahraga';
		$this->load->view("home", $data);
	}
		public function test()
	{
		$data['hasil']=$this->m_data->ambil_data('post_berita');
		$data['konten']='test';
			//$data['username_s']=$this->session->get_userdata($sess['username']);
		$this->load->view("home", $data);
	}


	public function v_profil()
	{
		$where = array(
		'id_user' => 2 );
$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
	$data['hasil']=$this->m_data->ambil_data_user($where,'user');
$data['konten']='v_profil';

$this->load->view('home',$data);

    } 
	

    function login(){

    	$data['hasilkanan']=$this->m_data->ambil_data_tes('post_berita');
    	$data['hasil']=$this->m_data->ambil_data('post_berita');
$data['konten']='v_login';

$this->load->view('home',$data);

    } 

    function v_register(){
    	$data['hasil']=$this->m_data->ambil_data('post_berita');
$data['konten']='v_register';

$this->load->view('home',$data);

    } 




    function register(){
  		$nama = $this->input->post('nama');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
 		$jk = $this->input->post('jk');
		$alamat = $this->input->post('alamat');

 		$level = $this->input->post('level');
 		

		$data = array(
			'nama' => $nama,
			'username' => $username,
			'password' => $password,
			'jk'=> $jk,
			'alamat'=> $alamat,
			'level'=>$level
		
		
			);


		$this->m_data->input_data_user($data);
		redirect('home');

    } 




public function autdua()
{

$username =$this->input->post('username');
$password =$this->input->post('password');
$this->load->model('m_data');
$this->m_data->teslogsession($username,$password);

}








 
    function auth(){
        $username=htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
        $password=htmlspecialchars($this->input->post('password',TRUE),ENT_QUOTES);
 
        $cek_admin=$this->m_login->user($username,$password);
 
        if($cek_admin->num_rows() > 0){ //jika login sebagai dosen
                        $data=$cek_admin->row_array();
                $this->session->set_userdata('masuk',TRUE);
                 if($data['level']=='1'){ //Akses admin
                    $this->session->set_userdata('akses','1');
                    $this->session->set_userdata('ses_id',$data['id_user']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
 
                 }else if($data['level']=='2'){ //Akses user
                    $this->session->set_userdata('akses','2');
                    $this->session->set_userdata('ses_id',$data['id_user']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('home');
 
                 }else if($data['level']=='3'){ //Akses user
                    $this->session->set_userdata('akses','3');
                    $this->session->set_userdata('ses_id',$data['id_user']);
                    $this->session->set_userdata('ses_nama',$data['nama']);
                    redirect('admin');
 
                 }
					//http://mfikri.com/artikel/membuat-login-multilevel-dengan-codeigniter.html       
 
        } else {

echo $this->session->set_flashdata('msg','Username Atau Password Salah');
redirect('home/login');

        }




   			 }
 
    function logout(){
        $this->session->sess_destroy();
         redirect('home');
    }





















//------------



}

?>
