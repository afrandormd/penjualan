<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Master extends CI_Controller {

	function __construct(){
		parent::__construct();

		
    }

	public function error(){
		$this->load->view('index.html');
	}

	public function index()
	{
		
	}
public function datapelanggan()
{
	$data['pelanggan'] = $this->db->get("tbl_pelanggan");
	$data['content'] = 'pelanggan/pelanggan_v';
	$this->load->view('_layouts/main_v',$data);
}
	
}
