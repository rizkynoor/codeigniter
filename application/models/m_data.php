<?php 

class M_data extends CI_Model{
	
	function ambil_data(){
		return $this->db->get('tb_bookmark'); //contoh 'user'
		/*syntax $this->db->get() 
		di gunakan untuk mengambil data dari database. 
		dan nama table yang ingin di ambil datanya 
		letakkan dalam parameternya */
	}

	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
}