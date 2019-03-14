<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends Admin_Controller 
{
	const DIR_VIEW = 'berita';

	private $status_choices = [
		'draft' => 'Draft',
		'publish' => 'publish'
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_berita_model');

		$kategori	= $this->kategori_berita_model->listing();
		$this->params['kategori_choices'] = to_map($kategori, 'id_kategori_berita', 'nama_kategori_berita');
		$this->params['status_choices'] = $this->status_choices;
	}
	
	public function index() 
	{
		$berita = $this->berita_model->listing();
		
		$this->params['title'] = 'Data berita';
		$this->params['berita'] = $berita;
		$this->load->admin_template(self::DIR_VIEW. '/index', $this->params);
	}
	
	public function new_form() 
	{
		$this->params['title']	= 'Tambah berita';
		$this->params['form_action']	= site_url('admin/berita/do_insert');
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}

	public function do_insert() {
		$form_validation = $this->form_validation;
		$form_validation->set_rules('nama_berita','Nama berita','required|is_unique[berita.nama_berita]',
			array(	'required'		=> 'Nama berita harus diisi',
					'is_unique'		=> 'Nama berita: <strong>'.$this->input->post('nama_berita').
									   '</strong> sudah ada. Buat nama yang berbeda'));
		$form_validation->set_rules('keterangan','Keterangan berita','required',
			array(	'required'		=> 'Keterangan berita harus diisi'));
		
		if ($form_validation->run()) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
				$this->new_form();
			} else {
				$upload_data				= array('uploads' =>$this->upload->data());
				// Image Editor
				$config['image_library']	= 'gd2';
				$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
				$config['new_image'] 		= './assets/upload/image/thumbs/';
				$config['create_thumb'] 	= TRUE;
				$config['quality'] 			= "100%";
				$config['maintain_ratio'] 	= TRUE;
				$config['width'] 			= 360; // Pixel
				$config['height'] 			= 200; // Pixel
				$config['x_axis'] 			= 0;
				$config['y_axis'] 			= 0;
				$config['thumb_marker'] 	= '';
				$this->load->library('image_lib', $config);
				$this->image_lib->resize();
				
				// Proses ke database
				$i = $this->input;
				$data = array(	'id_user'				=> $this->session->userdata('id'),
								'id_kategori_berita'	=> $i->post('id_kategori_berita'),
								'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
								'nama_berita'			=> $i->post('nama_berita'),
								'keterangan'			=> $i->post('keterangan'),
								'jenis_berita'			=> 'berita',
								'status'			=> $i->post('status'),
								'gambar'				=> $upload_data['uploads']['file_name'],
								'tanggal_post'			=> date('Y-m-d H:i:s')
								);
				$this->berita_model->tambah($data);
				$this->session->set_flashdata('info','Berita telah ditambah');
				redirect('admin/berita');
			}
		}

		$this->new_form();
	}
	
	public function view($id_berita) 
	{
		$berita		= $this->berita_model->detail($id_berita);
		$this->params['title'] = 'Edit berita';
		$this->params['berita']	= $berita;
		$this->params['form_action']	= site_url('admin/berita/do_update');
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}

	// Edit
	public function do_update()
	{
		$id_berita = $this->input->post('id_berita');
		$berita		= $this->berita_model->detail($id_berita);
		
		$form_validation = $this->form_validation;
		$form_validation->set_rules('nama_berita','Nama berita','required',
			array(	'required'		=> 'Nama berita harus diisi'));
		$form_validation->set_rules('keterangan','Keterangan berita','required',
			array(	'required'		=> 'Keterangan berita harus diisi'));
		
		if ($form_validation->run()) {
			if (!empty($_FILES['gambar']['name'])) {
				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '12000'; // KB	
				$this->load->library('upload', $config);

				if(! $this->upload->do_upload('gambar')) {
					$this->params['title']	= 'Edit berita';
					$this->params['berita']	= $berita;
					$this->params['error']	= $this->upload->display_errors();
					$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
				} else {
					$upload_data				= array('uploads' =>$this->upload->data());
					$config['image_library']	= 'gd2';
					$config['source_image'] 	= './assets/upload/image/'.$upload_data['uploads']['file_name']; 
					$config['new_image'] 		= './assets/upload/image/thumbs/';
					$config['create_thumb'] 	= TRUE;
					$config['quality'] 			= "100%";
					$config['maintain_ratio'] 	= TRUE;
					$config['width'] 			= 360; // Pixel
					$config['height'] 			= 200; // Pixel
					$config['x_axis'] 			= 0;
					$config['y_axis'] 			= 0;
					$config['thumb_marker'] 	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
				
					$i = $this->input;
					$data = array(	
						'id_user'				=> $this->session->userdata('id'),
						'id_kategori_berita'	=> $i->post('id_kategori_berita'),
						'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
						'nama_berita'			=> $i->post('nama_berita'),
						'keterangan'			=> $i->post('keterangan'),
						'jenis_berita'				=> $i->post('jenis_berita'),
						'status'			=> $i->post('status'),
						'gambar'				=> $upload_data['uploads']['file_name']
					);
					$this->berita_model->modify($id_berita, $data);
					$this->session->set_flashdata('info','1 Berita telah diupdate');
					redirect('admin/berita');
				}
			} else {
				$i = $this->input;
				$data = array(	
					'id_user'				=> $this->session->userdata('id'),
					'id_kategori_berita'	=> $i->post('id_kategori_berita'),
					'slug_berita'			=> url_title($i->post('nama_berita'),'dash',TRUE),
					'nama_berita'			=> $i->post('nama_berita'),
					'keterangan'			=> $i->post('keterangan'),
					'jenis_berita'				=> $i->post('jenis_berita'),
					'status'			=> $i->post('status')									
				);
				$this->berita_model->modify($id_berita, $data);
				$this->session->set_flashdata('info','1 Berita telah diupdate');
				redirect('admin/berita');
			}
		}

		$this->params['title']	= 'Edit berita';
		$this->params['berita']	= $berita;
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}

	// Delete
	public function delete($id_berita) {
		$this->simple_login->cek_login();
		$data = array('id_berita'	=> $id_berita);
		$this->berita_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/berita'));		
	}
}