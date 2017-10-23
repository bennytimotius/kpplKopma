<?php 

class User extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_user');
		if($this->session->userdata('status') != "login"){
			redirect(base_url("Login"));
		}
	}

	public function index(){
		if($this->session->userdata('status') != "login"){
			$this->load->view('View_login');
		}else{ 
			redirect(base_url('user/userInfo'));
		}
	}

	public function userInfo(){
		$name = sha1($this->session->userdata('nama'));
		$data = $this->model_user->getData("where name = '$name'");
		$decoded1 = $data;
		$index = 0;
		foreach ($data as $x) {
			$decoded1[$index]['deadline'] = $this->encryption->decrypt($x['deadline']);
			$decoded1[$index]['jumlah'] = $this->encryption->decrypt($x['jumlah']);
			$decoded1[$index]['jenis'] = $this->encryption->decrypt($x['jenis']);
			$decoded1[$index]['status'] = $this->encryption->decrypt($x['status']);
			$index++;
		}
			$shu = $this->model_user->getSHU();
			$decoded2 = $shu;
			$index = 0;
		foreach ($shu as $x) {
			$decoded2[$index]['nak'] = $this->encryption->decrypt($x['nak']);
			$decoded2[$index]['nama'] = $this->encryption->decrypt($x['nama']);
			$decoded2[$index]['bulan'] = $this->encryption->decrypt($x['bulan']);
			$decoded2[$index]['sisa'] = $this->encryption->decrypt($x['sisa']);
			$index++;
		}
			$agenda = $this->model_user->getAgenda();
			$decoded = $agenda;
			$index = 0;
		foreach ($agenda as $x) {
			$decoded[$index]['nama'] = $this->encryption->decrypt($x['nama']);
			$decoded[$index]['tanggal'] = $this->encryption->decrypt($x['tanggal']);
			$decoded[$index]['deskripsi'] = $this->encryption->decrypt($x['deskripsi']);
			$index++;
		}
		$this->load->view('logged/dashboard_nonadmin', array('data' => $decoded1, 'shu' => $decoded2, 'agenda' => $decoded));
	}
}
