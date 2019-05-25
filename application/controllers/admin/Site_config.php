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

    public function do_update() 
    {
        $input = $this->input;
        $id_konfigurasi = $this->input->post('id_konfigurasi');
        $site_config = [
            'home_setting'		=> $input->post('home_setting'),
            'namaweb'			=> $input->post('namaweb'),
            'tagline'			=> $input->post('tagline'),
            'tentang'			=> $input->post('tentang'),
            'website'			=> $input->post('website'),
            'email'				=> $input->post('email'),
            'alamat'			=> $input->post('alamat'),
            'telepon'			=> $input->post('telepon'),
            'hp'				=> $input->post('hp'),
        ];
        $this->konfigurasi_model->modify($id_konfigurasi, $site_config);
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

    public function do_update_social_network() 
    {
        $id_konfigurasi = $this->input->post('id_konfigurasi');
        $social_media = [
            'facebook' => $this->input->post('facebook'),
            'twitter' => $this->input->post('twitter'),
            'instagram' => $this->input->post('instagram')
        ];
        $this->konfigurasi_model->modify($id_konfigurasi, $social_media);
        $this->session->set_flashdata('info','Site configuration updated successfully');
        redirect('admin/site_config/general');
    }

    public function do_update_seo() 
    {
        $id_konfigurasi = $this->input->post('id_konfigurasi');
        $seo_config = [
            'keywords' => $this->input->post('keywords'),
            'metatext' => $this->input->post('metatext')
        ];
        $this->konfigurasi_model->modify($id_konfigurasi, $seo_config);
        $this->session->set_flashdata('info','Site configuration updated successfully');
        redirect('admin/site_config/general');
    }


}