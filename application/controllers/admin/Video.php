<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends Admin_Controller 
{
	const DIR_VIEW = 'video';

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('video_model');
	}
	
	public function index() 
	{
		$video = $this->video_model->listing();
		$this->params['title'] = 'Videos';
		$this->params['video'] =  $video;
		$this->load->admin_template(self::DIR_VIEW. '/index', $this->params);
	}
	
	public function new_form() 
	{
		$this->params['title'] = 'Tambah Video';
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}

	public function do_insert() 
	{
		$form_validation = $this->form_validation;
		$form_validation->set_rules('judul','Judul','required',
			['required' => 'Judul harus diisi']
		);
		$form_validation->set_rules('video','Video','required',
			['required' => 'Video harus diisi']
		);
		
		if ($form_validation->run() === TRUE) {
			$input = $this->input;
			$video = [
				'judul'			=> $input->post('judul'),
				'video'			=> $input->post('video'),
				'id_user'		=> $this->session->userdata('id')
			];
			$this->video_model->tambah($video);
			$this->session->set_flashdata('info','Video telah ditambah');
			redirect('admin/video');
		} else {
			$this->new_form();
		}
	}
	
	// Edit Video
	public function view($id_video) 
	{
		$video = $this->video_model->detail($id_video);
		$this->params['title'] 	= 'Edit Video';
		$this->params['video']	= $video;
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}
	
	public function do_update() 
	{
		$form_validation = $this->form_validation;
		$form_validation->set_rules('judul','Judul','required',
			array( 'required' => 'Judul harus diisi'));
		
		$form_validation->set_rules('video','Video','required',
		array( 'required' => 'Video harus diisi'));
		
		$id_video = $this->input->post('id_video');
		if ($form_validation->run() === TRUE) {
			$input = $this->input;
			$video = [
				'judul'			=> $input->post('judul'),
				'video'			=> $input->post('video'),
				'id_user'		=> $this->session->userdata('id')
			];

			$this->video_model->edit($data,$id_video);
			$this->session->set_flashdata('sukses','video telah ditambah');
			redirect('admin/video');
		} else {

		}
	}

	// Delete Video
	public function delete($id_video) {
		$this->simple_login->cek_login();
		$data = array('id_video'=> $id_video);
		$this->video_model->delete($data);
		$this->session->set_flashdata('sukses','video telah dihapus');
		redirect (base_url('admin/video'));
	}
}