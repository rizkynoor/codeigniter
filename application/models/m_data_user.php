<?php 
 
class M_data_user extends CI_Model{

	public function grid($params)
	{
		return $this->db->get('tb_user');
	}
 
	public function add($data)
	{
		return $this->db->insert('tb_user', $data);
	}
 
	public function edit($key, $data)
	{
		return $this->db->update('tb_user', $data, $key);
	}
 
	public function delete($key)
	{
		return $this->db->delete('tb_user',$key);
	}
	
/*	function tampil_data(){
		return $this->db->get('tb_user');
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

	function cek_password($table,$where){
		return $this->db->get_where($table,$where);
	} */
}