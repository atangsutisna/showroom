<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_config extends Admin_Controller 
{
    const DIR_VIEW = 'site_config';

	public function general() 
	{
		$this->params['title']	= 'General Configuration';
		$this->params['site']	= (array) $this->params['site_config'];
        $this->load->admin_template(self::DIR_VIEW. '/general', $this->params);
    }

}