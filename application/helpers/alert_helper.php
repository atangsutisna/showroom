<?php

/**
 * @author Atang Sutisna <atang.sutisna.87@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('show_bootstrap_warn_alert')) 
{
    /**
     * @param string $warn_message
     */
    function show_bootstrap_warn_alert($warn_message)
    {
        echo "<div class=\"alert alert-warning\" role=\"alert\">{$warn_message}</div>";
    }    
}

if (! function_exists('show_bootstrap_info_alert')) 
{
    /**
     * @param string $info_message
     */
    function show_bootstrap_info_alert($info_message)
    {
        echo "<div class=\"alert alert-info\" role=\"alert\">{$info_message}</div>";
    }    
}

if (! function_exists('show_bootstrap_danger_alert')) 
{
    /**
     * @param string $danger_message
     */
    function show_bootstrap_danger_alert($danger_message)
    {
        echo "<div class=\"alert alert-danger\" role=\"alert\">{$danger_message}</div>";
    }
    
}

if (! function_exists('show_boostrap_alert')) 
{
    function show_bootstrap_alert()
    {
        $CI = & get_instance();
        
        $warn_message = $CI->session->flashdata('warn');
        if (isset($warn_message)) {
            show_bootstrap_warn_alert($warn_message);
        }
        
        $info_message = $CI->session->flashdata('info');
        if (isset($info_message)) {
            show_bootstrap_info_alert($info_message);
        }
        
        $danger_message = $CI->session->flashdata('danger');
        if (isset($danger_message)) {
            show_bootstrap_danger_alert($danger_message);
        }
        
    }
    
}