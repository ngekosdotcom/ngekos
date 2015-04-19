<?php
class Lokasi extends CI_Model {
	function __construct()
    {
        // Call the Model constructor
        parent::__construct();
	
		$this->load->database();
    }
	
	function get_propinsi(){
		$data = array(
				'lokasi_kabupatenkota' => '00',
				'lokasi_kecamatan' => '00',
				'lokasi_kelurahan' => '0000'
				);
		
		$this->db->where($data);
		
		$this->db->select('lokasi_propinsi,lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query;
		
	}
	
	function get_kabupaten($idpropinsi){
		$data = array(
				'lokasi_propinsi' => $idpropinsi,
				'lokasi_kecamatan' => '00',
				'lokasi_kelurahan' => '0000'
				);
		
		$this->db->where($data);
		$this->db->select('lokasi_kabupatenkota,lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query;
		
	}
	
	function get_kecamatan($idpropinsi,$idkabupaten){
		$data = array(
				'lokasi_propinsi' => $idpropinsi,
				'lokasi_kabupatenkota' =>$idkabupaten,
				'lokasi_kelurahan' => '0000'
				);
		
		$this->db->where($data);
		$this->db->select('lokasi_kecamatan,lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query;
		
	}
	
	function get_kelurahan($idpropinsi,$idkabupaten,$idkecamatan){
		$data = array(
				'lokasi_propinsi' => $idpropinsi,
				'lokasi_kabupatenkota' =>$idkabupaten,
				'lokasi_kecamatan' => $idkecamatan
				);
		
		$this->db->where($data);
		$this->db->select('lokasi_kelurahan,lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query;
		
	}
	
	function get_namaprop($id){
		$data = array(
				'lokasi_propinsi' => $id,
				'lokasi_kabupatenkota' => '00',
				'lokasi_kecamatan' => '00',
				'lokasi_kelurahan' => '0000'
				
				);
		$this->db->where($data);
		$this->db->select('lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query->row_array();
	}
	
	function get_namakab($idprop,$idkab){
		$data = array(
				'lokasi_propinsi' => $idprop,
				'lokasi_kabupatenkota' => $idkab,
				'lokasi_kecamatan' => '00',
				'lokasi_kelurahan' => '0000'
				);
		$this->db->where($data);
		$this->db->select('lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query->row_array();
	}
	
	function get_namakec($idprop,$idkab,$idkec){
		$data = array(
				'lokasi_propinsi' => $idprop,
				'lokasi_kabupatenkota' => $idkab,
				'lokasi_kecamatan' => $idkec,
				'lokasi_kelurahan' => '0000'
				);
		$this->db->where($data);
		$this->db->select('lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query->row_array();
	}
	
	function get_namakel($idprop,$idkab,$idkec,$idkel){
		$data = array(
				'lokasi_propinsi' => $idprop,
				'lokasi_kabupatenkota' => $idkab,
				'lokasi_kecamatan' => $idkec,
				'lokasi_kelurahan' => $idkel
				);
		$this->db->where($data);
		$this->db->select('lokasi_nama');
		$query = $this->db->get('inf_lokasi');
		return $query->row_array();
	}
	function om(){
	
		$datakota = explode('/','11/01');
	}
	

}
?>