<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->model('m_data_user');
		$this->load->model('json_model');
		//$this->load->model('m_login');
		$this->load->helper('url'); //tes
		$this->load->library('session');
		
		if($this->session->userdata('status') != "m_login"){
		redirect(base_url("login"));
		}
	}
	

     function bookmark()
    {
    	$data['tb_bookmark'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_header');
		$this->load->view('v_bookmark');
    }
 
     function ambil_data()
    {
        $post = $this->input->post();
    	$result = $this->m_data->ambil_data($post)->result_array();
		print json_encode(array("Result"=>"OK","Records" => $result));
    }
 
     function input_data()
    {
        $post = $this->input->post();
        $result = $this->m_data->input_data($post, 'tb_bookmark'); 
        if($result){
            print json_encode(array("Result"=>"OK", "Records" => $post));
        }
    }
 
     function edit_data()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $result = $this->m_data->edit_data(array('id' => $id), $post); 
        if($result){
            print json_encode(array("Result"=>"OK"));
        }
    }
 
     function hapus_data()
    {
        $post = $this->input->post();
        $result = $this->m_data->hapus_data($post);
        if($result){
            print json_encode(array("Result"=>"OK"));
        }
    }  

/*-----------------------------BOOKMARK---------------------------*/ /*
	 function bookmark(){
		$data['tb_bookmark'] = $this->m_data->ambil_data()->result(); //contoh 'user'
		$this->load->view('v_bookmark',$data);
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
				'id' => $id,
				'title' => $title,
				'url' => $url,
				'description' => $description);

		$this->m_data->input_data($data,'tb_bookmark');
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
		echo"<script>alert('Data Berhasil Dirubah!');window.location='bookmark'</script>";
		//redirect('belajar/bookmark');
	}


	function hapus($id){
		$where = array ('id' => $id);
		$this->m_data->hapus_data($where,'tb_bookmark');
		redirect('belajar/bookmark'); 
	}

	function view_b($id){
		$where = array ('id' => $id);
		$data['tb_bookmark'] = $this->m_data->edit_data($where,'tb_bookmark')->result();
		$this->load->view('v_view_b',$data);
	} */
/*-----------------------------BOOKMARK---------------------------*/
						//end

/*-----------------------------USER---------------------------*/

	 function user(){
		$data['tb_user'] = $this->m_data_user->tampil_data()->result(); //contoh 'user'
		$this->load->view('v_header');
		$this->load->view('v_menu_user',$data);
	}

	function tambahuser(){
		$this->load->view('v_input_user'); //contoh tambah
	}

	function tambahuser_aksi(){
		//$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
			
			$data = array (
				'id' => $id,
				'username' => $username,
				'password' => md5($password) );

		$this->m_data_user->input_data($data,'tb_user');
		redirect('belajar/user');
	}

	function edituser($id){
		$where = array ('id' => $id);
		$data['tb_user'] = $this->m_data_user->edit_data($where,'tb_user')->result();
		$this->load->view('v_edit_user',$data);
	}

	function updateuser(){
		$id = $this->input->post('id');
		$username = $this->input->post('username');
		$password_lm = $this->input->post('password_lm');
		$password = $this->input->post('password');
		
			$data = array(
				'username' => $username,
				'password' => md5($password)
				
			);
	 
			$where = array(
			'id' => $id,
			'password' => md5($password_lm)
			);
 
 		$cek_pw = $this->m_data_user->cek_password("tb_user",$where)->num_rows(); // Cek Password lama
		if($cek_pw > 0){
		$this->m_data_user->update_data($where,$data,'tb_user');
		echo"<script>alert('Data Berhasil Dirubah!');window.location='user'</script>";
		//redirect('home/lihat_user');
		
		}else{
			echo"<script>alert('Password yang anda masukkan salah!');window.history.back();</script>";
			}
		/*$this->m_data_user->update_data($where,$data,'tb_user');
		redirect('belajar/user');*/
	}


	function hapususer($id){
		$where = array ('id' => $id);
		$this->m_data_user->hapus_data($where,'tb_user');
		redirect('belajar/user'); 
	}

/*-----------------------------USER---------------------------*/

	//session Login!! 

	/*function login(){
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
		redirect (base_url("/belajar/bookmark"));
		} else {
			echo '<script>alert("Username atau Password Salah!");</script>' ;
			
		}
	}

	function logout(){
		$this->session->session_destroy();
		redirect (base_url('/belajar/login/logout'));
	} */
}
