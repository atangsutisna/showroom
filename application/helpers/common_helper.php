<?php
/**
 * @author Atang Sutisna <atang.sutisna.87@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('to_dropdown_choices')) 
{
    /**
     * @param string $warn_message
     */
    function to_dropdown_choices($choices, $value, $display_value)
    {
        $dropdown_choices = [NULL => '--All--'];
        foreach ($choices as $choice) {
            $dropdown_choices[$choice->$value] = $choice->$display_value;
        }

        return $dropdown_choices;
    }    
}

if (! function_exists('set_active_menu')) 
{
    /**
     * @param
     */
    function set_active_menu($menu_name)
    {
        $CI =& get_instance();
        $active_controller = $CI->router->fetch_class();
        $is_equal = strcasecmp($active_controller, $menu_name);
        if ($is_equal == 0) {
            return "active";
        }

        return FALSE;
    }    
}

if (! function_exists('post_date_format')) 
{
    /**
     * @param
     */
    function post_date_format($input_date, $format = "d F Y")
    {
        $date = date_create($input_date);
        return date_format($date, $format);
    }    
}
