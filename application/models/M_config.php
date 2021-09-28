<?php 
	defined('BASEPATH') or exit('Anda tida diijinkan untuk mengakses halaman ini secara langsung');
	/**
	 * 
	 */
	class M_config extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function _tabel($p='all')
		{
			$this->tb=array(
				'pegawai' => 'tbl_pegawai'
			);
			if($p=='all')
				return($this->tb);
			else
				return($this->tb[$p]);
		}
		function _identitas($p='all')
		{
			$path = APPPATH;
			$path = explode('/', $path);

			$this->ot=array(
				'nama'=>'SI Aplikasi Belanja',
				'singkatan'=>'SIAB',
				'deskripsi'=>'Selamat Datang di Sistem Informasi Aplikasi Belanja
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Provident distinctio repellendus rem autem, saepe odit voluptatum placeat facilis, molestias neque, culpa beatae nam ipsum cumque at. Dolore, asperiores necessitatibus aliquid !.           
                        </small>',
				'mainpath'=>$path[2],
				'versi'=>' v1.21092021.1406',
				'prefix'=> 'dx_',
				'footer'=>'<div class="page-footer-inner">'. date('Y') .'&copy; <a href="http://lpdb.id/" target="_blank" class="text-decoration-none">LPDB-KUMKM</a> Powered By
                            <a target="" href="" class="text-decoration-none">Divisi TSI</a> &nbsp;|&nbsp; All Rights Reserved 
                        </div>',
			);
			if($p=='all')
				return($this->ot);
			else
				return($this->ot[$p]);
		}
		function _url($p='all')
		{
			$this->ot=array(
				'css'=>base_url('assets/css/'),
				'font'=>base_url('assets/webfonts/'),
				'js'=>base_url('assets/js/'),
				'img'=>base_url('assets/img/'),
			);
			if($p='all')
				return($this->ot);
			else
				return($this->ot[$p]);
		}
		function page_conf($controller, $js=null, $css=null, $fn=null)
		{
			$this->hd=array();
			$this->mn=array();
			$this->ft=array();
			$p=$this->con->_identitas('prefix');

			//css default
			$this->hd['css']=array(
				'vendors.bundle.css',
				'app.bundle.css',
				'miscellaneous/reactions/reactions.css',
				'miscellaneous/fullcalendar/fullcalendar.bundle.css',
				'miscellaneous/jqvmap/jqvmap.bundle.css',
				'datagrid/datatables/datatables.bundle.css',
				'fa-brands.css',
				'fa-solid.css',
				'notifications/sweetalert2/sweetalert2.bundle.css',
				'formplugins/select2/select2.bundle.css',
				'formplugins/bootstrap-datepicker/bootstrap-datepicker.css',
				'formplugins/summernote/summernote.css'
			);
			if($css!=null){
				$this->i=0;
				while($this->i<count($css)){
					array_push($this->hd['css'],$css[$this->i]);
					$this->i++;
				}
			}
			$this->hd['css_url']=$this->_url('css');
			$this->hd['title']=$this->_identitas('nama');
			//setting variabel footer
			$this->ft['js']=array(	
				'vendors.bundle.js',
				'app.bundle.js',
				'dependency/moment/moment.js',
				'miscellaneous/fullcalendar/fullcalendar.bundle.js',
				'statistics/sparkline/sparkline.bundle.js',
				'statistics/easypiechart/easypiechart.bundle.js',
				'statistics/flot/flot.bundle.js',
				'miscellaneous/jqvmap/jqvmap.bundle.js',
				'datagrid/datatables/datatables.bundle.js',
				'notifications/sweetalert2/sweetalert2.bundle.js',
				'formplugins/select2/select2.bundle.js',
				'formplugins/bootstrap-datepicker/bootstrap-datepicker.js',
				'formplugins/summernote/summernote.js',
			);
			if($js!=null){
				$this->i=0;
				while($this->i<count($js)){
					array_push($this->ft['js'], $js[$this->i]);xattr_get(filename, name);
					$this->i++;
				}
			}
			$this->ft['js_url']=$this->_url('js');
			$this->ft['versi']=$this->_identitas('versi');
			$this->ft['created']=$this->_identitas('footer');

		}
		function default_page($h, $p=null)
		{
			$this->load->model('M_dashboard');
			$this->load->view('admin/layout/v_header', $this->hd);
			$this->load->view('admin/layout/v_navbar', $this->ft);
			$this->load->view($h, $p);
			$this->load->view('admin/layout/v_footer');
		}
	}
 ?>