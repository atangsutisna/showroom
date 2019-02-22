<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
	// Index login
	public function index() {
		
		// Validasi
		$valid = $this->form_validation;
		
		$valid->set_rules('username','Username','required',
				array(	'required'	=> 'Username harus diisi'));
		$valid->set_rules('password','Password','required',
				array(	'required'	=> 'Password harus diisi'));
		
		$username	= $this->input->post('username');
		$password	= $this->input->post('password');
		
		if($valid->run()) {
			$this->simple_login->login($username,$password,
			base_url('admin/dasbor'), base_url('login'));
		}
		// End validasi
				
		$data = array( 'title' => 'Login Administrator');
		$this->load->view('admin/login_view',$data);
	}

	public function new_session() 
	{
		$this->form_validation->set_rules('username','Username','required',
				array(	'required'	=> 'Username harus diisi'));
		$this->form_validation->set_rules('password','Password','required',
				array(	'required'	=> 'Password harus diisi'));
		
		if($this->form_validation->run()) {
			$username	= $this->input->post('username');
			$password	= $this->input->post('password');	
			$valid_user = $this->simple_login->login($username, $password);
			if (!$valid_user) {
				$this->CI->session->set_flashdata('sukses','Oopss.. Username/password salah');
				redirect('login');	
			}

			redirect('home');	
		}
		// End validasi
				
		$data = array( 'title' => 'Login Administrator');
		$this->load->view('admin/login_view',$data);
	}
	
	// Logout
	public function end_session() {
		$this->simple_login->logout();
		$this->session->set_flashdata('sukses','Terimakasih, Anda berhasil logout');
		redirect('auth');
	}
}