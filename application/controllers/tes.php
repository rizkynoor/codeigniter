<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Tes extends CI_Controller 
{
	function __construct()
    {
        parent::__construct();
		$this->load->database();
        $this->load->helper('url');
        $this->load->model("m_tes", 'get_db');
    }
 
    public function index()
    {
        $this->load->view('v_tes');
    }

    public function grid()
    {
        $post = $this->input->post();
    	$result = $this->get_db->grid($post)->result_array();
		print json_encode(array("Result"=>"OK","Records" => $result));
    }

    public function add()
    {
        $post = $this->input->post();
        $result = $this->get_db->add($post); 
        if($result){
            print json_encode(array("Result"=>"OK", "Records" => $post));
        }
    }

    public function edit()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $result = $this->get_db->edit(array('id' => $id), $post); 
        if($result){
            print json_encode(array("Result"=>"OK"));
        }
    }

    public function delete()
    {
        $post = $this->input->post();
        $result = $this->get_db->delete($post);
        if($result){
            print json_encode(array("Result"=>"OK"));
        }
    }
}