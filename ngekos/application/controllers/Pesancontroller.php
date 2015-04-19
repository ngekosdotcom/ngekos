<?php
class Pesancontroller extends CI_Controller {

	 function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->driver('session');
		$this->load->library('session');
    }
	
	public function getListPengguna($data){
		
	}
	public function getRiwayatPesan($data)
	{
		echo 'Hello World!';
	}
	
	public function addPesan($data)
	{
	
	}
	
	public function addAttachment($data)
	{
	
	}
	
	public function hapusPesan($data)
	{
	
	}
	public function showform($idto,$idfrom,$nama,$idkos){
		if(!($this->session->userdata())){
			$this->load->view('siteview');
		}else{
			$array = $this->session->userdata();
			
						$array['idto'] = $idto;
						$array['idfrom'] = $idfrom;
						$array['namakirim'] = $nama;
						$array['kos'] =$idkos;
				
		
			$this->load->model('pesan');
			$this->pesan->updatestatus($idto,$idfrom);
			$this->load->view('pesanA',$array);
		}
	}
	
}
?>