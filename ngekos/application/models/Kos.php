<?php
class Kos extends CI_Model {

   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
	
	function unggahDatafoto($data)
	{
		$this->db->insert('foto_kos',$data);		
	}
    
    function buatKos($data = null)
    {
		$this->db->insert('kos',$data);
    }

    function ubahKos($data,$id)
    {
		$this->db->where('id',$id);
		$this->db->update('kos',$data);
    }

    function getKos($id)
    {
		$this->db->where('id',$id);
		$query=$this->db->get('kos');
		return $query;
    }
	
	function getKos2($id)
    {
		$this->db->where('id_pemilik',$id);
		$query=$this->db->get('kos');
		return $query;
    }

    function getlistkos($data)
    {
		if(empty($data)){
			$query=$this->db->get('kos');
			return $query->result_array();
		}else{
			$this->db->where($data);
			$query=$this->db->get('kos');
			return $query->result_array();
		}
    }
	
	function getDaftarKos($id)
	{
		$this->db->where('id_pemilik',$id);
		$query=$this->db->get('kos');
		return $query;
	
	}
	
	function hapusKos($id)
	{
		$this->db->where('id',$id);
		$this->db->delete('kos');
	}
	function adddenah($data){
		$this->db->insert('denah',$data);
	}

}
?>