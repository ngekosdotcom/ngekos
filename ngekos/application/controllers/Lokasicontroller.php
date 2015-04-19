<?php

class Lokasicontroller extends CI_Controller {

	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->model('lokasi');
    }
	function tes(){
		$result = $this->lokasi->get_propinsi();
		$propinsi = array();
		foreach ($result->result_array() as $row){
			array_push($propinsi,$row);
		}
		$data = array('propinsi' => $propinsi);
		$this->load->view('siteview',$data);
	}
	function get_kabupaten($id){
		$result = $this->lokasi->get_kabupaten($id);
		//$propinsi = array();
		echo"<option selected value=''>Pilih Kota/Kab</option>";
		foreach ($result->result_array() as $row){
			echo '<option value="'.$id."/".$row['lokasi_kabupatenkota'].'">'.$row['lokasi_nama'].'</option>';
		}
		
	}
	
	function get_kecamatan($idprop,$idkab){
		$result = $this->lokasi->get_kecamatan($idprop,$idkab);
		//$propinsi = array();
		echo"<option selected value=''>Pilih Kecamatan</option>";
		foreach ($result->result_array() as $row){
			echo '<option value="'.$idprop."/".$idkab."/".$row['lokasi_kecamatan'].'">'.$row['lokasi_nama'].'</option>';
		}
		
	}
	
	function get_kelurahan($idprop,$idkab,$idkec){
		echo $idprop;
		echo $idkab;
		$result = $this->lokasi->get_kelurahan($idprop,$idkab,$idkec);
		//$propinsi = array();
		echo"<option selected value=''>Pilih Kelurahan</option>";
		foreach ($result->result_array() as $row){
			echo '<option value="'.$idprop."/".$idkab."/".$idkec."/".$row['lokasi_kelurahan'].'">'.$row['lokasi_nama'].'</option>';
		}
		
	}
	function oy($w,$e){
		echo $w;
		echo $e;
	}
}
?>