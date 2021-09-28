<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Dashboard extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			
		}
		function index()
		{
			clearstatcache();
			//mengambil data dari session yang ada di controller login 
			// $data['user'] = $this->db->get_where('tbl_user', ['email' => $this->session->userdata('email')])->row_array();
			$this->con->page_conf('dashboard');
			$this->con->default_page('v_dashboard');
			
		}
		function pegawai()
		{
			$data['title'] = 'Dashboard Page';
			// $this->load->view('admin/layout/v_head', $data);
			$this->load->view('admin/layout/v_navbar');
			$this->load->view('admin/layout/v_header', $data);
			$this->load->view('v_pegawai');
			$this->load->view('admin/layout/v_footer');
			$this->load->view('admin/layout/v_script');
		}
		function blank()
		{
			$data['title'] = 'Blank Page';
			// $this->load->view('admin/layout/head', $data);
			$this->load->view('admin/layout/v_navbar');
			$this->load->view('admin/layout/v_header', $data);
			$this->load->view('blank_file');
			$this->load->view('admin/layout/v_footer');
			$this->load->view('admin/layout/v_script');
		}
	}
 ?>