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
        $dropdown_choices = [NULL => '--Pilih--'];
        foreach ($choices as $choice) {
            $dropdown_choices[$choice->$value] = $choice->$display_value;
        }

        return $dropdown_choices;
    }    
}
