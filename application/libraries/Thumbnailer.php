<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thumbnailer
{
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function create_thumb($source_file, $width, $height)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_file;
        $config['new_image'] = 'files_uploaded/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = $width;
        $config['height']       = $height;
        $this->CI->load->library('image_lib', $config);
        
        $this->CI->image_lib->resize();
    }

}