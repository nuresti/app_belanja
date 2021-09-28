<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Login extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			// $this->load->helper('url');
			// $this->load->library('form_validation');
		}
		function index()
		{
			// $this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email');
			// $this->form_validation->set_rules('password', 'Password', 'required|trim');
			// if($this->form_validation->run() == false){
			clearstatcache();
			$this->ot=array();
			$this->url=$this->con->_url();
			$this->identitas=$this->con->_identitas();
			$this->ot=array(
				'title'=>$this->identitas['singkatan'].' | Login',
				'footer'=>$this->identitas['footer'],
				'versi'=>$this->identitas['versi'],
				'deskripsi'=>$this->identitas['deskripsi'],
				'form'=>$this->lo->_form_login(),
			);
			$this->ot['css']=array(
				$this->url['css'].'vendors.bundle.css',
				$this->url['css'].'app.bundle.css',
				$this->url['css'].'fa-brands.css',
				$this->url['css'].'style.css',
			);
			$this->ot['img']=array(
				$this->url['img'].'favicon/apple-touch-icon.png',
				$this->url['img'].'favicon/favicon-32x32.png',
				$this->url['img'].'favicon/safari-pinned-tab.svg',
			);
			$this->ot['js']=array(
				$this->url['js'].'app.bundle.js',
				$this->url['js'].'vendors.bundle.js',
				$this->url['js'].'js_main.js',
			);

			$this->load->view('login/v_login', $this->ot);
			// }else{
				//ketika validasi nya suskes
				//$this->_signin(); //method private
			// }
		}
		// private function _signin()
		// {
		// 	$email = $this->input->post('email');
		// 	$password = $this->input->post('password');

		// 	$user = $this->db->get_where('tbl_user', ['email' =>$email])->row_array();//untuk mendapatkan satu baris
		// 	// var_dump($user);
		// 	// die;
		// 	if($user){
		// 		//maka usernya ada
		// 		//cek user aktif
		// 		if($user['is_aktif'] == 1){
		// 			//aktif
		// 			//cek password
		// 			if(password_verify($password, $user['password'])){//fungsi Php
		// 				//siapin data di dalam session untuk digunakan di page selanjutnya
		// 				$data = [
		// 					'email' => $user['email'],
		// 					'role_id' => $user['role_id']
		// 				];

		// 				$this->session->set_userdata($data);
		// 				redirect('home');

		// 			}else{
		// 				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button class="close" data-close="alert"></button>Wrong Password!</div>');
		// 				redirect ('login');
		// 			}
		// 		}else{
		// 			//tidak aktif
		// 			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button class="close" data-close="alert"></button>Email has not been activated!</div>');
		// 			redirect ('login');
		// 		}

		// 	}else
		// 		//tidak ada user dengan email ini
		// 		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert"><button class="close" data-close="alert"></button>Email is not registered!</div>');
		// 		redirect ('login');
		// }
		// function registrasi()
		// {
		// 	$this->form_validation->set_rules('fullname', 'Fullname', 'required|trim');
		// 	$this->form_validation->set_rules('email', 'Email', 'required|trim|valid_email|is_unique[tbl_user.email]', [
		// 			'is_unique' => 'This email has already registered !'
		// 		]);
		// 	$this->form_validation->set_rules('password1', 'Password', 'required|trim|min_length[6]|matches[password2]', ['matches' => 'Password dont match!', 'min_length' => 'Password too short']);
		// 	$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password1]');

		// 	if($this->form_validation->run() == false){
		// 		$this->load->view('login/layout/head');
		// 		$this->load->view('login/registrasi_v');
		// 		$this->load->view('login/layout/script');
		// 	}else{
		// 		$data = [
		// 			'nama' => htmlspecialchars($this->input->post('fullname', true)), 
		// 			'email' => htmlspecialchars($this->input->post('email', true)), 
		// 			'foto' => 'default.jpg', 
		// 			'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
		// 			'role_id' => 2,
		// 			'is_aktif' => 1,
		// 			'date_created' => time() 
		// 		];
		// 		$this->db->insert('tbl_user', $data);
		// 		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><button class="close" data-close="alert"></button>Congratulation! your account has been created. Please Login</div>');
		// 		redirect ('login');
		// 	}
			
		// }
		// function logout()
		// {
		// 	//membersihkan session dan mengembalikan ke halaman login
		// 	$this->session->unset_userdata('email');
		// 	$this->session->unset_userdata('role_id');
		// 	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert"><button class="close" data-close="alert"></button>You have been logged out</div>');
		// 		redirect ('login');
		// }
	}
 ?>