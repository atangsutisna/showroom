<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Simple_login {
	
	// SET SUPER GLOBAL
	var $CI = NULL;
	public function __construct() {
		$this->CI =& get_instance();
	}
	
	// Login
	public function login($username, $password) 
	{
		$this->CI->load->model('User_model', 'user');
		$user = $this->CI->user->find_by_username($username);
		if ($user == NULL) {
			return FALSE;
		}				
							
        $hashed_pass = trim(preg_replace('/\s+/', ' ', $user->password));
        $password = trim(preg_replace('/\s+/', ' ', $password));
        $password_verified = password_verify($password, $hashed_pass);		
		// Jika ada hasilnya
		if($password_verified) {
			$this->CI->session->set_userdata('username', $user->username); 
			$this->CI->session->set_userdata('akses_level', $user->akses_level); 
			$this->CI->session->set_userdata('nama', $user->nama); 
			$this->CI->session->set_userdata('id_login', uniqid(rand()));
			$this->CI->session->set_userdata('id', $user->id_user);

			return TRUE;
		}

		return TRUE;
	}
	
	// Cek login
	public function cek_login() {
		if($this->CI->session->userdata('username') == '' && $this->CI->session->userdata('akses_level')=='') {
			$this->CI->session->set_flashdata('sukses','Oops...silakan login dulu');
			redirect('auth');
		}	
	}
	
	// Logout
	public function logout() 
	{
		$this->CI->session->unset_userdata('username');
		$this->CI->session->unset_userdata('akses_level');
		$this->CI->session->unset_userdata('nama');
		$this->CI->session->unset_userdata('id_login');
		$this->CI->session->unset_userdata('id');
		unset($_SESSION['admin']);
		session_destroy();
	}
	
}