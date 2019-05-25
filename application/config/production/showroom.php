<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config['upload_setting']['upload_path'] = ROOT_DIR.'/files_uploaded/';
$config['upload_setting']['allowed_types'] = 'gif|jpg|png';
$config['upload_setting']['max_size'] = 640000;     
$config['upload_setting']['encrypt_name'] = TRUE;

$config['units'] = [
    'unit' => 'Unit'
];
