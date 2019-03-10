<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kategori_produk extends Admin_Controller 
{
	
	const DIR_VIEW = 'kategori_produk';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('kategori_produk_model');
	}
	
	// Index
	public function index() 
	{
		$kategori_produk = $this->kategori_produk_model->listing();
		$this->params['title'] = 'Kategori Produk';
		$this->params['kategori_produk'] = $kategori_produk;
		$this->load->admin_template(self::DIR_VIEW. '/list', $this->params);
		/** 
		$this->form_validation->set_rules('nama_kategori_produk','Nama kategori','required',
			array(	'required'	=> 'Nama kategori produk harus diisi'));
		
		if($this->form_validation->run() === FALSE) {
		
		$data = array(	'title'				=> 'Kategori Produk',
						'kategori_produk'	=> $kategori_produk,
						'isi'				=> 'admin/kategori_produk/list');
		$this->load->view('admin/layout/wrapper',$data);
		}else{
			$i 				= $this->input;
			$slug_kategori	= url_title($i->post('nama_kategori_produk'),'dash',TRUE);
			$data = array(	'slug_kategori_produk'	=> $slug_kategori,
							'nama_kategori_produk'	=> $i->post('nama_kategori_produk'),
							'keterangan'			=> $i->post('keterangan'),
							'urutan'				=> $i->post('urutan'));
			$this->kategori_produk_model->tambah($data);
			$this->session->set_flashdata('sukses','Kategori produk telah ditambah');
			redirect(base_url('admin/kategori_produk'));
		} **/
	}
	
	public function reg_form() 
	{
		$this->params['title'] = 'Tambah Kategori Produk';
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}

	public function do_reg() 
	{
		$this->form_validation->set_rules('nama_kategori_produk','Nama kategori','required',
			array(	'required'	=> 'Nama kategori produk harus diisi'));
		if($this->form_validation->run() === FALSE) {
			$this->reg_form();
		} else {
			$slug_kategori	= url_title($this->input->post('nama_kategori_produk'),'dash',TRUE);
			$data = array(	'slug_kategori_produk'	=> $slug_kategori,
							'nama_kategori_produk'	=> $this->input->post('nama_kategori_produk'),
							'keterangan'			=> $this->input->post('keterangan'),
							'urutan'				=> $this->input->post('urutan'));
			$this->kategori_produk_model->tambah($data);
			$this->session->set_flashdata('info','Kategori produk telah ditambah');
			redirect(base_url('admin/kategori_produk'));
		}
	}

	// Edit
	public function edit($id_kategori_produk) {
		$kategori_produk = $this->kategori_produk_model->detail($id_kategori_produk);
		
		// Validasi
		$this->form_validation->set_rules('nama_kategori_produk','Nama kategori','required',
			array(	'required'	=> 'Nama kategori produk harus diisi'));
		
		if($this->form_validation->run() === FALSE) {
		// End validasi
		
		$data = array(	'title'				=> 'Edit Kategori Produk',
						'kategori_produk'	=> $kategori_produk,
						'isi'				=> 'admin/kategori_produk/edit');
		$this->load->view('admin/layout/wrapper',$data);
		// Masuk database
		}else{
		}
		// End masuk database
	}
	
	public function delete($id_kategori_produk) 
	{
		$data = array('id_kategori_produk'	=> $id_kategori_produk);
		$this->kategori_produk_model->delete($data);
		$this->session->set_flashdata('info','Kategori produk telah didelete');
		redirect('admin/kategori_produk');		
	}

	public function do_update()
	{
		$this->form_validation->set_rules('nama_kategori_produk','Nama kategori','required',			
		array('required' => 'Nama kategori produk harus diisi'));
		$id_kategori_produk = $this->input->post('id_kategori_produk');
		if($this->form_validation->run() === FALSE) {
			$this->edit($id_kategori_produk);
		} else {
			$nama_kategori = $this->input->post('nama_kategori_produk');
			$slug_kategori	= url_title($nama_kategori,'dash',TRUE);
			$data = [
				'slug_kategori_produk'	=> $slug_kategori,
				'nama_kategori_produk'	=> $nama_kategori
			];

            if (!empty($_FILES['file']['name'])) {  
                //TODO:buatkan juga thumbnail
                $this->load->config('showroom');
                $config = $this->config->item('upload_setting'); 
                $this->load->library('upload', $config);
    
				$do_upload = $this->upload->do_upload('file');
				if (!$do_upload) {
					echo $this->upload->display_errors();
				} else {
					$upload_data = $this->upload->data();
                                
					$data['image'] = $upload_data['raw_name'];
					$data['image_path'] = 'files_uploaded/'. $upload_data['raw_name']. $upload_data['file_ext'];
				}
            }

			$this->kategori_produk_model->modify($id_kategori_produk, $data);
			$this->session->set_flashdata('sukses','Kategori produk telah berhasil diubah');
			redirect('admin/kategori_produk');
		}

	}
}