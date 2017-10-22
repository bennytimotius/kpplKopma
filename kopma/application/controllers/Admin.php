<?php 

class Admin extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_admin');
		$this->load->library('encryption');
		if($this->session->userdata('status') != "admin"){
			redirect(base_url("Login_admin"));
		}
	}

	public function index(){
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{ 
			$list = $this->model_admin->getAnggota();
			$decoded = $list;
			$index = 0;
			foreach ($list as $x) {
				$decoded[$index]['NAK'] = $this->encryption->decrypt($x['NAK']);
				$decoded[$index]['name'] = $this->encryption->decrypt($x['name']);
				$decoded[$index]['email'] = $this->encryption->decrypt($x['email']);
				$index++;
			}
		 	$this->load->view('admin/admin_anggota', array('list' => $decoded));
		}
	}

	function shu(){
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{
			$list = $this->model_admin->getSHU();
			$decoded = $list;
			$index = 0;
			foreach ($list as $x) {
				$decoded[$index]['nak'] = $this->encryption->decrypt($x['nak']);
				$decoded[$index]['nama'] = $this->encryption->decrypt($x['nama']);
				$decoded[$index]['sisa'] = $this->encryption->decrypt($x['sisa']);
				$decoded[$index]['bulan'] = $this->encryption->decrypt($x['bulan']);
				$index++;
			}
		 	$this->load->view('admin/admin_shu', array('list' => $decoded));
		}
	}

	function simpanan(){
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{
			$list = $this->model_admin->getSimpanan();
			$decoded = $list;
			$index = 0;
			foreach ($list as $x) {
				$decoded[$index]['NAK'] = $this->encryption->decrypt($x['NAK']);
				$decoded[$index]['nama'] = $this->encryption->decrypt($x['nama']);
				$decoded[$index]['jenis'] = $this->encryption->decrypt($x['jenis']);
				$decoded[$index]['jumlah'] = $this->encryption->decrypt($x['jumlah']);
				$decoded[$index]['status'] = $this->encryption->decrypt($x['status']);
				$index++;
			}
		 	$this->load->view('admin/admin_simpanan', array('list' => $decoded));
		}
	}

	function agenda(){
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{
			$list = $this->model_admin->getAgenda();
			$decoded = $list;
			$index = 0;
			foreach ($list as $x) {
				$decoded[$index]['nama'] = $this->encryption->decrypt($x['nama']);
				$decoded[$index]['tanggal'] = $this->encryption->decrypt($x['tanggal']);
				$decoded[$index]['deskripsi'] = $this->encryption->decrypt($x['deskripsi']);
				$index++;
			}
		 	$this->load->view('admin/admin_agenda', array('list' => $decoded));
		}
	}

	function register_anggota(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{ 
			$this->load->view('admin/admin_formanggota', $data);
		}
	}

	function register_agenda(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{ 
			$list = $this->model_admin->getAnggota();
			$this->load->view('admin/admin_formagenda', $data);
		}
	}

	function submit_agenda(){
        $tanggal = $_POST['tanggal'];
        $nama = $_POST['nama'];
        $deskripsi = $_POST['deskripsi'];
        $data_insert = array(
                'nama' => $this->encryption->encrypt($nama),
                'name' => sha1($nama),
                'tanggal' => $this->encryption->encrypt($tanggal),
                'deskripsi' => $this->encryption->encrypt($deskripsi),
        );
        $res = $this->db->insert('agenda', $data_insert);
        $data['err_message'] = "REGISTER SUKSES";
        $this->load->view('admin/admin_formagenda', $data);
	}

	function register_shu(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{ 
			$this->load->view('admin/admin_formshu', $data);
		}
	}

	function submit_shu(){
        $bulan = $_POST['bulan'];
        $nak = $_POST['NAK'];
        $nama = $_POST['nama'];
        $shu = $_POST['SHU'];
        $data_insert = array(
                'bulan' => $this->encryption->encrypt($bulan),
                'nama' => $this->encryption->encrypt($nama),
                'name' => sha1($nama),
                'nak' => $this->encryption->encrypt($nak),
                'sisa' => $this->encryption->encrypt($shu),
        );
        $res = $this->db->insert('shu', $data_insert);
        $data['err_message'] = "REGISTER SUKSES";
        $this->load->view('admin/admin_formshu', $data);
	}

	function register_simpanan(){
		$data['err_message'] = "";
		if($this->session->userdata('status') != "admin"){
			$this->load->view('View_loginadmin');
		}else{ 
			$profil = $this->model_admin->GetAnggota();
			$this->load->view('admin/admin_formsimpanan', $data);
		}
	}

	function submit_simpanan(){
		$NAK = $_POST['NAK'];
        $nama = $_POST['nama'];
        $pemicu = $_POST['nama'] . $_POST['jumlah'];
        $deadline = $_POST['deadline'];
        $jumlah = $_POST['jumlah'];
        $jenis = $_POST['jenis'];
        $status = $_POST['status'];
        $data_insert = array(
                'NAK' => $this->encryption->encrypt($NAK),
                'nama' => $this->encryption->encrypt($nama),
                'name' => sha1($nama),
                'pemicu' => sha1($pemicu),
                'deadline' => $this->encryption->encrypt($deadline),
                'jumlah' => $this->encryption->encrypt($jumlah),
                'jenis' => $this->encryption->encrypt($jenis),
                'status' => $this->encryption->encrypt($status),
        );
        $res = $this->db->insert('tagihan', $data_insert);
        $data['err_message'] = "REGISTER SUKSES";

        $email = $_POST['email'];
     	$config['protocol'] = "smtp";
	  	$config['smtp_host'] = "ssl://smtp.gmail.com";
	  	$config['smtp_port'] = "465";
	  	$config['charset'] = "utf-8";
	  	$config['smtp_user'] = "bennybtc03@gmail.com";
	  	$config['smtp_pass'] = "bennybtc19";
	  	$config['mailtype'] = "html";
	  	$config['newline'] = "\r\n";
	  	$config['validation'] = TRUE;
	  	$this->email->initialize($config);
	  	$this->email->to($email);
	  	$this->email->from('Koperasi Mahasiswa ITS');
	 	$this->email->subject('Tagihan masuk !');
	  	$this->email->message('Hai, ' . $nama . ' ! anda mendapatkan tagihan sebesar : ' . $jumlah . " ! " . "Deadline : " . $deadline . "Jenis : " . $jenis);
	  	$this->email->send();

        $this->load->view('admin/admin_formsimpanan', $data);
	}

	public function registerData(){
        if (isset($_POST['register-submit'])){
            $target = "./assets/images/".basename($_FILES['pic']['name']);
            $nak = $_POST['nak'];
            $nrp = $_POST['nrp'];
            $username = $_POST['username'];
            $name = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $line = $_POST['line'];
            $handphone = $_POST['handphone'];
            $alamat = $_POST['alamat'];
            $data_insert = array(
            	'nak' => $this->encryption->encrypt($nak),
            	'nrp' => $this->encryption->encrypt($nrp),
                'username' => sha1($username),
                'password' => sha1($password),
                'name' => $this->encryption->encrypt($name),
                'email' => $this->encryption->encrypt($email),
                'handphone' => $this->encryption->encrypt($handphone),
                'line' => $this->encryption->encrypt($line),
                'alamat' => $this->encryption->encrypt($alamat),
                'pic' => $target
            );
            
            if(is_uploaded_file($_FILES['pic']['tmp_name'])){
                move_uploaded_file($_FILES['pic']['tmp_name'], $target);
                $data['err_message'] = "REGISTER SUKSES";
                $this->load->view('admin/admin_formanggota', $data);
            } else {
            	$data['err_message'] = "REGISTER SUKSES";
                $this->load->view('admin/admin_formanggota', $data);
            }
            $res = $this->db->insert('anggota', $data_insert);
        }
    }

	public function updatePhoto($username){
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	    $this->load->library('upload');
	    
	    $is_submit = $this->input->post('is_submit');
    
	    if(isset($is_submit) && $is_submit == 1){
		    $fileUpload = array();
		    $isUpload = FALSE;
		    $config = array(
		    'upload_path' => './assets/images/',
		    'allowed_types' => 'jpg|jpeg|png',
		    'max_size' => 5210
		    );
		  
		    $this->upload->initialize($config);
		    if($this->upload->do_upload('userfile')){
			    $fileUpload = $this->upload->data();
			    $isUpload = TRUE;
		    }

		    if($isUpload){
			    $data =array(
			   	'pic' => './assets/images/' . $fileUpload['file_name']
			    );
			    
			    $this->model_admin->update_profile($username, $data);
			    redirect('admin');
		    }
	  	}else{
		    $data['user'] = $this->mymodel->get_profile_id($username);
		    $this->load->view('admin/V_adminprofil', $data);
	    }
  	}

  	public function updateProfile($user){
	    $this->load->helper('form');
	    $this->load->library('form_validation');
	   	$isUpload = true;

		if($isUpload){
			$nak = $_POST['nak'];
	        $nrp = $_POST['nrp'];
	        $username = $_POST['username'];
	        $name = $_POST['username'];
	        $email = $_POST['email'];
	        $password = $_POST['password'];
	        $line = $_POST['line'];
	        $handphone = $_POST['handphone'];
	        $alamat = $_POST['alamat'];
	        $data = array(
	           	'nak' => $this->encryption->encrypt($nak),
	            'nrp' => $this->encryption->encrypt($nrp),
	            'username' => sha1($username),
	            'password' => sha1($password),
	            'name' => $this->encryption->encrypt($name),
	            'email' => $this->encryption->encrypt($email),
	            'handphone' => $this->encryption->encrypt($handphone),
	            'line' => $this->encryption->encrypt($line),
	            'alamat' => $this->encryption->encrypt($alamat),
	        );
			    
			$this->model_admin->update_profile($user, $data);
			redirect('admin');
		}
	}

	public function viewProfile($username){
		$profil = $this->model_admin->GetProfile("where username = '$username'");
		$data = array(
			"nak" => $this->encryption->decrypt($profil[0]['NAK']),
	        "nrp" => $this->encryption->decrypt($profil[0]['NRP']),
			"username" => $profil[0]['username'],
			"password" => $profil[0]['password'],
			"name" => $this->encryption->decrypt($profil[0]['name']),
			"email" => $this->encryption->decrypt($profil[0]['email']),
			"handphone" => $this->encryption->decrypt($profil[0]['handphone']),
			"line" => $this->encryption->decrypt($profil[0]['line']),
			"alamat" => $this->encryption->decrypt($profil[0]['alamat']),
			"pic" => $profil[0]['pic']
			 );
		$this->load->view('admin/admin_editanggota', $data);
	}

	public function updateAgenda($user){
	    $this->load->helper('form');
	    $this->load->library('form_validation');

			$nama = $_POST['nama'];
	        $deskripsi = $_POST['deskripsi'];
	        $tanggal = $_POST['tanggal'];
	        $data = array(
	            'nama' => $this->encryption->encrypt($nama),
	            'name' => sha1($nama),
	            'deskripsi' => $this->encryption->encrypt($deskripsi),
	            'tanggal' => $this->encryption->encrypt($tanggal),
	        );
			    
			$this->model_admin->update_agenda($user, $data);
			redirect('admin/agenda');
	
	}

	public function viewAgenda($name){
		$profil = $this->model_admin->getAgenda($name);
		$data = array(
			"nama" => $this->encryption->decrypt($profil[0]['nama']),
			"name" => $profil[0]['name'],
	        "deskripsi" => $this->encryption->decrypt($profil[0]['deskripsi']),
			"tanggal" => $this->encryption->decrypt($profil[0]['tanggal']),
			 );
		$this->load->view('admin/admin_editagenda', $data);
	}

	public function updateSHU($user){
	    $this->load->helper('form');
	    $this->load->library('form_validation');

			$nama = $_POST['nama'];
	        $nak = $_POST['nak'];
	        $bulan = $_POST['bulan'];
	        $sisa = $_POST['sisa'];
	        $data = array(
	            'nama' => $this->encryption->encrypt($nama),
	            'name' => sha1($nama),
	            'nak' => $this->encryption->encrypt($nak),
	            'bulan' => $this->encryption->encrypt($bulan),
	            'sisa' => $this->encryption->encrypt($sisa),
	        );
			    
			$this->model_admin->update_shu($user, $data);
			redirect('admin/shu');
	
	}

	public function viewSHU($name){
		$profil = $this->model_admin->getSHU("where name = '$name'");
		$data = array(
			"bulan" => $this->encryption->decrypt($profil[0]['bulan']),
			"nak" => $this->encryption->decrypt($profil[0]['nak']),
	        "nama" => $this->encryption->decrypt($profil[0]['nama']),
	        "name" => $profil[0]['name'],
			"sisa" => $this->encryption->decrypt($profil[0]['sisa']),
			 );
		$this->load->view('admin/admin_editshu', $data);
	}

	public function updateSimpanan($user){
	    $this->load->helper('form');
	    $this->load->library('form_validation');

			$pemicu = $_POST['nama'] . $_POST['jumlah'];
			$nama = $_POST['nama'];
	        $nak = $_POST['NAK'];
	        $deadline = $_POST['deadline'];
	        $jumlah = $_POST['jumlah'];
	        $jenis = $_POST['jenis'];
	        $status = $_POST['status'];
	        $data = array(
	            'nama' => $this->encryption->encrypt($nama),
	            'name' => sha1($nama),
	            'pemicu' => sha1($pemicu),
	            'NAK' => $this->encryption->encrypt($nak),
	            'deadline' => $this->encryption->encrypt($deadline),
	            'jumlah' => $this->encryption->encrypt($jumlah),
	            'jenis' => $this->encryption->encrypt($jenis),
	            'status' => $this->encryption->encrypt($status),
	        );
			    
			$email = $_POST['email'];
	     	$config['protocol'] = "smtp";
		  	$config['smtp_host'] = "ssl://smtp.gmail.com";
		  	$config['smtp_port'] = "465";
		  	$config['charset'] = "utf-8";
		  	$config['smtp_user'] = "bennybtc03@gmail.com";
		  	$config['smtp_pass'] = "bennybtc19";
		  	$config['mailtype'] = "html";
		  	$config['newline'] = "\r\n";
		  	$config['validation'] = TRUE;
		  	$this->email->initialize($config);
		  	$this->email->to($email);
		  	$this->email->from('Koperasi Mahasiswa ITS');
		 	$this->email->subject('Tagihan anda dirubah !');
		  	$this->email->message('Hai, ' . $nama . ' ! tagihan anda menjadi sebesar : ' . $jumlah . " ! " . "Deadline : " . $deadline . "Jenis : " . $jenis);
		  	$this->email->send();	    
			$this->model_admin->update_simpanan($user, $data);
			redirect('admin/simpanan');
	
	}

	public function viewSimpanan($pemicu){
		$profil = $this->model_admin->getSimpanan("where pemicu= '$pemicu'");
		$data = array(
			"NAK" => $this->encryption->decrypt($profil[0]['NAK']),
			"deadline" => $this->encryption->decrypt($profil[0]['deadline']),
	        "nama" => $this->encryption->decrypt($profil[0]['nama']),
	        "name" => $profil[0]['name'],
	        "pemicu" => $profil[0]['pemicu'],
			"jumlah" => $this->encryption->decrypt($profil[0]['jumlah']),
			"jenis" => $this->encryption->decrypt($profil[0]['jenis']),
			"status" => $this->encryption->decrypt($profil[0]['status']),
			 );
		$this->load->view('admin/admin_editsimpanan', $data);
	}

	function delete_anggota(){
		 $delete = $this->input->post('anggota');
		 $this->model_admin->delete_anggota($delete);
		 redirect(base_url("admin"));
	}

	function delete_simpanan(){
		 $delete = $this->input->post('simpanan');
		 $this->model_admin->delete_simpanan($delete);
		 redirect(base_url("admin/simpanan"));
	}

	function delete_agenda(){
		 $delete = $this->input->post('agenda');
		 $this->model_admin->delete_agenda($delete);
		 redirect(base_url("admin/agenda"));
	}

	function delete_shu(){
		 $delete = $this->input->post('shu');
		 $this->model_admin->delete_shu($delete);
		 redirect(base_url("admin/shu"));
	}
}