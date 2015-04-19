<?php
class Kamar extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    
    function buat_kamar($data)
    {
         $this->db->insert('kamar',$data);
    }

	function ubahKamar($data)
    {
        
    }
	
	function hapusKamar($data)
	{
	
	}
	
	function getKamar($data)
	{
	
	}

}
?>