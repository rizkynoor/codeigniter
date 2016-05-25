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

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}