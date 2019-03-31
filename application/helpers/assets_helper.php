<?php
/**
 * @author Atang Sutisna <atang.sutisna.87@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('build_url_css')) 
{
    /**
     * @param string css file
     */
    function build_url_css($file_name)
    {
        $CI =& get_instance();
        return $CI->theme_assets->build_url_css($file_name);
    }    
}

if (! function_exists('build_url_js')) 
{
    /**
     * @param string css file
     */
    function build_url_js($file_name)
    {
        $CI =& get_instance();
        return $CI->theme_assets->build_url_js($file_name);
    }    
}

if (! function_exists('build_url_image')) 
{
    /**
     * @param string css file
     */
    function build_url_image($file_name)
    {
        $CI =& get_instance();
        return $CI->theme_assets->build_url_image($file_name);
    }    
}
if (! function_exists('build_url_plugins')) 
{
    /**
     * @param string css file
     */
    function build_url_plugins($file_name)
    {
        $CI =& get_instance();
        return $CI->theme_assets->build_url_plugins($file_name);
    }    
}
