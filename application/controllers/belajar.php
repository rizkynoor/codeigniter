<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model("m_data", 'get_db');
		$this->load->model("m_data_user",'get_db_u');
		$this->load->model('json_model');
		//$this->load->model('m_login');
		$this->load->helper('url'); //tes
		$this->load->library('session');
		
		if($this->session->userdata('status') != "m_login"){
		redirect(base_url("login"));
		}
	}

	function index()
	{
		$this->load->view('v_header');
		$this->load->view('v_index');
	}
	
	//-------Tes Bookmark--------//
	public function bookmark()
    {
    	$this->load->view('v_header');
        $this->load->view('v_bookmark');
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
	//------end Tes------//

	//-------------Tes User---------------//

    public function user()
    {
    	$this->load->view('v_header');
        $this->load->view('v_menu_user');
    }

    public function griduser()
    {
        $post = $this->input->post();
    	$result = $this->get_db_u->grid($post)->result_array();
		print json_encode(array("Result"=>"OK","Records" => $result));
    }

    public function adduser()
    {
        $post = $this->input->post();
        $result = $this->get_db_u->add($post); 
        if($result){
            print json_encode(array("Result"=>"OK", "Records" => $post));

  //       $username = $this->input->post('username');
		// $password = $this->input->post('password');
			
		// 	$data = array (
		// 		'id' => $id,
		// 		'username' => $username,
		// 		'password' => md5($password) );

		// $this->m_data_user->input_data($data,'tb_user');
		// redirect('belajar/user');
        }
    }

    public function edituser()
    {
        $post = $this->input->post();
        $id = $post['id'];
        $result = $this->get_db_u->edit(array('id' => $id), $post); 
        if($result){
            print json_encode(array("Result"=>"OK"));
        }
    }

    public function deleteuser()
    {
        $post = $this->input->post();
        $result = $this->get_db_u->delete($post);
        if($result){
            print json_encode(array("Result"=>"OK"));
        }
    }

	//-------------end Tes user--------------//

//-------------bookmark last---------//

/* 14:07 02-06-2016     function bookmark()
    {
    	$post = $data['tb_bookmark'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_header');
		$this->load->view('v_bookmark');

		$result = $this->m_data->ambil_data($post)->result_array();
		print json_encode(array("Result"=>"OK","Records" => $result));
		 // $encode_data = json_encode($data);
		 // echo $encode_data;

		// $decode_data = json_decode($data);
		// print_r($decode_data);
		//echo  json_encode($data);
    }
 
     function ambil_data()
    {
        $post = $this->input->post();
    	$result = $this->m_data->ambil_data($post)->result_array();
    	echo  json_encode($data);
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
    }   */

/*-----------------------------BOOKMARK 14:07 02-06-2016---------------------------*/ /*
	 function bookmark(){
		$data['tb_bookmark'] = $this->m_data->ambil_data()->result(); //contoh 'user'
		$this->load->view('v_header');
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
	} 
 */
/*-----------------------------BOOKMARK---------------------------*/
						//end

/*-----------------------------USER 14:07 02-06-2016---------------------------*//*

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
/*	}


	function hapususer($id){
		$where = array ('id' => $id);
		$this->m_data_user->hapus_data($where,'tb_user');
		redirect('belajar/user'); 
	}   14:07 02-06-2016 */ 

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
