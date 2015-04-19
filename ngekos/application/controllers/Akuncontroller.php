<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Akuncontroller extends CI_Controller {

	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->driver('session');
		$this->load->library('session');
    }
	
	public function index(){
		if(!($this->session->userdata()))
		{
			$this->load->model('lokasi');
			$result = $this->lokasi->get_propinsi();
			$propinsi = array();
			foreach ($result->result_array() as $row){
				array_push($propinsi,$row);
			}
			$data = array('propinsi' => $propinsi);
			$this->load->view('siteview',$data);
		}
		else{
			$this->load->model('kos');
			$this->load->model('pengguna');
			$isverified = $this->pengguna->getuser($this->session->userdata('username'));
			if($isverified['kode_verifikasi'] == null){
				if($isverified['nama'] == null  && $isverified['alamat'] == null  && $isverified['telpon'] == null
					&& $isverified['tgl_lahir'] == null && $isverified['jenis_kelamin'] == null &&  $isverified['url'] == null){
					$this->load->view('buat_profil');
				}else{
				
					if($this->session->userdata('role') == 'pemilik'){
						$kosres = $this->kos->getKos2($this->session->userdata('id'));
						if($kosres->num_rows() > 0) $kos = $kosres->row_array()['id'];
						else $kos = 'belum_ada';
						$this->session->set_userdata('kos', $kos);
						$this->load->view('berandaA',$this->session->userdata());
					}else{
						if($kosres->num_rows() > 0) {$kos1 = $kosres->row_array(); $kos = $kos1['id'];}
						else $kos = 'belum_ada';
						$this->session->set_userdata('kos', $kos);
						$this->load->view('berandaB',$this->session->userdata());
					}
				}
			}else{
				$this->load->view('verifikasi');
			}
			
		}
		//$this->load->view('siteview');
		
	}
	public function ubahpass($kos)
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules("passlama", "Password Lama",array('required','min_length[4]','max_length[32]'));
		$this->form_validation->set_rules("passbaru", "Password Baru", array('required','min_length[4]','max_length[32]'));
		$this->form_validation->set_rules("conpassbaru", "Ulangi Password Baru",array('required','min_length[4]','max_length[32]','matches[passbaru]')); 
		if($this->form_validation->run() == FALSE){
			$array= $this->session->userdata();
			$array['kos'] = $kos;
			$array['error'] = 'Password yang anda ganti salah!';
			$this->load->view('ubah_passwordA',$array);
			echo $array['error'];
			print_r($this->form_validation->error_array());
		}else{
			$this->load->model('pengguna');
			
			$result = $this->pengguna->getuser2($this->session->userdata('username'));
			if(strcmp(md5($this->input->post('passlama')),$result->row_array()['password']) == 0){
				$array= $this->session->userdata();
				$array['kos'] = $kos;
				$array['error'] = 'Password yyang anda ganti salah!';
				$this->pengguna->set_password($this->session->userdata('username'),$this->input->post('passbaru'));
				$this->load->view('berandaA',$array);
				
			}else{
				
				$array= $this->session->userdata();
				$array['kos'] = $kos;
				$array['error'] = 'Password yyang anda ganti salah!';
				$this->load->view('ubah_passwordA',$array);
				echo $array['error'];
			}
			
			
			
		}
	}
	
	public function showubahpass($kos){
		$array = $this->session->userdata();
		$array['kos'] = $kos;
		$this->load->view('ubah_passwordA',$array);
	}

	public function getUser($username,$kos)
	{
		if($this->session->userdata('username') == $username){
			$this->load->model('pengguna');
			$this->load->model('kos');
			$query= $this->pengguna->getuser2($username);
			$kosres = $this->kos->getKos($kos);
			if($kosres->num_rows() > 0) $kos = $kosres->row_array()['id'];
			else $kos = 'belum_ada';
			$result=$query->row_array();
			$result['kos'] = $kos;
			$this->load->view('lihat_profilA',$result);		
		}
		
	}
	
	public function buatprofil()
	{
	
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules("nama", "Nama",'required');
		$this->form_validation->set_rules("alamat", "Alamat", 'required');
		$this->form_validation->set_rules("telpon", "Nomor Telepon", array('required','min_length[10]','max_length[13]','numeric'));
		$this->form_validation->set_rules("tgl", "Tanggal Lahir", 'required');
		$this->form_validation->set_rules("jk", "Jenis Kelamin",'required');
		
		$this->form_validation->set_message('required', '%s harus diisi!');
		$this->form_validation->set_message('min_length[12]', '%s panjang minimal 12 karakter');
		$this->form_validation->set_message('min_length[13]', '%s panjang maksimal 13 karakter');
		$this->form_validation->set_message('numeric', '%s harus angka!');
		
		if($this->form_validation->run() == FALSE)
		{
			$error = $this->form_validation->error_array();
			$this->load->view('buat_profil');
		}else{
			$album = $this->session->userdata('id');
			$this->load->model('pengguna');
			$this->load->model('kos');
			$config = array(
				'upload_path' => "assets/img/".$album."/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024"
			);
			$this->load->library('upload', $config);
			$dir_exist = true; // flag for checking the directory exist or not
			if (!is_dir('./assets/img/' . $album))
			{
				mkdir("./assets/img/".$album."/",0777, true);
				$dir_exist = false; // dir not exist
			}
			if($this->upload->do_upload('filUpload'))
			{
				$data = array(
				'nama'=>$this->input->post('nama'),
				'alamat'=>$this->input->post('alamat'),
				'telpon'=>$this->input->post('telpon'),
				'tgl_lahir'=>$this->input->post('tgl'),
				'jenis_kelamin'=>$this->input->post('jk'),
				'url'=>base_url().'assets/img/'.$album.'/'.$this->upload->data('file_name')
				);
				$this->pengguna->buatprofil($data,$this->session->userdata('id'));
				$kosres = $this->kos->getKos2($this->session->userdata('id'));
				if($kosres->num_rows() > 0){ $kos = $kosres->row_array()['id'];}
				else $kos = 'belum_ada';
				$result = array(
						'id'=> $this->session->userdata('id'),
						'username'=> $this->session->userdata('username'),
						'nama' => $data['nama'],
						'alamat'=>$data['alamat'],
						'telpon'=>$data['telpon'],
						'url'=>$data['url'],
						'jenis_kelamin'=>$data['jenis_kelamin'],
						'tgl_lahir'=>$data['tgl_lahir'],
						'email'=>$this->session->userdata('email'),
						'kode_verifikasi'=>$this->session->userdata('kode_verifikasi'),
						'role'=> $this->session->userdata('role'),
						'kos' => $kos
						);
				$this->session->set_userdata($result);
				if($result['role'] == 'pemilik'){
					$this->load->view('berandaA',$result);
				}else{
					$this->load->view('berandaB',$result);
				}
			}
			else
			{
				$error = array('error' => 'ukuran gambar terlalu besar');
				if(!$dir_exist){
					rmdir("./assets/img/".$album."/");
				}
				$this->load->view('buat_profil',$error);
			}
		}
		
	}
	public function ubahProfil($id,$kos)
	{
		
	}
	
	public function getProfil($data)
	{
		echo 'Look at this!';
	}
	
	function randString($length) {
		$char = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$char = str_shuffle($char);
		for($i = 0, $rand = '', $l = strlen($char) - 1; $i < $length; $i ++) {
			$rand .= $char{mt_rand(0, $l)};
		}
		return $rand;
	}
	
	function crypto_rand_secure($min, $max) {
        $range = $max - $min;
        if ($range < 0) return $min; // not so random...
        $log = log($range, 2);
        $bytes = (int) ($log / 8) + 1; // length in bytes
        $bits = (int) $log + 1; // length in bits
        $filter = (int) (1 << $bits) - 1; // set all lower bits to 1
        do {
            $rnd = hexdec(bin2hex(openssl_random_pseudo_bytes($bytes)));
            $rnd = $rnd & $filter; // discard irrelevant bits
        } while ($rnd >= $range);
        return $min + $rnd;
	}

	function getToken($length){
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		$codeAlphabet.= "0123456789";
		for($i=0;$i<$length;$i++){
			$token .= $codeAlphabet[$this->crypto_rand_secure(0,strlen($codeAlphabet))];
		}
		return $token;
	}
	
	function check_user($username){
		$this->load->model('pengguna');
		$ada = $this->pengguna->currentuser($username);
		return $ada;
	}
	
	public function sendemail($data,$email){
		
			$config = array( 
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.googlemail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'bat.fire21@gmail.com', 
				'smtp_pass' => 'zeussamin',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE); 
			$this->load->library('email', $config); 
			$this->email->set_newline("\r\n");
			$this->email->from('bat.fire21@gmail.com', 'Admin NGekos.com');
			$this->email->to($email);
			$this->email->subject('Kode Verifikasi NGekos.com'); 
			$this->email->message('Selamat Kamu terdaftar di NGekos.com. Kode verifikasi kamu adalah '.$data);
			if (!$this->email->send()) {
				show_error($this->email->print_debugger()); }
	}
	public function verifikasi(){
		$this->load->model('pengguna');
		$query = $this->pengguna->getuser($this->session->userdata('username'));
		if($this->session->userdata() && $query['kode_verifikasi'] == null){
			if($query['nama'] == null  && $query['alamat'] == null  && $query['telpon'] == null
					&& $query['tgl_lahir'] == null && $query['jenis_kelamin'] == null &&  $query['url'] == null){
				$this->load->view('buat_profil');
			}else{
				$this->load->view('berandaA');
			}
		}else{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules('verifikasi', 'Verifikasi',array('required', 'min_length[7]','max_length[7]'));
			if($this->form_validation->run() == FALSE)
			{
				
				$this->load->view('verifikasi',array('error' => 'error'));
			}else{
				$data = array(
					'verifikasi'=> $this->input->post('verifikasi')
				);
				if($data['verifikasi'] == $query['kode_verifikasi']){
					$this->pengguna->verifikasi($this->session->userdata('id'));
					$this->load->view('buat_profil');
				}else{
					
					$this->load->view('verifikasi',array('gagal' => 'gagal'));
				}
				
			}
		}
	
	}
	public function buatakun()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
  // field name, error message, validation rules
		$this->form_validation->set_rules("username", "Username", array('required', 'min_length[2]'));
		$this->form_validation->set_rules("email", "Email", array('required','valid_email'));
		$this->form_validation->set_rules("password", "Password", array('required','min_length[2]','max_length[32]'));
		$this->form_validation->set_rules("conpassword", 'Konfirmasi Password', array('required','min_length[2]','matches[password]'));
		$this->form_validation->set_rules("role", 'Role', 'required');
		
		$this->form_validation->set_message('required', '%s harus diisi!');
		$this->form_validation->set_message('min_length[4]', '%s panjang minimal 4 karakter!');
		$this->form_validation->set_message('valid_email', '%s Email tidak valid');
		$this->form_validation->set_message('matches[password]', '%s tidak sama');
		//$this->form_validation->set_rules('role', 'role', 'trim|required');
		if($this->form_validation->run() == FALSE)
		{
			
			$this->index();
		}
		else
		{
			$role = $this->input->post('role');
			$token = $this->getToken(10);
			$data=array(
				'id'=>$token,
				'username'=>$this->input->post('username'),
				'email'=>$this->input->post('email'),
				'password'=>md5($this->input->post('password')),
				'kode_verifikasi'=>substr($token,0,7)
			);
			$ada = $this->check_user($data['username']);
			if($ada > 0){
				$adauser = 'username sudah digunakan';
				$this->load->view('siteview',array('adauser'=>$adauser));
			}else{
		
				$config = array( 
				'protocol' => 'smtp', 
				'smtp_host' => 'ssl://smtp.googlemail.com', 
				'smtp_port' => 465, 
				'smtp_user' => 'bat.fire21@gmail.com', 
				'smtp_pass' => 'zeussamin',
				'mailtype' => 'html',
				'charset' => 'iso-8859-1',
				'wordwrap' => TRUE); 
				$this->load->library('email', $config); 
				$this->email->set_newline("\r\n");
				$this->email->from('bat.fire21@gmail.com', 'Admin NGekos.com');
				$this->email->to($data['email']);
				$this->email->subject('Kode Verifikasi NGekos.com'); 
				$this->email->message('Selamat Kamu terdaftar di NGekos.com dengan username:'.$data['username'].' Kode verifikasi kamu adalah '.substr($data['id'],0,7));
				if ($this->email->send() === false) {
					$this->load->view('siteview',array('adauser' => 'Tidak ada koneksi internet untuk mengirim email!'));
				}else{
					$this->pengguna->buatakun($data);
					$this->load->model('pengguna');
					if($role == 'pemilik'){
						$this->load->model('pemilik');
						$this->pemilik->buatpemilik($data['id']);
					}else{
						$this->load->model('penyewa');
						$this->penyewa->buatpenyewa($data['id']);
					}
					$this->session->set_userdata(array('username'=>$data['username'],'id'=>$data['id'],'email'=> $data['email'],'kode_verifikasi'=>null, 'role'=>$role));
					$this->load->view('verifikasi',$data);
				}
			}
		}
		
	}
	
	
	public function login()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules("usernamelogin", "Username", array('required', 'min_length[4]'));
		$this->form_validation->set_rules("passwordlogin", "Password", array('required', 'min_length[4]','max_length[32]'));
		$this->load->model('kos');
		if($this->form_validation->run() == FALSE)
		{
			$this->index();
		}
		else{
			$data = array(
			'username'=> $this->input->post('usernamelogin'),
			'password'=> md5($this->input->post('passwordlogin'))
			);
			$this->load->model('pengguna');
			$query = $this->pengguna->getuser2($data['username']);
			if($query->num_rows() == 0){
				$error = 'username tidak terdaftar!';
				$this->load->view('siteview',array('error1' => $error));
			}else{
				$result = $query->row_array();
				if($result['password'] !== $data['password']){
					$message['error2'] = 'password salah!';
					$this->load->view('siteview',$message);
				}else{
					$this->load->model('pemilik');
					$this->load->model('penyewa');
					$this->load->model('kos');
					$query1 = $this->pemilik->getpemilik($result['id']);
					$query2 = $this->penyewa->getpenyewa($result['id']);
					$role = null;
					if($query1->num_rows() > 0){
						$role = 'pemilik';
						$kosres = $this->kos->getKos2($result['id']);
						if($kosres->num_rows() > 0) $kos = $kosres->row_array()['id'];
						else $kos = 'belum_ada';
						
					}
					if($query2->num_rows() > 0){
						$role = 'penyewa';
						$kosres = $this->kos->getKos2($result['id']);
						if($kosres->num_rows() > 0) $kos = $kosres->row_array()['id'];
						else $kos = 'belum_ada';
					}
					$data = array(
						'id'=> $result['id'],
						'username'=> $result['username'],
						'nama' => $result['nama'],
						'alamat'=>$result['alamat'],
						'telpon'=>$result['telpon'],
						'url'=>$result['url'],
						'jenis_kelamin'=>$result['jenis_kelamin'],
						'tgl_lahir'=>$result['tgl_lahir'],
						'email'=>$result['email'],
						'kode_verifikasi'=>$result['kode_verifikasi'],
						'role'=> $role,
						'kos' => $kos
						);
					$this->session->set_userdata($data);
					if($data['kode_verifikasi'] == null){
						
						if($data['nama'] == null  && $data['alamat'] == null  && $data['telpon'] == null
							&& $data['tgl_lahir'] == null && $data['jenis_kelamin'] == null &&  $data['url'] == null){
							$this->load->view('buat_profil');
						}else{
							
							if($role == 'pemilik'){
								$this->load->view('berandaA',$data);
							}else{
								$this->load->view('berandaB',$data);
							}
						}
					}else{
						$this->load->view('verifikasi');
					}
						
				}
			}
		}
		
	}
	public function logout(){
		$newdata = $this->session->userdata();
		$this->session->unset_userdata($newdata);
		$this->session->sess_destroy();
		redirect('','refresh');
	}
	public function lupapassword(){
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		if(!$this->input->post('lupaemail')){
			$this->load->view('reset_password');
		}else{
			//$this->load->view('reset_password');
			$this->form_validation->set_rules("lupauser", "Lupauser",'required');
			$this->form_validation->set_rules("lupaemail", "Lupaemail",'required');
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('reset_password');
			}
			else
			{
				$data = array(
					'username'=> $this->input->post('lupauser'),
					'email'=> $this->input->post('lupaemail')
				);
				$this->load->model('pengguna');
				$query = $this->pengguna->getuser2($data['username']);
				if($query->num_rows() == 0){
					$message['error'] = 'username tidak terdaftar!';
					$this->load->view('reset_password',$message);
					//echo $message['error'];
				}else{
					$token = $this->getToken(7);
					$this->pengguna->set_password($data['username'],$token);
					$config = array( 
						'protocol' => 'smtp', 
						'smtp_host' => 'ssl://smtp.googlemail.com', 
						'smtp_port' => 465, 
						'smtp_user' => 'bat.fire21@gmail.com', 
						'smtp_pass' => 'zeussamin',
						'mailtype' => 'html',
						'charset' => 'iso-8859-1',
						'wordwrap' => TRUE); 
					$this->load->library('email', $config); 
					$this->email->set_newline("\r\n");
					$this->email->from('bat.fire21@gmail.com', 'Admin NGekos.com');
					$this->email->to($data['email']);
					$this->email->subject('Reset Password'); 
					$this->email->message('Kamu telah mereset password dengan ID User: '.$data['username'].' Password: '.$token);
					if (!$this->email->send()) {
						show_error($this->email->print_debugger()); }
					else {
						$data = array('berhasil'=>'Password berhasil dirubah');
						$this->load->view('siteview',$data);
					}
				}
			}
		}
		
	}
}
?>