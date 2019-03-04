<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {
	
	const DIR_VIEW = 'berita';

	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('berita_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$posts	= $this->berita_model->recent_posts();
		$data	= array( 'title'	=> 'Berita '.$site['namaweb'].' | '.$site['tagline'],
						 'keywords' => 'Berita '.$site['namaweb'].', '.$site['keywords'],
						 'posts'	=> $posts);
		$this->load->template(self::DIR_VIEW. '/index', $data); 
	}
	
	// Kategori 
	public function kategori($slug_kategori_berita) {
		$site				= $this->konfigurasi_model->listing();
		$kategori			= $this->kategori_berita_model->read($slug_kategori_berita);
		$id_kategori_berita	= $kategori->id_kategori_berita;
		$berita				= $this->berita_model->kategori($id_kategori_berita);
		
		$data	= array( 'title'	=> 'Kategori Berita '.$kategori->nama_kategori_berita,
						 'keywords' => 'Kategori Berita '.$kategori->nama_kategori_berita,
						 'berita'	=> $berita,
						 'isi'		=> 'berita/list');
		$this->load->view('layout/wrapper',$data); 
	}
	
	// Read
	public function read($slug_berita) {
		$site	= $this->konfigurasi_model->listing();
		$berita	= $this->berita_model->home();
		$post	= $this->berita_model->read($slug_berita);
		
		$data	= array( 'title'	=> $post->nama_berita,
						 'keywords' => $post->nama_berita,
						 'berita'	=> $berita,
						 'post'		=> $post);
		$this->load->template(self::DIR_VIEW. '/view', $data); 
	}
}
		