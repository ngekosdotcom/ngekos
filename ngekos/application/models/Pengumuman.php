<?php
class Pengumuman extends CI_Model {

   

    function __construct()
    {
        // Call the Model constructor
        parent::__construct();
		$this->load->database();
    }
    
    function buat_pengumuman($id_pemilik,$id_kos,$isi)
    {
		$data = array(
			'id_kos'=>$id_kos,
			'id_pemilik' =>$id_pemilik,
			'isi' =>$isi
		);
		$this->db->insert('pengumuman',$data);
    }

    function ubah_pengumuman($idkos,$id,$isi)
    {
		$data = array('id'=>$id);
		$time = gmdate("Y-m-j H:i:s", time() + 3600*(6+date("I"))); 
		$this->db->where($data);
		$this->db->update('pengumuman',array('isi'=>$isi,'timestamp'=>$time));
    }

    function getPengumuman($id)
    {
      $this->db->where(array('id' => $id));
	  $result = $this->db->get('pengumuman');
	  return $result;
    }
	
	function getListPengumuman($kos)
    {
		$this->db->where(array('id_kos' => $kos));
      $result = $this->db->get('pengumuman');
	  return $result;
    }
	function hapus_pengumuman($id)
    {
		$this->db->where(array('id'=>$id));
		$this->db->delete('pengumuman');
    }


}
?>