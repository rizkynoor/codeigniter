<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
 		$this->load->helper('url'); //tes
		$this->load->library('session');
	
	}
	function index(){
		$this->load->view('v_login'); //contoh login
		if($this->session->userdata('status') == "m_login"){
		redirect(base_url("belajar/bookmark"));
	}

	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array (
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->m_login->cek_login("tb_user",$where)->num_rows();
		if ($cek > 0) {
				$data_session = array(
					'nama' => $username,
					'status' => "m_login"
					); 
		$this->session->set_userdata($data_session);
		redirect (base_url("belajar/bookmark"));
		} else {
			echo '<script>alert("Username atau Password Salah!");window.history.back();</script>' ;
		
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url(''));
	}
}