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

		$about_view = $this->load->view("{$template_dir}/home/about", ['site_config' => $this->params['site_config']], TRUE);
		$params	= array( 
			'title'	=> $site['namaweb'].' | '.$site['tagline'],
			'keywords' => $site['namaweb'].', '.$site['keywords'],
			'product_view' => $products_view,
			'about_view' => $about_view,
			'berita'	=> $berita,
			'video'	=> $video,	
			'header' => $this->load->view('themes/carzone/home/header', ['site_config' => $this->params['site_config']], TRUE),
			'product_view' => $products_view,
			'about_view' => $about_view,
			'footer' => $this->load->view('themes/carzone/home/footer', [
				'recent_posts' => $berita,
				'site_config' => $this->params['site_config']
			], TRUE),
		);
		//$this->render(self::DIR_VIEW. '/index', $params); 
		$this->render_home($params);
	}

	public function render_home($params)
	{
		$this->load->view($this->params['template_dir'].'/home/home', $params);
	}
}
		