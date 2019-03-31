<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Controller extends CI_Controller 
{
    protected $params = [];

    public function __construct()
    {
        parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->params['site_config'] = $this->konfigurasi_model->find_one();
	}

} /** end of MY_Controller */

class Admin_Controller extends MY_Controller 
{
    public function __construct()
    {
        parent::__construct();
	}

} /** end of Admin_Controller */

class Public_Controller extends MY_Controller 
{
    const TEMPLATE_DIR = "themes";
    const TEMPLATE_NAME = "carzone";

    public function __construct()
    {
        parent::__construct();
		$this->load->model('konfigurasi_model');
		$this->load->model('produk_model');
		$this->load->model('berita_model');
		$this->load->model('video_model');

        $this->load->library('Theme_assets', [
            'assets_dir' => 'assets/themes',
            'theme_name' => 'carzone'
        ]);
        $this->load->helper('assets_helper');

        $this->params['base_template_dir'] = self::TEMPLATE_DIR;
        $this->params['template_name'] = self::TEMPLATE_NAME;
        $this->params['template_dir'] = self::TEMPLATE_DIR. '/' . self::TEMPLATE_NAME;
	}

    protected function render($main_view, $params)
    {
        if (!array_key_exists('title', $params) || 
            !array_key_exists('keywords', $params) ||
            !array_key_exists('description', $params)) {

            $site_config = $this->params['site_config'];
            if (!array_key_exists('title', $params)) {
                $this->params['title'] = 'Berita '.$site_config->namaweb.' | '.$site_config->tagline;
            }

            if (!array_key_exists('keywords', $params)) {
                $this->params['keywords'] = 'Berita '.$site_config->namaweb.' | '.$site_config->keywords;
            }

            if (!array_key_exists('description', $params)) {
                $this->params['description'] = $site_config->tentang;
            }

        }

        $merged_params = array_merge($this->params, $params);
        //var_dump($this->params);
        $this->load->template($main_view, $merged_params); 
    }
} /** end of Public_Controller */