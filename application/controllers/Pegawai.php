<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	 * 
	 */
	class Pegawai extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function index()
		{
			clearstatcache();
	        $data = array(
            'title' => 'Blank Pegawai',
            'small_text' => '<small>Aplikasi Pencatatan Temuan SPI</small>');

			$this->con->page_conf('pegawai');
			$this->con->default_page('v_pegawai', $data);
		}
	}
 ?>