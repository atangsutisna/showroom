<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//use \Gumlet\ImageResize;

class Galery extends Admin_Controller 
{
    const DIR_VIEW = 'galery';

	public function __construct()
	{
        parent::__construct();
        $this->load->library(['form_validation']);

        $this->load->model('Galery_model', 'galery');
    }

	public function index() 
	{
        $this->params['title'] = 'Galery';
        $this->params['galeries'] = $this->galery->find_all();
		$this->load->admin_template(self::DIR_VIEW. '/index', $this->params);
    }

	public function new_form() 
	{
        $this->params['title'] = 'Galery';
        $this->params['form_action'] = 'admin/galery/do_insert';
		$this->load->admin_template(self::DIR_VIEW. '/_form', $this->params);
    }

	public function do_insert() 
	{
        $this->form_validation->set_rules('name', 'Nama', 'required');
        if ($this->form_validation->run() == FALSE) {
            $this->new_form();
        } else {
            $galery = [
                'name' => $this->input->post('name'),
                'description' => $this->input->post('description'),
                'created_at' => date('Y-m-d H:i:s')
            ];

            if (!empty($_FILES['file']['name'])) {  
                //TODO:buatkan juga thumbnail
                $this->load->config('showroom');
                $config = $this->config->item('upload_setting'); 
                $this->load->library('upload', $config);
    
				$do_upload = $this->upload->do_upload('file');
				if (!$do_upload) {
					echo $this->upload->display_errors();
				} else {
					$upload_data = $this->upload->data();
                    
                    $galery['file_name'] = $upload_data['file_name'];
                    $galery['file_original_name'] = $upload_data['orig_name'];
					$galery['file_type'] = $upload_data['file_ext'];
                    $galery['file_path'] = 'files_uploaded/'. $upload_data['raw_name']. $upload_data['file_ext'];
                    
                    $this->load->library('Thumbnailer');
                    $this->thumbnailer->create_thumb($galery['file_path'], 242, 136);
				}
            }

            $this->galery->insert($galery);
			$this->session->set_flashdata('info','1 photo telah ditambahkan');
			redirect('admin/galery/new_form');
        }
    }

    public function create_thumbnail()
    {
        $config['image_library'] = 'gd2';
        $config['source_image'] = 'files_uploaded/0eac00a25daef1e9a243fd725d5c8dd5.jpg';
        $config['new_image'] = 'files_uploaded/thumb/';
        $config['create_thumb'] = TRUE;
        $config['maintain_ratio'] = TRUE;
        $config['width']         = 242;
        $config['height']       = 136;
        $this->load->library('image_lib', $config);
        
        $this->image_lib->resize();    
        echo "success";
    }
}