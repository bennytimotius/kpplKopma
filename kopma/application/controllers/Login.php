<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_login');

	}

	function index(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "login"){
			$this->load->view('View_login', $data);
		}else{ 
			redirect(base_url('user'));
		}
		
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$where = array(
			'username' => sha1($username),
			'password' => sha1($password)
			);
		$cek = $this->Model_login->cek_login("anggota",$where);
		if($cek->num_rows()==1){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("user"));

		}else{
			$data['err_message'] = "Akun tidak ditemukan, mohon hubungi Administrator";
			$this->load->view('View_login', $data);
		
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}