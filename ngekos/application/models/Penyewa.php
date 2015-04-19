<?php
class  Penyewa extends CI_Model {

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    
    function buatpenyewa($data = null)
    {
		$array = array('id_pengguna'=>$data);
        $this->db->insert('penyewa',$array);
    }

	function getpenyewa($data)
    {
        $this->db->where('id_pengguna', $data);
		$query = $this->db->get('penyewa');
		return $query;
    }

}
?>