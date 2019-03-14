<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends Admin_Controller 
{
	const DIR_VIEW = 'user';

	private $level = [
		'Admin' => 'Admin',
		'User' => 'User',
	]; 

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('user_model');

		$this->params['level_choices'] = $this->level;
	}
	
	public function index() 
	{
		$user = $this->user_model->listing();
		
		$this->params['title'] = 'Manajemen User';
		$this->params['user']  = $user;
		$this->load->admin_template(self::DIR_VIEW. '/index', $this->params);
	}
	
	public function new_form() 
	{
		$this->params['title'] = 'Tambah User';
		$this->params['form_action'] = site_url('admin/user/do_insert');
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);		
	}

	public function do_insert() 
	{
		$form_validation = $this->form_validation;
		$form_validation->set_rules('nama','Nama','required',
			['required' => 'Nama harus diisi']
		);
		$form_validation->set_rules('email','Email','required',
			['required' => 'email harus diisi']
		);
		$form_validation->set_rules('username','Username','required|is_unique[users.username]',
			[
				'required' => 'Username harus diisi',
				'is_unique'	=> 'Username: <strong>'.$this->input->post('username').
							   '</strong> sudah digunakan. Buat username baru!'
			]
		);
		$form_validation->set_rules('password','Password','required',
			['required' => 'Password harus diisi']
		);

		if ($form_validation->run() == TRUE) {
			$raw_password = $this->input->post('password');
            $hashed_password = password_hash($raw_password, PASSWORD_DEFAULT);
			$user = [
				'nama'	=> 	$this->input->post('nama'),
				'email'			=>	$this->input->post('email'),
				'username'		=>	$this->input->post('username'),
				'password'		=>	$hashed_password,
				'akses_level'	=> 	$this->input->post('akses_level')
			];
			$this->user_model->insert($user);
			$this->session->set_flashdata('info','1 User telah ditambahkan');
			redirect('admin/user');
		} else {
			$this->new_form();
		}
	}

	public function view($id_user) 
	{
		$user = $this->user_model->detail($id_user);
		$this->params['title'] 	= 'Edit User';
		$this->params['user']	= $user;
		$this->params['form_action'] = base_url('admin/user/do_update');
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}
	
	// Delete User
	public function delete($id_user) 
	{
		$this->simple_login->cek_login();
		$data = array('id_user'=> $id_user);
		$this->user_model->delete($data);
		$this->session->set_flashdata('sukses','user telah dihapus');
		redirect (base_url('admin/user'));
	}

	public function do_update()
	{
		$this->form_validation->set_rules('nama','Nama','required',
			['required' => 'Nama harus diisi']
		);

		$id_user = $this->input->post('id_user');
		if ($this->form_validation->run() === TRUE) {
			$data = [
				'nama'	=> 	$this->input->post('nama'),
				'akses_level' => $this->input->post('akses_level')
			];
			$this->user_model->edit($data,$id_user);
			$this->session->set_flashdata('info','user telah diupdate');
			redirect('admin/user');
		} else {
			$this->edit($id_user);
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