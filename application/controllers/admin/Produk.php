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

	private $transmisi_choices = [
		'manual' => 'Manual',
		'automatic' => 'Automatic',
	];

	private $bbm_choices = [
		'bensin' => 'Bensin',
		'solar' => 'Solar',
		'diesel' => 'Diesel',
	];

	public function __construct()
	{
		parent::__construct();
		$this->load->model('produk_model');
		$this->load->model('kategori_produk_model');
		$this->load->model('Bodytype_model', 'bodytype');

		$categories	= $this->kategori_produk_model->listing();
		$this->params['cat_choices'] = to_map($categories, 'id_kategori_produk', 'nama_kategori_produk');
		$this->params['status_choices'] = $this->status_choices;
		$this->params['unit_choices'] = $this->unit_choices;
		$this->params['transmisi_choices'] = $this->transmisi_choices;
		$this->params['bbm_choices'] = $this->bbm_choices;
		$this->params['body_type_choices'] = to_map($this->bodytype->find_all(), 'id', 'name');
	}
	
	public function index() 
	{
		$produk = $this->produk_model->listing();
		$this->params['title'] = 'Data Mobil';
		$this->params['produk'] = $produk;
		$this->load->admin_template(self::DIR_VIEW. '/index', $this->params);
	}
	
	public function reg_form() 
	{
		$this->params['title'] = 'Data Mobil';
		$this->params['form_action'] = 'admin/produk/do_reg';

		$categories	= $this->kategori_produk_model->listing();
		$general_form_params = [
			'cat_choices' => to_map($categories, 'id_kategori_produk', 'nama_kategori_produk'),
			'status_choices' => $this->status_choices,
			'unit_choices' => $this->unit_choices,
			'transmisi_choices' => $this->transmisi_choices,
			'bbm_choices' => $this->bbm_choices,
			'body_type_choices' => to_map($this->bodytype->find_all(), 'id', 'name')
		];
		$this->params['general_form'] = $this->load->view('admin/product/_general_form', $general_form_params, TRUE);
		$this->params['performa_form'] = $this->load->view('admin/product/_performa_form', [], TRUE);
		$this->params['int_ext_form'] = $this->load->view('admin/product/_int_ext_form', [], TRUE);
		$this->params['fitur_pengereman_form'] = $this->load->view('admin/product/_fitur_pengereman_form', [], TRUE);
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}

	public function do_reg() 
	{
		$form_validation = $this->form_validation;
		$form_validation->set_error_delimiters('<span class="text-danger">', '</span>');	
		$form_validation->set_rules('nama_produk','Nama produk','required',
			array(	'required'		=> 'Nama produk harus diisi'));
		$form_validation->set_rules('id_kategori_produk','Kategori produk','required',
			array(	'required'		=> 'Kateori produk harus diisi'));
		$form_validation->set_rules('tahun','Tahun','required',
			array(	'required'		=> 'Tahun harus diisi'));
		$form_validation->set_rules('transmisi','Transmisi','required',
			array(	'required'		=> 'Transmisi harus diisi'));
		$form_validation->set_rules('kapasitas_mesin','Kapasitas mesin','required',
			array(	'required'		=> 'Kapasitas mesin harus diisi'));
		$form_validation->set_rules('id_body_type','Body','required',
			array(	'required'		=> 'Body harus diisi'));
		$form_validation->set_rules('harga','Harga produk','required',
			array(	'required'		=> 'Harga produk harus diisi'));
		$form_validation->set_rules('stok','Stok produk','required',
			array(	'required'		=> 'Stok produk harus diisi'));
		$form_validation->set_rules('keterangan','Keterangan produk','required',
			array(	'required'		=> 'Keterangan produk harus diisi'));
		if ($form_validation->run() === TRUE) {
			$data = [
				'id_user'				=> $this->session->userdata('id'),
				'kondisi' 				=> $this->input->post('kondisi'),
				'id_kategori_produk'	=> $this->input->post('id_kategori_produk'),
				'tahun' 				=> $this->input->post('tahun'),
				'transmisi' 			=> $this->input->post('transmisi'),
				'tipe_bahan_bakar' 		=> $this->input->post('tipe_bahan_bakar'),
				'id_body_type' 			=> $this->input->post('id_body_type'),
				'kapasitas_mesin' 		=> $this->input->post('kapasitas_mesin'),
				'slug_produk'			=> url_title($this->input->post('nama_produk'),'dash',TRUE),
				'nama_produk'			=> $this->input->post('nama_produk'),
				'keterangan'			=> $this->input->post('keterangan'),
				'harga'					=> $this->input->post('harga'),
				'stok'					=> $this->input->post('stok'),
				'satuan'				=> $this->input->post('satuan'),
				'status_produk'			=> $this->input->post('status_produk'),	
				//performa
				'tipe_mesin'			=> $this->input->post('tipe_mesin'),
				'diameter_langkah'		=> $this->input->post('diameter_langkah'),
				'perbandingan_kompresi'	=> $this->input->post('perbandingan_kompresi'),
				'daya_maksimum'			=> $this->input->post('daya_maksimum'),
				'torsi_maksimum'		=> $this->input->post('torsi_maksimum'),
				'sistem_bahan_bakar'	=> $this->input->post('sistem_bahan_bakar'),
				'sistem_transmisi'		=> $this->input->post('sistem_transmisi'),
				//interior and exterior
				'dimensi_type_1'		=> $this->input->post('dimensi_type_1'),
				'dimensi_type_2'		=> $this->input->post('dimensi_type_2'),
				'dimensi_type_3'		=> $this->input->post('dimensi_type_3'),
				'jarak_pijak_depan'		=> $this->input->post('jarak_pijak_depan'),
				'jarak_pijak_belakang'		=> $this->input->post('jarak_pijak_belakang'),
				'jarak_sumbu_roda'		=> $this->input->post('jarak_sumbu_roda'),
				'kapasitas_tangki'		=> $this->input->post('kapasitas_tanki'),
				//fitur pengereman
				'rangka_body'			=> $this->input->post('rangka_body'),
				'suspensi_depan'		=> $this->input->post('suspensi_depan'),
				'rem_depan'				=> $this->input->post('rem_depan'),
				'rem_belakang'			=> $this->input->post('rem_belakang'),
				'sistem_pengereman'		=> $this->input->post('sistem_pengereman'),
				'ukuran_ban'			=> $this->input->post('ukuran_ban')											
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
					$config['width'] 			= 760; // Pixel
					$config['height'] 			= 463; // Pixel
					$config['x_axis'] 			= 0;
					$config['y_axis'] 			= 0;
					$config['thumb_marker'] 	= '';
					$this->load->library('image_lib', $config);
					$this->image_lib->resize();
	
					$data['gambar']	= $upload_data['uploads']['file_name'];
				}
			}
	
			$this->produk_model->insert($data);
			$this->session->set_flashdata('info','1 produk telah berhasil ditambahkan');
			redirect('admin/produk');
		} else {
			$this->reg_form();
		}			
	}

	public function view($id_produk) 
	{
		$this->params['title'] = 'Data Mobil';
		$this->params['form_action'] = 'admin/produk/do_update';

		$categories	= $this->kategori_produk_model->listing();
		$general_form_params = [
			'cat_choices' => to_map($categories, 'id_kategori_produk', 'nama_kategori_produk'),
			'status_choices' => $this->status_choices,
			'unit_choices' => $this->unit_choices,
			'transmisi_choices' => $this->transmisi_choices,
			'bbm_choices' => $this->bbm_choices,
			'body_type_choices' => to_map($this->bodytype->find_all(), 'id', 'name'),
			'produk' => $this->produk_model->detail($id_produk)
		];
		$this->params['general_form'] = $this->load->view('admin/product/_general_form', $general_form_params, TRUE);
		$this->params['performa_form'] = $this->load->view('admin/product/_performa_form', [], TRUE);
		$this->params['int_ext_form'] = $this->load->view('admin/product/_int_ext_form', [], TRUE);
		$this->params['fitur_pengereman_form'] = $this->load->view('admin/product/_fitur_pengereman_form', [], TRUE);

		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
	}

	public function do_update() 
	{
		$form_validation = $this->form_validation;
		$form_validation->set_rules('nama_produk','Nama produk','required',
			array(	'required'		=> 'Nama produk harus diisi'));
		$form_validation->set_rules('id_kategori_produk','Kategori produk','required',
			array(	'required'		=> 'Kateori produk harus diisi'));
		$form_validation->set_rules('tahun','Tahun','required',
			array(	'required'		=> 'Tahun harus diisi'));
		$form_validation->set_rules('transmisi','Transmisi','required',
			array(	'required'		=> 'Transmisi harus diisi'));
		$form_validation->set_rules('kapasitas_mesin','Kapasitas mesin','required',
			array(	'required'		=> 'Kapasitas mesin harus diisi'));
		$form_validation->set_rules('id_body_type','Body','required',
			array(	'required'		=> 'Body harus diisi'));
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
				'kondisi' 				=> $this->input->post('kondisi'),
				'id_kategori_produk'	=> $this->input->post('id_kategori_produk'),
				'tahun' 				=> $this->input->post('tahun'),
				'transmisi' 			=> $this->input->post('transmisi'),
				'tipe_bahan_bakar' 		=> $this->input->post('tipe_bahan_bakar'),
				'id_body_type' 			=> $this->input->post('id_body_type'),
				'kapasitas_mesin' 		=> $this->input->post('kapasitas_mesin'),
				'slug_produk'			=> url_title($this->input->post('nama_produk'),'dash',TRUE),
				'nama_produk'			=> $this->input->post('nama_produk'),
				'keterangan'			=> $this->input->post('keterangan'),
				'harga'					=> $this->input->post('harga'),
				'stok'					=> $this->input->post('stok'),
				'satuan'				=> $this->input->post('satuan'),
				'status_produk'			=> $this->input->post('status_produk'),
				//performa
				'tipe_mesin'			=> $this->input->post('tipe_mesin'),
				'diameter_langkah'		=> $this->input->post('diameter_langkah'),
				'perbandingan_kompresi'	=> $this->input->post('perbandingan_kompresi'),
				'daya_maksimum'			=> $this->input->post('daya_maksimum'),
				'torsi_maksimum'		=> $this->input->post('torsi_maksimum'),
				'sistem_bahan_bakar'	=> $this->input->post('sistem_bahan_bakar'),
				'sistem_transmisi'		=> $this->input->post('sistem_transmisi'),
				//interior and exterior
				'dimensi_type_1'		=> $this->input->post('dimensi_type_1'),
				'dimensi_type_2'		=> $this->input->post('dimensi_type_2'),
				'dimensi_type_3'		=> $this->input->post('dimensi_type_3'),
				'jarak_pijak_depan'		=> $this->input->post('jarak_pijak_depan'),
				'jarak_pijak_belakang'		=> $this->input->post('jarak_pijak_belakang'),
				'jarak_sumbu_roda'		=> $this->input->post('jarak_sumbu_roda'),
				'kapasitas_tangki'		=> $this->input->post('kapasitas_tanki'),
				//fitur pengereman
				'rangka_body'			=> $this->input->post('rangka_body'),
				'suspensi_depan'		=> $this->input->post('suspensi_depan'),
				'rem_depan'				=> $this->input->post('rem_depan'),
				'rem_belakang'			=> $this->input->post('rem_belakang'),
				'sistem_pengereman'		=> $this->input->post('sistem_pengereman'),
				'ukuran_ban'			=> $this->input->post('ukuran_ban'),
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

	public function delete($id_produk) 
	{
		$this->produk_model->delete($id_produk);
		$this->session->set_flashdata('info','Data telah didelete');
		redirect('admin/produk');		
	}
}
