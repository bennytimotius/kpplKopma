<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

public function index() {
		if($this->session->userdata('status') == "login"){
			redirect(base_url("user"));
		}elseif($this->session->userdata('status') == "admin"){
			redirect(base_url("admin"));
		}elseif($this->session->userdata('status') == ""){ 
			$this->load->view('Home');
		}
	}
}
