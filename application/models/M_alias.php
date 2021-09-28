<?php 

	defined('BASEPATH') or exit('Anda tida diijinkan untuk mengakses halaman ini secara langsung');

	/**
	 * 
	 */
	class M_alias extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('M_config', 'con');
			$this->load->model('M_login', 'lo');
			#$this->load->library('Datatables', null, 'tbl');
		}
	}
 ?>