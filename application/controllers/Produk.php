<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('produk_model');
		$this->load->model('kategori_produk_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		
		$cats = $this->site_model->nav_produk();
		$this->load->helper('common_helper');
		$cat_choices = to_dropdown_choices($cats, 'id_kategori_produk', 'nama_kategori_produk');
		$data	= array( 'title'	=> 'Produk '.$site['namaweb'],
						 'keywords' => 'Produk '.$site['namaweb'].', '.$site['keywords'],
						 'produk'	=> $produk,
						 'cat_choices' => $cat_choices,
						 'isi'		=> 'produk/list');
		$this->load->view('layout/wrapper',$data); 
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
	public function read($slug_produk) {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->home();
		$read	= $this->produk_model->read($slug_produk);
		
		$data	= array( 'title'	=> $read->nama_produk,
						 'keywords' => $read->nama_produk,
						 'produk'	=> $produk,
						 'read'		=> $read,
						 'isi'		=> 'produk/read');
		$this->load->view('layout/wrapper',$data); 
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
						 'id_kategori_produk' => $cat_id,
						 'isi'		=> 'produk/list');
		$this->load->view('layout/wrapper', $data); 
	}
}
		