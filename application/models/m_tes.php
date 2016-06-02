<?php
if (!defined("BASEPATH")) exit("No direct script access allowed!");
 
class M_tes extends CI_Model
{
	public function grid($params)
	{
		return $this->db->get('tb_bookmark');
	}
 
	public function add($data)
	{
		return $this->db->insert('tb_bookmark', $data);
	}
 
	public function edit($key, $data)
	{
		return $this->db->update('tb_bookmark', $data, $key);
	}
 
	public function delete($key)
	{
		return $this->db->delete('tb_bookmark',$key);
	}
}