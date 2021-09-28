<?php 
	defined('BASEPATH') or exit('Anda tida diijinkan untuk mengakses halaman ini secara langsung');

	/**
	 * 
	 */
	class M_login extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		function _form_login($p='all')
		{
			$this->ot=array(
				'email'=>array(
					'id'=>'username',
					'class'=>'form-control form-control-lg',
					'placeholder'=>'your id or email',
					'data-kolom'=>'email',
				),
				'pass'=>array(
					'id'=>'password',
					'class'=>'form-control form-control-lg',
					'placeholder'=>'password',
					'data-kolom'=>'pass',
				),
				'btn_login'=>array(
					'id'=>'login',
					'class'=>'btn btn-danger btn-block btn-lg',
					'content'=>'Masuk',
				)
			);
			if($p=='all')
				return($this->ot);
			else
				return($this->ot[$p]);
		}
		function _ldap($u, $p){
			if($p=='@@switch') return(true);
			else{
				$ldap['user'] = $u;
				$ldap['pass'] = $p;
				$ldap['host'] = 'mail.danabergulir.com';
				$ldap['dn'] = "uid={$ldap['user']},ou=people, dc=danabergulir,dc=com";
				$ldap['port'] = 389;
				$ldap['base'] = '';
				$ldap['conn'] = ldap_connect($ldap['host'],$ldap['port']);
				ldap_set_option(
					$ldap['conn'],
					LDAP_OPT_PROTOCOL_VERSION,
					3
				);

				$rs = @ldap_bind(
					$ldap['conn'],
					$ldap['dn'],
					$ldap['pass']	
				);
				return($rs);
			}
		}
		function _sister($w=null, $o=null){
			// $db2 = $this->load->database('database2', TRUE);
			return ($this->db->query('
					SELECT a.*
				FROM(
					SELECT ts.nrk, ts.nama, ts.inisial, IF(ts.jns_kelamin="1", "Bapak", "Ibu")panggilan,
					  ts.alamat, ts.no_handphone, ts.email_kantor, SUBSTRING_INDEX(email_kantor, "@", 1)uname, 
					  ts.id_jabatan, ts.jns_kelamin,
					  tj.nama jabatan, ts.id_direktorat id_depart,
					  td.nama depart, ts.id_divisi, td1.nama divisi, ts.id_bagian, td2.nama bagian,
					  tsp.nama status_pegawai, ts.pin, IF(ts.tanggal_keluar=0, "Aktif", "Nonaktif")status
					FROM tab_sdm ts
					  LEFT JOIN tab_jabatan tj ON ts.id_jabatan=tj.kode
					  LEFT JOIN tab_departemen td ON ts.id_direktorat=td.kode
					  LEFT JOIN tab_departemen td1 ON ts.id_divisi=td1.kode
					  LEFT JOIN tab_departemen td2 ON ts.id_bagian=td2.kode
					  LEFT JOIN tab_status_pegawai tsp ON ts.id_status_pegawai=tsp.kode
			  	)a'.
			  	(($w!=null)?' where '.$w:'').
			  	(($o!=null)?' order by '.$o:'')
			  ));
			$this->db->close();
		}
	}

 ?>