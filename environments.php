<?php

if(! defined('ENVIRONMENT') )
{
    $domain = strtolower($_SERVER['HTTP_HOST']);
    switch ($domain) {
        case 'mobilhondabandungjabar.com':
            define('ENVIRONMENT', 'production');
            break;
        default:
            define('ENVIRONMENT', 'development');
            break;
    }
}