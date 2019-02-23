<?php
/**
 * @author Atang Sutisna <atang.sutisna.87@gmail.com>
 */
defined('BASEPATH') OR exit('No direct script access allowed');

if (! function_exists('format_rupiah')) 
{
    /**
     * @param string $warn_message
     */
    function format_rupiah($price)
    {
        $money = number_format($price,'0',',','.');
        return "Rp. {$money}";
    }    
}
