<?php
include_once (dirname(__FILE__) . "/MY_Controller.php");

class Koscontroller extends MY_Controller {

	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		
    }
	
	public function buatDenah()
	{
			$album = $this->session->userdata('id');
			$albumKos = $this->session->userdata('idkos');
			
			$config = array(
				'upload_path' => "assets/img/".$album."/".$albumKos."/",
				'allowed_types' => "gif|jpg|png|jpeg|pdf",
				'overwrite' => TRUE,
				'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
				'max_height' => "768",
				'max_width' => "1024"
			);
			$this->load->library('upload', $config);
			$dir_exist = true; // flag for checking the directory exist or not
			if (!is_dir('./assets/img/' . $album."/".$albumKos))
			{
				mkdir("./assets/img/".$album."/".$albumKos."/",0777, true);
				$dir_exist = false; // dir not exist
			}
			if($this->upload->do_upload('filUpload'))
			{
				$result = array(
					'id'=>$data['id_pemilik'],
					'idkos'=>$album,
					'namakos'=>$data['nama'],
					'jumlah_kamar'=>$data['jumlah_kamar'],
					'luas_tanah'=>$data['luas_tanah'],
					'jenis'=>$data['jenis'],
					'deskripsi'=>$data['deskripsi'],
					'provinsi'=>$data['provinsi'],
					'kota'=>$$data['kota'],
					'kecamatan'=>$data['kecamatan'],
					'kelurahan'=>$data['kelurahan'],
					'jalan'=>$data['jalan'],
					'rt'=>$data['rt'],
					'rw'=>$data['rw'],
					'kodepos'=>$data['kodepos'],
					'ruangtamu'=>$data['ruangtamu'],
					'dapur'=>$data['dapur'],
					'lahanparkir'=>$data['lahanparkir'],
					'tempatjemur'=>$data['tempatjemur'],
					'lainlain'=>$data['lainlain']
				);
				$this->session->set_userdata($result);
				$this->load->view('info_kosA',$result);
			}
			else
			{
				$error = array('error' => $this->upload->display_errors());
				echo $error['error'];
				if(!$dir_exist){
					rmdir("./assets/img/".$album."/");
				}
				echo 'nggak bisa';
			}			
	}
	
	public function masukanKoordinat()
	{
		echo 'Look at this!';
	}

	public function getDenah($data)
	{
		echo 'Hello World!';
	}
	
	public function ubahDenah($data)
	{
		echo 'Look at this!';
	}

	
	public function buatPengumuman($data)
	{
		echo 'Look at this!';
	}
	
	public function getListPengumuman($data)
	{
		echo 'Look at this!';
	}
	
	public function hapusPengumuman()
	{
		echo 'Look at this!';
	}
	
	public function lihat_kos($id)
	{
		if(!$this->session->userdata()){
			$this->load->view('siteview');
		}else{
			$this->load->model('kos');
			$datakos = $this->kos->getKos($id);
			$array = $datakos -> row_array();
		//	$array =  $this->session->userdata();
			$array['banyak'] = $datakos -> num_rows();
			if( $datakos -> num_rows() > 0){
				$array['id'] = $id;
				$array['kos'] = $id;
			}else{
				$array['id'] = 'belum_ada';
				$array['kos'] = 'belum_ada';
			}
			if($this->session->userdata('role') === 'pemilik')
			{
				$this->load->view('info_kosA',$array);
			}
			else 
			{
				$this->load->view('info_kosB',$array);		
			}
		}
	}
	
	public function buatKos($idkos)
	{
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules("namakos", "NamaKos",'required');
			$this->form_validation->set_rules("jalan", "Nama Jalan", 'required');
			$this->form_validation->set_rules("rt", "Nomor RT", array('required','numeric'));
			$this->form_validation->set_rules("rw", "nomor RW",array('required','numeric'));
			$this->form_validation->set_rules("no", "NamaJalan", array('required','numeric'));
			$this->form_validation->set_rules("kodepos", "KodePos", array('required','numeric'));
			$this->form_validation->set_rules("jmlkamar", "Jumlah Kamar",array('required','numeric'));
			$this->form_validation->set_rules("luas", "Luas Tanah",array('required','numeric'));
			
			$this->form_validation->set_message('required', '%s harus diisi!');
			$this->form_validation->set_message('numeric', '%s harus angka!');
			
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('buat_kos',array('kos' => $idkos));return;
			}
			else
			{
				
				$this->load->model('lokasi');
				$prop = $this->lokasi->get_namaprop($this->input->post('prop'));
				
				$this->load->model('kos');
				$ruangtamu = false;
				$dapur=false;
				$lahanparkir=false;
				$tempatjemur=false;
				$kamarmandi = false;
				$lainlain="";
				
				if(strcmp($this->input->post('ruangtamu'),"ruangtamu") === 0){
					$ruangtamu=true;
				}
				
				if(strcmp($this->input->post('dapur'),"dapur") === 0){
					$dapur=true;
				}
				
				if(strcmp($this->input->post('lahanparkir'),"lahanparkir") === 0){
					$lahanparkir=true;
				} 
				
				if(strcmp($this->input->post('tempatjemur'),"tempatjemur") === 0){
					$tempatjemur=true;
				}
				
				if(strcmp($this->input->post('km'),"dalam") === 0){
					$kamarmandi=true;
				}
				
				if(strcmp($this->input->post('lainlain'),"lainlain") === 0){
					$lainlain=$this->input->post('lainlain');
				}
				$token = $this->getToken(10);
				
				$album = $this->session->userdata('id');
				$albumKos = $token;
				
				$config = array(
					'upload_path' => "assets/img/".$album."/".$albumKos."/",
					'allowed_types' => "gif|jpg|png|jpeg|pdf",
					'overwrite' => TRUE,
					'max_size' => "2048000", // Can be set to particular file size , here it is 2 MB(2048 Kb)
					'max_height' => "10000",
					'max_width' => "10000"
				);
				$this->load->library('upload', $config);
				$dir_exist = true; // flag for checking the directory exist or not
				if (!is_dir('./assets/img/' . $album."/".$albumKos))
				{
					mkdir("./assets/img/".$album."/".$albumKos."/",0777, true);
					$dir_exist = false; // dir not exist
				}
				if($this->upload->do_upload('filUpload'))
				{
					$this->load->model('lokasi');
					$propinsi = $this->lokasi->get_namaprop($this->input->post('prop'));
					$datakota = explode('/',$this->input->post('kota'));
					$kota = $this->lokasi->get_namakab($datakota[0],$datakota[1]);
					$datakec = explode('/',$this->input->post('kec'));
					$kec = $this->lokasi->get_namakec($datakec[0],$datakec[1],$datakec[2]);
					$datakel = explode('/',$this->input->post('kel'));
					$kel = $this->lokasi->get_namakel($datakel[0],$datakel[1],$datakel[2],$datakel[3]);
					$data = array(
					'id'=>$token,
					'id_pemilik'=>$this->session->userdata('id'),
					'nama'=>$this->input->post('namakos'),
					'jumlah_kamar'=>$this->input->post('jmlkamar'),
					'luas_tanah'=>$this->input->post('luas'),
					'jenis'=>$this->input->post('jenis'),
					'deskripsi'=>$this->input->post('deskripsi'),
					'provinsi'=>$propinsi['lokasi_nama'],
					'kota'=>$kota['lokasi_nama'],
					'kecamatan'=>$kec['lokasi_nama'],
					'kelurahan'=>$kel['lokasi_nama'],
					'jalan'=>$this->input->post('jalan'),
					'no'=>$this->input->post('no'),
					'rt'=>$this->input->post('rt'),
					'rw'=>$this->input->post('rw'),
					'kodepos'=>$this->input->post('kodepos'),
					'ruangtamu'=>$ruangtamu,
					'dapur'=>$dapur,
					'lahanparkir'=>$lahanparkir,
					'kamarmandi' =>$kamarmandi,
					'tempatjemur'=>$tempatjemur,
					'lainlain'=>$lainlain,
					'rentangharga'=>$this->input->post('range'),
					'url'=>base_url()."assets/img/".$album."/".$albumKos."/".$this->upload->data('file_name')

					);
				
					$this->kos->buatKos($data);
					$datafoto=array(
						'id'=>$this->getToken(10),
						'id_kos'=>$data['id'],
						'id_pemilik'=>$this->session->userdata('id'),
						'url'=>base_url()."/assets/img/".$album."/".$albumKos."/".$this->upload->data('file_name')
					);
					$this->kos->unggahDatafoto($datafoto);
					$data['kos']= $data['id'];
					$data['banyak'] = 1;
					//$this->load->view('info_kosA',$data);
					$this->lihat_kos($token);
				}
				else
				{
					$error = array('error' => $this->upload->display_errors());
					echo $error['error'];
					if(!$dir_exist){
						rmdir("./assets/img/".$album."/");
					}
					$this->load->view('buat_kos',array('kos' => $idkos));
					
				}			
			}
		}
	}
	
	function form_ubah_kos($id)
	{
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->model('kos');
			$this->load->model('lokasi');
			$propinsi = $this->lokasi->get_propinsi();
			$result = $this->kos->getKos($id);
			$data = $result->row_array();
			$data['kos'] = $id;
			$data['propinsi'] = $propinsi->result_array();
			$this->load->view('ubah_kos',$data);
		}
	
	}
	
	function form_buat_kos($kos)
	{
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->model('lokasi');
			$result = $this->lokasi->get_propinsi();
			$array = $this->session->userdata();
			$array['propinsi'] = $result->result_array();
			$array['kos'] = $kos;
			$this->load->view('buat_kos',$array);
		}
	}
	
	function lihat_daftar_kos($kos)
	{
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->model('kos');
			$query = $this->kos->getDaftarKos($this->session->userdata('id'));
			$result = $this->session->userdata();
			$result['data'] = $query;
			$result['title'] = 'Daftar Kos';
			$result['kos'] = $kos;
			$this->load->view('daftar_kos',$result);
		}
	}
	
	function list_pengumuman($kos){
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->model('pengumuman');
			$query = $this->pengumuman->getListPengumuman($kos);
			$result = $this->session->userdata();
			$result['data'] = $query;
			$result['kos'] = $kos;
			$this->load->view('pengumumanA',$result);
		}
	}
	
	function show_buat_pengumuman($kos){
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
		$data = $this->session->userdata();
		$data['kos'] = $kos;
		$this->load->view('form_pengumuman',$data);
		}
	}
	
	function buat_pengumuman($kos,$idpeng){
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules("isi", "Isi",'required');
			if($this->form_validation->run() == FALSE)
			{
				$data = $this->session->userdata();
				$data['kos'] = $kos;
				$data['error'] = 'form harus diisi!';
				$this->load->view('form_pengumuman',$data);return;
			}else{
				$data = $this->session->userdata();
				$this->load->model('pengumuman');
				if($idpeng == -1){
					$this->pengumuman->buat_pengumuman($this->session->userdata('id'),$kos,$this->input->post('isi'));
					$query = $this->pengumuman->getListPengumuman($kos);
					$data['kos'] = $kos;
					$data['data'] = $query;
				}else{
					$this->pengumuman->ubah_pengumuman($kos,$idpeng,$this->input->post('isi'));
					$query = $this->pengumuman->getListPengumuman($kos);
					$data['kos'] = $kos;
					$data['data'] = $query;
				}
				$this->load->view('pengumumanA',$data);
			}
		}
	}	
	
	public function hapus_pengumuman($kos,$idpeng){
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->model('pengumuman');
			$this->pengumuman->hapus_pengumuman($idpeng);
			$data = $this->session->userdata();
			$query = $this->pengumuman->getListPengumuman($kos);
			$data['kos'] = $kos;
			$data['data'] = $query;
			$this->load->view('pengumumanA',$data);
		}
		
	}
	
	public function ubahKos($id,$kos)
	{
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_rules("namakos", "NamaKos",'required');
			$this->form_validation->set_rules("jalan", "Nama Jalan", 'required');
			$this->form_validation->set_rules("rt", "Nomor RT", array('required','numeric'));
			$this->form_validation->set_rules("rw", "nomor RW",array('required','numeric'));
			$this->form_validation->set_rules("no", "NamaJalan", array('required','numeric'));
			$this->form_validation->set_rules("kodepos", "KodePos", array('required','numeric'));
			$this->form_validation->set_rules("jmlkamar", "Jumlah Kamar",array('required','numeric'));
			$this->form_validation->set_rules("luas", "Luas Tanah",array('required','numeric'));
			
			$this->form_validation->set_message('required', '%s harus diisi!');
			$this->form_validation->set_message('numeric', '%s harus angka!');
			
			if($this->form_validation->run() == FALSE)
			{
				$this->load->view('buat_kos');return;
			}
			else
			{
				$this->load->model('kos');
				$ruangtamu = false;
				$dapur=false;
				$lahanparkir=false;
				$tempatjemur=false;
				$lainlain="";
				
				if(strcmp($this->input->post('ruangtamu'),"ruangtamu") === 0){
					$ruangtamu=true;
				}
				
				if(strcmp($this->input->post('dapur'),"dapur") === 0){
					$dapur=true;
				}
				
				if(strcmp($this->input->post('lahanparkir'),"lahanparkir") === 0){
					$lahanparkir=true;
				} 
				
				if(strcmp($this->input->post('tempatjemur'),"tempatjemur") === 0){
					$tempatjemur=true;
				} 
				
				if(strcmp($this->input->post('lainlain'),"lainlain") === 0){
					$lainlain=$this->input->post('lainlain');
				}
				$data = array(
				'id'=>$id,
				'id_pemilik'=>$this->session->userdata('id'),
				'nama'=>$this->input->post('namakos'),
				'jumlah_kamar'=>$this->input->post('jmlkamar'),
				'luas_tanah'=>$this->input->post('luas'),
				'jenis'=>$this->input->post('jenis'),
				'deskripsi'=>$this->input->post('deskripsi'),
				'provinsi'=>$this->input->post('provinsi'),
				'kota'=>$this->input->post('kota'),
				'kecamatan'=>$this->input->post('kecamatan'),
				'kelurahan'=>$this->input->post('kelurahan'),
				'jalan'=>$this->input->post('jalan'),
				'no'=>$this->input->post('no'),
				'rt'=>$this->input->post('rt'),
				'rw'=>$this->input->post('rw'),
				'kodepos'=>$this->input->post('kodepos'),
				'ruangtamu'=>$ruangtamu,
				'dapur'=>$dapur,
				'lahanparkir'=>$lahanparkir,
				'tempatjemur'=>$tempatjemur,
				'lainlain'=>$lainlain,
				'rentangharga'=>$this->input->post('range')
				);
			
				$this->kos->ubahKos($data,$id);
				$result = $this->kos->getKos($id)->row_array();
				$result['kos'] = $kos;
				$result['banyak'] = $this->kos->getKos($id)->num_rows();
				$this->load->view('info_kosA',$result);
			}
		}
	}
	
	public function getlistkos($page,$kos)
	{
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->model('kos');
			$this->load->model('lokasi');
			$data = array();
			if(strcmp($this->input->post('prop'),"") !== 0){
				$provinsi = $this->lokasi->get_namaprop($this->input->post('prop'));
				$data['provinsi'] = $provinsi['lokasi_nama'];
			}
			
			if(strcmp($this->input->post('kota'),"") !== 0){
				
					$datakota = explode('/',$this->input->post('kota'));
					$kota =  $this->lokasi->get_namakab($datakota[0],$datakota[1]);
					$data['kota'] = $kota['lokasi_nama'];
				
			}
			
			if(strcmp($this->input->post('kec'),"") !== 0){
				
					$datakec = explode('/',$this->input->post('kec'));
					$kec =  $this->lokasi->get_namakec($datakec[0],$datakec[1],$datakec[2]);
					$data['kecamatan'] = $kec['lokasi_nama'];
				
			}
			
			if(strcmp($this->input->post('kel'),"") !== 0){
				$datakel = explode('/',$this->input->post('kel'));
				$kel =  $this->lokasi->get_namakel($datakel[0],$datakel[1],$datakel[2],$datakel[3]);
				$data['kelurahan'] = $kel['lokasi_nama'];
			}
			
			if($this->input->post('ruangtamu')){
				if(strcmp($this->input->post('ruangtamu'),"ruangtamu") === 0){
					$data['ruangtamu'] = true;
				}
			}
			
			if($this->input->post('dapur')){
				if(strcmp($this->input->post('dapur'),"Dapur") === 0){
					$data['dapur'] = true;
				}
			}
			
			if($this->input->post('parkir')){
				if(strcmp($this->input->post('parkir'),"Parkir") === 0){
					$data['lahanparkir'] = true;
				}
			}
			
			
			if(($this->input->post('jemur'))){
				if(strcmp($this->input->post('jemur'),"Tempat Jemur") === 0){
					$data['tempatjemur'] = true;
				}
			}

			if(($this->input->post('ac'))){
				if(strcmp($this->input->post('ac'),"AC") === 0){
					$data['ac'] = true;
				}
			}
			
			if(($this->input->post('lainlain'))){	
				if(strcmp($this->input->post('lainlain'),"lainlain") === 0){
					$data['lainlain']=$this->input->post('lainlain');
				}
			}
			
			if(($this->input->post('jenis'))){	
				$data['jenis']=$this->input->post('jenis');
			}

			
			if(($this->input->post('km'))){
				if(strcmp($this->input->post('km'),"dalam") === 0){
					$data['kamarmandi']=true;
				}
			}
			
			if(!empty($data) && $this->input->post('range')!=null){
				if($this->input->post('range') !== '100000;5000000'){
					$data['rentangharga'] = $this->input->post('range');
				}
			}
			$this->load->model('lokasi');
			$result = $this->lokasi->get_propinsi();
			$propinsi = array();
			foreach ($result->result_array() as $row){
				array_push($propinsi,$row);
			}
			$result = $this->kos->getlistkos($data);
			$array = $this->session->userdata();
			$array['propinsi'] =$propinsi;
			$array['result'] = $result;
			$array['kos'] = $kos;
			if(strcmp($page,'siteview')===0){
			
				$this->load->view('siteview',$array);
			}if(strcmp($page,'pemilik')==0 ){
				$this->load->view('search',$array);
			}
			if(strcmp($page,'penyewa')==0 ){
				$this->load->view('search',$array);
			}
		}
	
	}
	
	public function search_kos($kos,$token){
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$this->load->model('lokasi');
			$result = $this->lokasi->get_propinsi();
			$propinsi = array();
			foreach ($result->result_array() as $row){
				array_push($propinsi,$row);
			}
			$array = $this->session->userdata();
			$array['propinsi'] =$propinsi;
			$array['kos'] = $kos;
			$array['token'] = $token;
			$this->load->view('search',$array);
		}
	}
	
	public function buatReview($data)
	{
		echo 'Look at this!';
	}
	
	public function getListReview($data)
	{
		echo 'Look at this!';
	}
	
	public function hapusReview($data)
	{
		echo 'Look at this!';
	}
	
	public function buatKamar($data)
	{
		echo 'Look at this!';
	}
	
	public function getKamar($data)
	{
		echo 'Look at this!';
	}
	
	public function kosongkanKamar($data)
	{
		echo 'Look at this!';
	}
	
	public function ubahKamar($data)
	{
		echo 'Look at this!';
	}
	
	
	
	public function menerimaPemesananKamar($data)
	{
		echo 'Look at this!';
	}
	
	public function menolakPemesananKamar($data)
	{
		echo 'Look at this!';
	}
	
	public function pesanKamar($data)
	{
		echo 'Look at this!';
	}
	
	public function getDaftarTunggu($data)
	{
		echo 'Look at this!';
	}	
	public function denah(){
		$this->load->view('buat_denah');
	}
	function getrandomid(){
		echo $this->getToken(10);
	}
	
	public function adddenahajax($idpemilik,$idkos,$iddenah,$lantai,$url){
		$this->load->model('kos');
		$data = array(
					'id' => $iddenah,
					'id_kos' =>$idkos,
					'id_pemilik' =>$idpemilik,
					'lantai' => $lantai,
					'url_gambar' => $url
				);
		$this->kos->adddenah($data);
		echo 'success';
	}
	
	function adddenah(){
		$config = array(
					'upload_path' => 'assets/img/'.$this->input->post('id_pengguna')."/".$this->input->post('id_kos')."/".$this->input->post('id_denah')."/",
					'allowed_types' => "gif|jpg|png|jpeg|pdf",
					'overwrite' => TRUE
				);
		$this->load->library('upload', $config);
		$dir_exist = true; // flag for checking the directory exist or not
		if (!is_dir('./assets/img/'.$this->input->post('id_pengguna')."/".$this->input->post('id_kos')."/".$this->input->post('id_denah')."/"))
		{
			mkdir('./assets/img/'.$this->input->post('id_pengguna')."/".$this->input->post('id_kos')."/".$this->input->post('id_denah')."/",0777, true);
			$dir_exist = false; // dir not exist
		}
		if($this->upload->do_upload('file')){
		}else{
			if(!$dir_exist){
				rmdir('./assets/img/'.$this->input->post('id_pengguna')."/".$this->input->post('id_kos')."/".$this->input->post('id_denah')."/");
			}
			echo "gagal";
		}
		
		$data = array(
					'id' => $this->input->post('id_denah'),
					'id_kos' =>$this->input->post('id_kos'),
					'id_pemilik' =>$this->input->post('id_pengguna'),
					'lantai' => 1,
					'url_gambar' => $this->input->post('url')
					);
		$this->load->model('denah');
		$this->denah->buat_denah($data);
		//print_r($_FILES);
		print_r($data);
	
		
	}
	public function addkamar(){
		$config = array(
					'upload_path' => 'assets/img/'.$this->input->post('id_pengguna')."/".$this->input->post('id_kos')."/".$this->input->post('id_denah')."/".$this->input->post('id_kamar')."/",
					'allowed_types' => "gif|jpg|png|jpeg|pdf",
					'overwrite' => TRUE
				);
		$this->load->library('upload', $config);
		$dir_exist = true; // flag for checking the directory exist or not
		if (!is_dir('./assets/img/'.$this->input->post('id_pengguna').'/'.$this->input->post('id_kos').'/'.$this->input->post('id_denah').'/'.$this->input->post('id_kamar')."/"))
		{
			mkdir('./assets/img/'.$this->input->post('id_pengguna')."/".$this->input->post('id_kos')."/".$this->input->post('id_denah')."/".$this->input->post('id_kamar')."/",0777, true);
			$dir_exist = false; // dir not exist
		}
		if($this->upload->do_upload('file')){}
		else{
			if(!$dir_exist){
				rmdir('./assets/img/'.$this->input->post('id_pengguna')."/".$this->input->post('id_kos')."/".$this->input->post('id_denah')."/".$this->input->post('id_kamar')."/");
			}
		}
		if(strcmp($this->input->post('kamar_mandi'),"luar") == 0)
		{$kamarmandi = false;} else { $kamarmandi = true;}
		if(strcmp($this->input->post('meja'),"") == 0)
		{$meja = false;} else { $meja = true;}
		if(strcmp($this->input->post('lemari'),"") == 0)
		{$lemari = false;} else {$lemari = true;}
		if(strcmp($this->input->post('kasur'),"") == 0)
		{$kasur = false;} else {$kasur = true;}
		if(strcmp($this->input->post('ac'),"") == 0)
		{$ac = false;} else {$ac = true;}
		
		$data = array(
			'id'=> $this->input->post('id_kamar'),
			'id_denah' => $this->input->post('id_denah'),
			'id_kos' => $this->input->post('id_kos'),
			'id_pemilik' => $this->input->post('id_pengguna'),
			'harga' => $this->input->post('harga'),
			'coords' => $this->input->post('coords'),
			'panjang' => $this->input->post('panjang'),
			'lebar' => $this->input->post('lebar'),
			'jumlah' => $this->input->post('jumlah'),
			'shape'=> $this->input->post('bentuk'),
			'kamar_mandi' => $this->input->post('kamar_mandi'),
			'meja' => $meja,
			'lemari' =>$lemari ,
			'kasur' => $kasur,
			'ac' => $ac,
			'lain' => $this->input->post('lain'),
			'link_kamar' =>$this->input->post('link_kamar'),
			'link_foto_kamar' =>$this->input->post('link_foto_kamar')
		);
		$this->load->model('kamar');
		$this->kamar->buat_kamar($data);
		print_r($data);
		
	}
	public function ubah_pengumuman($idkos,$id){
		$this->load->model('pengumuman');
		$result = $this->pengumuman->getPengumuman($id);
		$data = $this->session->userdata();
		$data['kos'] = $idkos;
		$data['pengumuman'] =$id;
		$data['isi'] = $result->row_array()['isi'];
		$this->load->view('form_pengumuman',$data);
		
	}
	
	
	
}
?>