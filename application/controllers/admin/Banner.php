<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends Admin_Controller 
{
    const DIR_VIEW = 'banner';

	public function __construct()
	{
        parent::__construct();
        $this->load->library(['form_validation']);
        $this->load->model('Galery_model', 'galery');
    }

	public function index() 
	{
        $this->params['title'] = 'Banner';
        $this->params['galeries'] = $this->galery->find_all('banner');
		$this->load->admin_template(self::DIR_VIEW. '/index', $this->params);
    }

	public function new_form() 
	{
        $this->params['title'] = 'Banner';
        $this->params['form_action'] = 'admin/banner/do_insert';
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
                'kind' => 'banner',
                'created_at' => date('Y-m-d H:i:s')
            ];

            if (!empty($_FILES['file']['name'])) {  
                $this->load->config('showroom');
                $config = $this->config->item('upload_setting'); 
                $this->load->library('upload', $config);
    
				$do_upload = $this->upload->do_upload('file');
				if (!$do_upload) {
					echo $this->upload->display_errors();
				} else {
					$upload_data = $this->upload->data();
                    
                    $galery['file_name'] = $upload_data['raw_name'];
                    $galery['file_original_name'] = $upload_data['orig_name'];
					$galery['file_type'] = $upload_data['file_ext'];
                    $galery['file_path'] = 'files_uploaded/'. $upload_data['raw_name']. $upload_data['file_ext'];
                    
                    $this->load->library('Image_manager');
                    $this->image_manager->resize($galery['file_path'], 242, 181);
				}
            }

            $this->galery->insert($galery);
			$this->session->set_flashdata('info','1 banner telah ditambahkan');
			redirect('admin/banner/new_form');
        }
    }   
    
    
    public function delete($id)
    {
        $galery = $this->galery->find_one($id);
        if ($galery == NULL) {
            show_404();
        }

        unlink(FCPATH.'/'.$galery->file_path);
        unlink(FCPATH.'/files_uploaded/thumb/'.$galery->file_name.'_thumb'.$galery->file_type);
        $this->galery->delete($id);
        $this->session->set_flashdata('info','1 photo telah dihapus');
        redirect('admin/banner');
    }


}