<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Public_Controller {
	const DIR_VIEW = 'home';
	// Load database
	public function __construct(){
		parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('produk_model');
		$this->load->model('berita_model');
		$this->load->model('video_model');
	}
	
	// Index 
	public function index() {
		$site	= $this->konfigurasi_model->listing();
		$produk	= $this->produk_model->find_all();
		$berita	= $this->berita_model->home();
		$video	= $this->video_model->home();
		
		$template_dir = $this->params['template_dir'];
		$products_view = $this->load->view("{$template_dir}/home/products", [
			'produk' => $produk
		], TRUE);

		$about_view = $this->load->view("{$template_dir}/home/about", [], TRUE);
		$params	= array( 
			'title'	=> $site['namaweb'].' | '.$site['tagline'],
			'keywords' => $site['namaweb'].', '.$site['keywords'],
			'product_view' => $products_view,
			'about_view' => $about_view,
			'berita'	=> $berita,
			'video'	=> $video,	
		);
		$this->render(self::DIR_VIEW. '/index', $params); 
	}
}
		