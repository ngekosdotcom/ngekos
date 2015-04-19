<?php
class  Denah extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    
    function buat_denah($data)
    {
        $this->db->insert('denah',$data);
    }

	function getDenah($data)
    {
        
    }
	
	function ubahDenah($data)
	{
	
	}
	
	function hapusDenah($data)
	{
	
	}

}
?>