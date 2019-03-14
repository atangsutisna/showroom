<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_berita extends Admin_Controller 
{
	
	const DIR_VIEW = 'kategori_berita';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_berita_model');
	}
	
	public function index() 
	{
		$kategori_berita = $this->kategori_berita_model->listing();
		$this->params['title']	= 'Kategori Berita';
		$this->params['kategori_berita'] = $kategori_berita;
		$this->load->admin_template(self::DIR_VIEW. '/list', $this->params);
	}

	public function do_insert()
	{
		$this->form_validation->set_rules('nama_kategori_berita','Nama kategori','required',
			array(	'required'	=> 'Nama kategori berita harus diisi'));
		if ($this->form_validation->run() === FALSE) {

		} else {
			$input 				= $this->input;
			$slug_kategori	= url_title($input->post('nama_kategori_berita'),'dash',TRUE);
			$data = array(	
				'slug_kategori_berita'	=> $slug_kategori,
				'nama_kategori_berita'	=> $input->post('nama_kategori_berita'),
				'keterangan'			=> $input->post('keterangan'),
				'urutan'				=> $input->post('urutan')
			);
			$this->kategori_berita_model->tambah($data);
			$this->session->set_flashdata('info','1 Kategori berita telah disimpa');
			redirect('admin/kategori_berita');
		}
	}
	
	public function view($id_kategori_berita) 
	{
		$kategori_berita = $this->kategori_berita_model->detail($id_kategori_berita);
		$this->params['title']	= 'Edit Kategori Berita';
		$this->params['kategori_berita'] = $kategori_berita;
		$this->params['form_action'] = site_url('admin/kategori_berita/do_update');
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}
	// Edit
	public function do_update() {
		$this->form_validation->set_rules('nama_kategori_berita','Nama kategori','required',
			array(	'required'	=> 'Nama kategori berita harus diisi'));
		
		$id_kategori_berita = $this->input->post('id_kategori_berita');
		if ($this->form_validation->run() === FALSE) {
			$this->view($id_kategori_berita);
		} else {
			$input 				= $this->input;
			$slug_kategori	= url_title($input->post('nama_kategori_berita'),'dash',TRUE);
			$data = array(	
				'slug_kategori_berita'	=> $slug_kategori,
				'nama_kategori_berita'	=> $input->post('nama_kategori_berita'),
				'keterangan'			=> $input->post('keterangan'),
			);
			$this->kategori_berita_model->modify($id_kategori_berita, $data);
			$this->session->set_flashdata('info','Kategori berita telah diedit');
			redirect('admin/kategori_berita');
		}
		// End masuk database
	}
	
	// Delete
	public function delete($id_kategori_berita) {
		$this->simple_login->cek_login();
		$data = array('id_kategori_berita'	=> $id_kategori_berita);
		$this->kategori_berita_model->delete($data);
		$this->session->set_flashdata('sukses','Kategori berita telah didelete');
		redirect(base_url('admin/kategori_berita'));		
	}
}