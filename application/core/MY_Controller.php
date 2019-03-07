<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Controller extends CI_Controller 
{
    protected $params = [];

    public function __construct()
    {
		parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->params['site_config'] = $this->konfigurasi_model->find_one();
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
        $this->load->template($main_view, $merged_params); 
    }
}