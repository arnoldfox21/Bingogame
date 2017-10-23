<?php
class Balok extends CI_Model{
	
	function tampil(){
		$this->db->select('*');
		$this->db->from('balok');
		$this->db->order_by("id", "random");
		
		return $this->db->get(); 
	}
	function reset($key)
	{
        return $this->db->query("UPDATE balok SET warna = '$key'");

        }
     function insert($color,$key)
	{
        $set = $this->db->query("UPDATE balok SET warna = '$color' where id = '$key'");
		$get = $set->row();
		return $get;
        }
}
?>