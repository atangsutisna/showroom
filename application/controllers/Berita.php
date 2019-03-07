<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends Public_Controller {
	
	const DIR_VIEW = 'berita';

	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('berita_model');
		$this->load->model('kategori_berita_model');
	}
	
	// Index 
	public function index() 
	{
		$posts	= $this->berita_model->recent_posts();
		$params	= array('posts'	=> $posts);
		$this->render(self::DIR_VIEW. '/index', $params); 
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
	public function read($slug_berita) 
	{
		$post	= $this->berita_model->read($slug_berita);
		$data	= array(
			'title' => $post->nama_berita,
			'post'		=> $post
		);
		$this->render(self::DIR_VIEW. '/view', $data); 
	}
}
		