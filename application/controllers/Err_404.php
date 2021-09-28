<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Err_404 extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$this->output->set_status_header('404');
			$data['title'] = 'Error 404 Page Not Found';

			$this->load->view('errors/err404', $data);
		}
	}
 ?>