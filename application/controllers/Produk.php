<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends Public_Controller {
	
	const DIR_VIEW = 'produk';
	// Load database
	public function __construct()
	{
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('produk_model');
		$this->load->model('Berita_model', 'berita_model');
		$this->load->model('kategori_produk_model');
	}
	
	// Index 
	public function index() 
	{
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		
		$cats = $this->site_model->nav_produk();
		$this->load->helper('common_helper');
		$cat_choices = to_dropdown_choices($cats, 'id_kategori_produk', 'nama_kategori_produk');
		$params	= array( 'title'	=> 'Produk '.$site['namaweb'],
						 'keywords' => 'Produk '.$site['namaweb'].', '.$site['keywords'],
						 'produk'	=> $produk,
						 'cat_choices' => $cat_choices,
						 'isi'		=> 'produk/list');
		$this->render(self::DIR_VIEW. '/index', $params); 
	}
	
	// Kategori 
	public function kategori($slug_kategori_produk) {
		$site				= $this->konfigurasi_model->listing();
		$kategori			= $this->kategori_produk_model->read($slug_kategori_produk);
		$id_kategori_produk	= $kategori->id_kategori_produk;
		$produk				= $this->produk_model->kategori($id_kategori_produk);
		
		$data	= array( 'title'	=> 'Kategori Produk '.$kategori->nama_kategori_produk,
						 'keywords' => 'Kategori Produk '.$kategori->nama_kategori_produk,
						 'produk'	=> $produk,
						 'isi'		=> 'produk/list');
		$this->load->view('layout/wrapper',$data); 
	}
	
	// Read
	public function read($slug_produk) 
	{
		$site	= $this->konfigurasi_model->listing();
		$product	= $this->produk_model->read($slug_produk);
		
		$params = array( 
			'title'	=> $product->nama_produk,
			'keywords' => $product->nama_produk,
			'product'	=> $product
		);

		if ($product->kondisi == 'bekas') {
			$this->render(self::DIR_VIEW. '/view', $params); 
		} else if ($product->kondisi == 'baru') {
			$this->render(self::DIR_VIEW. '/view_newcar', $params); 
		} else {
			show_404();
		}
	}

	public function do_search()
	{
		$site	= $this->konfigurasi_model->listing();
		$cat_id = $this->input->get('cat_id');
		$price_from = $this->input->get('price_from');
		$price_to = $this->input->get('price_to');
		$criterion = [];
		if (isset($cat_id) && ($cat_id != NULL || $cat_id != '')) {
			$criterion['kategori_produk.id_kategori_produk'] = $cat_id;
		}
		
		if (isset($price_from) && ($price_from != NULL || $price_from != '')) {
			$criterion['produk.harga > '] = $price_from;
		}

		if (isset($price_to) && ($price_to != NULL || $price_to != '')) {
			$criterion['produk.harga <= '] = $price_to;
		}
		
		$produk	= $this->produk_model->find_all($criterion);

		$this->load->helper('common_helper');
		$cats = $this->site_model->nav_produk();
		$cat_choices = to_dropdown_choices($cats, 'id_kategori_produk', 'nama_kategori_produk');
		$data	= array( 'title'	=> 'Produk '.$site['namaweb'],
						 'keywords' => 'Produk '.$site['namaweb'].', '.$site['keywords'],
						 'produk'	=> $produk,
						 'cat_choices' => $cat_choices,
						 'id_kategori_produk' => $cat_id);
		$this->load->template(self::DIR_VIEW. '/index', $data); 
	}
}
		