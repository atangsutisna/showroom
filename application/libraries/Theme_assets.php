<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Theme_assets
{
    private $CI;
    private $assets_dir;
    private $theme_name;
    private $base_url;

    public function __construct($params)
    {
        if (!array_key_exists('assets_dir', $params) || 
            !array_key_exists('theme_name', $params) ) {
            throw new Exception("Assets Dir or Theme name is required");
        }

        $this->CI =& get_instance();
        $this->assets_dir = $params['assets_dir'];
        $this->theme_name = $params['theme_name'];
        $this->base_url = $this->CI->config->item('base_url');
    }

    private function get_base_dir()
    {
        return "{$this->base_url}/{$this->assets_dir}/{$this->theme_name}";
    }

    public function get_css_dir()
    {
        return $this->get_base_dir(). "/css";
    }

    public function get_image_dir()
    {
        return $this->get_base_dir(). "/images";
    }

    public function get_js_dir()
    {
        return $this->get_base_dir(). "/js";
    }

    /**
     * @param: string with extenstion
     * example: bootstrap.css
     */
    public function build_url_css($file_name)
    {
        return $this->get_css_dir(). '/'. $file_name;
    }

    /**
     * @param: string with extenstion
     * example: bootstrap.js
     */
    public function build_url_js($file_name)
    {
        return $this->get_js_dir(). '/'. $file_name;
    }

    /**
     * @param: string with extenstion
     * example: logo-light.png
     */
    public function build_url_image($file_name)
    {
        return $this->get_image_dir(). '/'. $file_name;
    }

}