<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->model('m_login');
		$this->load->helper('url'); //tes

		if($this->session->userdata('status')!= "m_login"){
			//redirect(base_url("index.php/belajar/tambah_aksi"));
		}
	}
 
	function bookmark(){
		$data['tb_bookmark'] = $this->m_data->ambil_data()->result(); //contoh 'user'
		$this->load->view('v_bookmark.php',$data);
	}

	function tambah(){
		$this->load->view('v_input'); //contoh tambah
	}

	function tambah_aksi(){
		//$id = $this->input->post('id');
		$title = $this->input->post('title');
		$url = $this->input->post('url');
		$description = $this->input->post('description');
			
			$data = array (
				//'id' => $id,
				'title' => $title,
				'url' => $url,
				'description' => $description
				);
		$this->m_data->input_data($data, 'tb_bookmark');
		redirect('belajar/bookmark');
	}

	function edit($id){
		$where = array ('id' => $id);
		$data['tb_bookmark'] = $this->m_data->edit_data($where,'tb_bookmark')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$title = $this->input->post('title');
		$url = $this->input->post('url');
		$description = $this->input->post('description');
 
		$data = array(
		'title' => $title,
		'url' => $url,
		'description' => $description
		);
 
		$where = array(
		'id' => $id
		);
 
		$this->m_data->update_data($where,$data,'tb_bookmark');
	redirect('belajar/bookmark');
	}


	function hapus($id){
		$where = array ('id' => $id);
		$this->m_data->hapus_data($where,'tb_bookmark');
		redirect('belajar/bookmark');
	}


	//session Login!!

	function login(){
		$this->load->view('v_login'); //contoh login
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array (
			'username' => $username,
			'password' => $password
			);
		$cek = $this->m_login->cek_login("tb_user",$where)->num_rows();
		if ($cek > 0) {
				$data_session = array(
					'nama' => $username,
					'status' => "m_login"
					); 
		$this->session->set_userdata($data_session);
		redirect (base_url("index.php/belajar/tambah_aksi"));
		} else {
			echo "Username atau Password Salah!";
			} 
	}

	function logout(){
		$this->session->session_destroy();
		redirect (base_url('login'));
	}
 
}