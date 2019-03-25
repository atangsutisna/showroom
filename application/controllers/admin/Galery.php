<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Galery extends Admin_Controller 
{
    const DIR_VIEW = 'galery';

	public function __construct()
	{
		parent::__construct();
    }

	public function index() 
	{
		$this->params['title'] = 'Galery';
		$this->load->admin_template(self::DIR_VIEW. '/index', $this->params);
    }

	public function new_form() 
	{
		$this->params['title'] = 'Galery';
		$this->load->admin_template(self::DIR_VIEW. '/new_form', $this->params);
    }

}