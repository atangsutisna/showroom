<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Image_manager
{
    private $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function resize($source_file, $width, $height)
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

    public function crop($source_file, $width, $height)
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = $source_file;
        $config['new_image'] = 'files_uploaded/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width'] = $width;
        $config['height'] = $height;
        $config['x_axis'] = 100;
        $config['y_axis'] = 60;
        $this->CI->load->library('image_lib', $config);
        
        $this->CI->image_lib->crop();
    }

}