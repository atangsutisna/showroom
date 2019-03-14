<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site_config extends Admin_Controller 
{
    const DIR_VIEW = 'site_config';

	public function general() 
	{
		$this->params['title']	= 'General Configuration';
		$this->params['site']	= (array) $this->params['site_config'];
        $this->load->admin_template(self::DIR_VIEW. '/general', $this->params);
    }

    public function do_update_general() 
    {
        $i = $this->input;
        $data = array(	'id_konfigurasi'	=> $i->post('id_konfigurasi'),
                        'home_setting'		=> $i->post('home_setting'),
                        'namaweb'			=> $i->post('namaweb'),
                        'tagline'			=> $i->post('tagline'),
                        'tentang'			=> $i->post('tentang'),
                        'website'			=> $i->post('website'),
                        'email'				=> $i->post('email'),
                        'alamat'			=> $i->post('alamat'),
                        'telepon'			=> $i->post('telepon'),
                        'hp'				=> $i->post('hp'),
                        'fax'				=> $i->post('fax'),
                        'keywords'			=> $i->post('keywords'),
                        'metatext'			=> $i->post('metatext'),
                        'facebook'			=> $i->post('facebook'),
                        'twitter'			=> $i->post('twitter'),
                        'instagram'			=> $i->post('instagram'),
                        'google_map'		=> $i->post('google_map'),
                        'id_user'			=> $this->session->userdata('id'));
        $this->konfigurasi_model->edit($data);
        $this->session->set_flashdata('info','Site configuration updated successfully');
        redirect('admin/site_config/general');
    }

    public function do_update_gmap() 
    {
        $id_konfigurasi = $this->input->post('id_konfigurasi');
        $gmap_config = [
            'google_map' => $this->input->post('google_map')
        ];
        $this->konfigurasi_model->modify($id_konfigurasi, $gmap_config);
        $this->session->set_flashdata('info','Site configuration updated successfully');
        redirect('admin/site_config/general');
    }

}