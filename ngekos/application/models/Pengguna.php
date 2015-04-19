<?php
class Pengguna extends CI_Model {

   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    
    function buatakun($data = null)
    {
        $this->db->insert('pengguna',$data);
    }

    function ubahAkun($data)
    {
      
    }

    function ubahPass($data)
    {
      
    }
	
	function simpanPass($data)
    {
      
    }
	function resetPassword($data)
    {
      
    }
	function send($data,$email)
    {
      
    }
	function buatprofil($data,$id)
    {
		$this->db->where('id', $id);
		$this->db->update('pengguna', $data);
		
    }
	function ubahProfil($data)
    {
      
    }
	function getuser($data)
    {
		$this->db->where('username', $data);
		$query = $this->db->get('pengguna');
		return $query->row_array();
    }
	
	function getuser2($data)
    {
		$this->db->where('username', $data);
		$query = $this->db->get('pengguna');
		return $query;
    }
	
	function currentuser($data)
    {
	  $this->db->where('username', $data);
	  $query = $this->db->get('pengguna');
	  return $query->num_rows();
    }
	
	function verifikasi($data){
		$array = array('kode_verifikasi'=> null);
		$this->db->where('id', $data);
		$this->db->update('pengguna', $array);
	}
	
	function is_verified($data){
		$this->db->where('username', $data);
		$this->db->select('kode_verifikasi');
		$query = $this->db->get('pengguna');
		return $query -> row_array();
	}
	function set_password($user,$pass){
		$array = array('password'=> md5($pass));
		$this->db->where('username', $user);
		$this->db->update('pengguna', $array);
	}

}
?>