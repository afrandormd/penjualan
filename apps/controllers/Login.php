<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login');
	}

	public function check_login(){
		if(isset($_POST) && !empty($_POST)){
			$now = date('Y-m-d H:i:s');
			$usr = addslashes($this->input->post('username'));
			$pw = md5($this->input->post('password'));
			$output = array('error' => false);
			$cek = $this->db->query("SELECT * FROM tbl_user WHERE uname='$usr' AND password='$pw' ");
			if($cek->num_rows()>0){
				foreach($cek->result() as $r){
					$id_usr = $r->id_usr;
					$uname = $r->uname;
					$nama = $r->nama;
					$level = $r->level;
					$foto = $r->foto;
				}

				$sess = array(
						'id_user' => $id_usr,
						'uname' => $uname,
						'nama' => $nama,
						'level' => $level,
						'foto' => $foto,
					);

				$this->session->set_userdata($sess);

				$this->db->query("UPDATE tbl_user SET last_login='$now' WHERE uname='$usr' ");

				$output['message'] = 'Logging in. Please wait...';
				if($level=='MAHASISWA'){
					$output['link'] = base_url('Beranda');
				}else{
					$output['link'] = base_url('Dashboard');
				}
			}
			else{
				$output['error'] = true;
				$output['message'] = 'Login Invalid. User not found';
				$output['link'] = base_url('Login');
			}
			echo json_encode($output); 
		}else $this->error();
	}
}
