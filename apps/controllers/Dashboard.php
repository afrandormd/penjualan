<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();

		//if ($this->session->userdata('uname')==""){
			///redirect('Dashboard');
		//}
    }

	public function index()
	{
		
		$data['content'] = 'dashboard/dashboard';
		$this->load->view('_layouts/main_v',$data);
	}

	
}
