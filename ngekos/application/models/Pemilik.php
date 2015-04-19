<?php
class  Pemilik extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    
    function buatpemilik($data = null)
    {
		$array = array('id_pengguna'=>$data);
		$this->db->insert('pemilik',$array);
    }

	function getpemilik($data)
    {
        $this->db->where('id_pengguna', $data);
		$query = $this->db->get('pemilik');
		return $query;
    }

}
?>