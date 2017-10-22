<?php 

class Login_admin extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Model_login');

	}

	function index(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin', $data);
		}else{ 
			redirect(base_url('admin'));
		}
		
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('pass');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Model_login->cek_login("admin",$where);
		if($cek->num_rows()==1){

			$data_session = array(
				'nama' => $username,
				'status' => "admin"
				);

			$this->session->set_userdata($data_session);

			redirect(base_url("admin"));

		}else{
			$data['err_message'] = "Akun tidak ditemukan, mohon hubungi Administrator";
			$this->load->view('View_loginadmin', $data);
		
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url());
	}
}