<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends Public_Controller {
    const DIR_VIEW = 'galery';

    public function __construct()
    {
        parent::__construct();
    }
    
    public function index()
    {
        $params = [];
        $this->render(self::DIR_VIEW. '/index', $params); 
    }

}