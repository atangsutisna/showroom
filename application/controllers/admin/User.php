<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller 
{
	const DIR_VIEW = 'user';

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	
	public function index() 
	{
		$user = $this->user_model->listing();
		
		$data = array( 	'title' => 'Manajemen User',
						'user'	=> 	$user,
						'isi'  	=> 'admin/user/list');
		$this->load->view('admin/layout/wrapper',$data);
	}
	
	// Tambah User
	public function tambah() {
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required',
		array( 'required' => 'Nama harus diisi'));
		
		$valid->set_rules('email','Email','required',
		array( 'required' => 'email harus diisi'));
		
		$valid->set_rules('username','Username','required|is_unique[users.username]',
		array( 	'required' 	=> 'Username harus diisi',
				'is_unique'	=> 'Username: <strong>'.$this->input->post('username').
							   '</strong> sudah digunakan. Buat username baru!'));
		
		$valid->set_rules('password','Password','required',
		array( 'required' => 'Password harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' => 'Tambah User',
						'isi'  => 'admin/user/tambah');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			$i = $this->input;
			$raw_password = $this->input->post('password');
            $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
			$data = array( 	'nama'			=> 	$i->post('nama'),
							'email'			=>	$i->post('email'),
							'username'		=>	$i->post('username'),
							'password'		=>	$hashed_password,
							'akses_level'	=> $i->post('akses_level'));
			$this->user_model->tambah($data);
			$this->session->set_flashdata('sukses','user telah ditambah');
			redirect(base_url('admin/user'));
		}
		// End masuk database
	}
	
	// Edit User
	public function edit($id_user) {
		$user = $this->user_model->detail($id_user);
		
		// Validasi
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required',
		array( 'required' => 'Nama harus diisi'));
		
		$valid->set_rules('email','Email','required',
		array( 'required' => 'email harus diisi'));
		
		
		$valid->set_rules('password','Password','required',
		array( 'required' => 'Password harus diisi'));
		
		if($valid->run()===FALSE) {
		// End validasi
		
		$data = array( 'title' 	=> 'Edit User',
						'user'	=> $user,
						'isi' 	=> 'admin/user/edit');
		$this->load->view('admin/layout/wrapper',$data);
		// masuk database
		}else{
			$i = $this->input;
			$data = array( 	'nama'			=> 	$i->post('nama'),
							'email'			=>	$i->post('email'),
							'username'		=>	$i->post('username'),
							'password'		=>	$i->post('password'),
							'akses_level'	=> $i->post('akses_level'));
			$this->user_model->edit($data,$id_user);
			$this->session->set_flashdata('sukses','user telah ditambah');
			redirect(base_url('admin/user'));
		}
		// End masuk database
	}
	
	// Delete User
	public function delete($id_user) {
		$this->simple_login->cek_login();
		$data = array('id_user'=> $id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses','user telah dihapus');
		redirect (base_url('admin/user'));
	}

	public function do_update()
	{
		$valid = $this->form_validation;
		$valid->set_rules('nama','Nama','required',
		array( 'required' => 'Nama harus diisi'));

		if ($valid->run() === FALSE) {

		}
	}

	public function change_passwd($id_user)
	{
		$user = $this->user_model->detail($id_user);
		$data = array( 'title' => 'Ganti Password',
				'isi'  => 'admin/user/ganti_password',
				'user'	=> $user);
		$this->load->view('admin/layout/wrapper',$data);
	}

	public function do_update_passwd()
	{
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('retype_password', 'Retype password', 'required|matches[password]');                

		if ($this->form_validation->run() === FALSE) {
			$id_user = $this->input->post('id_user');
			$this->change_passwd($id_user);
		} else {
            $raw_password = $this->input->post('password');
            $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
			
			$id_user = $this->input->post('id_user');
			$this->user_model->modify($id_user, [
				'password' => $hashed_password
			]);
			$this->session->set_flashdata('sukses','Password berhasil di ganti');
			redirect('admin/user');
		}
	}

	public function profile()
	{
		$id_user= $this->session->userdata('id');
		$user	= $this->user_model->detail($id_user);

		$this->params['title']	= 'Profil'; 
		$this->params['user']	= $user;
		$this->load->admin_template(self::DIR_VIEW. '/profile', $this->params);
	}
}