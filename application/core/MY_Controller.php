<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Controller extends CI_Controller 
{
    protected $params = [];

    public function __construct()
    {
		parent::__construct();
        $this->load->model('konfigurasi_model');
        $this->params['site_config'] = $this->konfigurasi_model->listing();
	}

    protected function render($main_view, $params)
    {
        $merged_params = array_merge($this->params, $params);
        $this->load->template($main_view, $merged_params); 
    }
}