<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends Public_Controller {
    const DIR_VIEW = 'galery';

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Galery_model', 'galery');
    }
    
    public function index()
    {
        $params = [
            'galeries' => $this->galery->find_all()
        ];
        $this->render(self::DIR_VIEW. '/index', $params); 
    }

}