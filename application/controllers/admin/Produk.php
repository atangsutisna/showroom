<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends Admin_Controller 
{	
	const DIR_VIEW = 'product';

	private $status_choices = [
		'draft' => 'Draft',
		'publish' => 'Publish'
	];

	private $unit_choices = [
		'unit' => 'Unit'
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_produk_model');

		$categories	= $this->kategori_produk_model->listing();
		$this->params['cat_choices'] = to_map($categories, 'id_kategori_produk', 'nama_kategori_produk');
		$this->params['status_choices'] = $this->status_choices;
		$this->params['unit_choices'] = $this->unit_choices;
	}
	
	public function index() 
	{
		$produk = $this->produk_model->listing();
		$this->params['title'] = 'Data produk';
		$this->params['produk'] = $produk;
		$this->load->admin_template(self::DIR_VIEW. '/list', $this->params);
	}
	
	public function reg_form() 
	{
		$this->params['title'] = 'Tambah Produk';
		$this->params['form_action'] = 'admin/produk/do_reg';
		$this->load->admin_template(self::DIR_VIEW. '/_form_simple', $this->params);
	}

	public function do_reg() 
	{
		
	}

	// Tambah
	public function tambah() 
	{
		$kategori	= $this->kategori_produk_model->listing();
		
		// Validasi
		$form_validation = $this->form_validation;
		
		$form_validation->set_rules('nama_produk','Nama produk','required|is_unique[produk.nama_produk]',
			array(	'required'		=> 'Nama produk harus diisi',
					'is_unique'		=> 'Nama produk: <strong>'.$this->input->post('nama_produk').
									   '</strong> sudah ada. Buat nama yang berbeda'));
		
		$form_validation->set_rules('harga','Harga produk','required',
			array(	'required'		=> 'Harga produk harus diisi'));
		
		$form_validation->set_rules('stok','Stok produk','required',
			array(	'required'		=> 'Stok produk harus diisi'));
			
		$form_validation->set_rules('keterangan','Keterangan produk','required',
			array(	'required'		=> 'Keterangan produk harus diisi'));
		
		if($form_validation->run()) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Tambah produk',
						'kategori'	=> $kategori,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/produk/tambah');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
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
							'id_kategori_produk'	=> $i->post('id_kategori_produk'),
							'slug_produk'			=> url_title($i->post('nama_produk'),'dash',TRUE),
							'nama_produk'			=> $i->post('nama_produk'),
							'keterangan'			=> $i->post('keterangan'),
							'harga'					=> $i->post('harga'),
							'stok'					=> $i->post('stok'),
							'satuan'				=> $i->post('satuan'),
							'status_produk'			=> $i->post('status_produk'),
							'gambar'				=> $upload_data['uploads']['file_name'],
							'tanggal_post'			=> date('Y-m-d H:i:s'),
							'id_body_type' => 4
							);
			$this->produk_model->tambah($data);
			$this->session->set_flashdata('sukses','Produk telah ditambah');
			redirect(base_url('admin/produk'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Tambah produk',
						'kategori'	=> $kategori,
						'isi'		=> 'admin/produk/tambah');
		$this->load->view('admin/layout/wrapper', $data);
	}
	

	public function edit($id_produk) 
	{
		$this->params['title'] = 'Tambah Produk';
		$this->params['produk']	= $this->produk_model->detail($id_produk);
		$this->params['form_action'] = 'admin/produk/do_update';
		$this->load->admin_template(self::DIR_VIEW. '/_form_simple', $this->params);
	}

	public function do_update() 
	{
		$form_validation = $this->form_validation;
		$form_validation->set_rules('nama_produk','Nama produk','required',
			array(	'required'		=> 'Nama produk harus diisi'));
		$form_validation->set_rules('harga','Harga produk','required',
			array(	'required'		=> 'Harga produk harus diisi'));
		$form_validation->set_rules('stok','Stok produk','required',
			array(	'required'		=> 'Stok produk harus diisi'));
		$form_validation->set_rules('keterangan','Keterangan produk','required',
			array(	'required'		=> 'Keterangan produk harus diisi'));

		$id_produk = $this->input->post('id_produk');		
		if ($form_validation->run() === TRUE) {
			$data = [
				'id_user'				=> $this->session->userdata('id'),
				'id_kategori_produk'	=> $this->input->post('id_kategori_produk'),
				'slug_produk'			=> url_title($this->input->post('nama_produk'),'dash',TRUE),
				'nama_produk'			=> $this->input->post('nama_produk'),
				'keterangan'			=> $this->input->post('keterangan'),
				'harga'					=> $this->input->post('harga'),
				'stok'					=> $this->input->post('stok'),
				'satuan'				=> $this->input->post('satuan'),
				'status_produk'			=> $this->input->post('status_produk')									
			];

			if (!empty($_FILES['gambar']['name'])) {  
				$config['upload_path'] 		= './assets/upload/image/';
				$config['allowed_types'] 	= 'gif|jpg|png|svg';
				$config['max_size']			= '12000'; // KB	
				$this->load->library('upload', $config);	
				if ($this->upload->do_upload('gambar')) {
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
	
					$data['gambar']	= $upload_data['uploads']['file_name'];
				}
			}

			$this->produk_model->modify($id_produk, $data);
			$this->session->set_flashdata('info','Produk telah diedit');
			redirect('admin/produk');
		} else {
			$this->edit($id_produk);
		}
	}

	/** 
	public function edit($id_produk) {
		$produk		= $this->produk_model->detail($id_produk);
		$kategori	= $this->kategori_produk_model->listing();
		
		// Validasi
		$form_validation = $this->form_validation;
		
		$form_validation->set_rules('nama_produk','Nama produk','required',
			array(	'required'		=> 'Nama produk harus diisi'));
		
		$form_validation->set_rules('harga','Harga produk','required',
			array(	'required'		=> 'Harga produk harus diisi'));
		
		$form_validation->set_rules('stok','Stok produk','required',
			array(	'required'		=> 'Stok produk harus diisi'));
			
		$form_validation->set_rules('keterangan','Keterangan produk','required',
			array(	'required'		=> 'Keterangan produk harus diisi'));
		
		if($form_validation->run()) {
			if(!empty($_FILES['gambar']['name'])) {
			$config['upload_path'] 		= './assets/upload/image/';
			$config['allowed_types'] 	= 'gif|jpg|png|svg';
			$config['max_size']			= '12000'; // KB	
			$this->load->library('upload', $config);
			if(! $this->upload->do_upload('gambar')) {
		// End validasi
		
		$data = array(	'title'		=> 'Edit produk',
						'kategori'	=> $kategori,
						'produk'	=> $produk,
						'error'		=> $this->upload->display_errors(),
						'isi'		=> 'admin/produk/edit');
		$this->load->view('admin/layout/wrapper', $data);
		// Masuk database
		}else{
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
			$data = array(	'id_produk'				=> $id_produk,
							'id_user'				=> $this->session->userdata('id'),
							'id_kategori_produk'	=> $i->post('id_kategori_produk'),
							'slug_produk'			=> url_title($i->post('nama_produk'),'dash',TRUE),
							'nama_produk'			=> $i->post('nama_produk'),
							'keterangan'			=> $i->post('keterangan'),
							'harga'					=> $i->post('harga'),
							'stok'					=> $i->post('stok'),
							'satuan'				=> $i->post('satuan'),
							'status_produk'			=> $i->post('status_produk'),
							'gambar'				=> $upload_data['uploads']['file_name']
							);
			$this->produk_model->edit($data);
			$this->session->set_flashdata('sukses','Produk telah diedit');
			redirect(base_url('admin/produk'));
		}}else{
			// Proses ke database
			$i = $this->input;
			$data = array(	'id_produk'				=> $id_produk,
							'id_user'				=> $this->session->userdata('id'),
							'id_kategori_produk'	=> $i->post('id_kategori_produk'),
							'slug_produk'			=> url_title($i->post('nama_produk'),'dash',TRUE),
							'nama_produk'			=> $i->post('nama_produk'),
							'keterangan'			=> $i->post('keterangan'),
							'harga'					=> $i->post('harga'),
							'stok'					=> $i->post('stok'),
							'satuan'				=> $i->post('satuan'),
							'status_produk'			=> $i->post('status_produk')									
							);
			$this->produk_model->edit($data);
			$this->session->set_flashdata('sukses','Produk telah diedit');
			redirect(base_url('admin/produk'));
		}}
		// End masuk database
		$data = array(	'title'		=> 'Edit produk',
						'kategori'	=> $kategori,
						'produk'	=> $produk,
						'isi'		=> 'admin/produk/edit'); 
		$this->load->view('admin/layout/wrapper', $data);
	} **/

	// Delete
	public function delete($id_produk) 
	{
		$this->simple_login->cek_login();
		$data = array('id_produk'	=> $id_produk);
		$this->produk_model->delete($data);
		$this->session->set_flashdata('sukses','Data telah didelete');
		redirect(base_url('admin/produk'));		
	}
}