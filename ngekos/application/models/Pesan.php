<?php
class Pesan extends CI_Model {

   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    
    function buatPesan($data)
    {
        
    }

    function getRiwayatPesan($data)
    {
      
    }
	
	function hapusPesan($data)
	{
	
	}
	
	function updatestatus($idto,$idfrom)
	{
		$data = array(
				'id_from' => $idfrom,
				'id_to' => $idto,
				'status'=> 0
				);
		
		$this->db->where($data);
		$this->db->update('pesan',array('status'=>1));
	}

}
?>