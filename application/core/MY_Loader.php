<?php

class MY_Loader extends CI_Loader {

    protected $global_params = [];



    public function template($content_view, $params = []) 
    {
        $template_dir = $params['template_dir'];

        $this->global_params['global_header'] = $this->view($template_dir."/global-header", 
            $params, TRUE);
        //load news-categories
        $this->load->model('Site_model', 'site_model');
        $this->global_params['header'] = $this->view($template_dir. "/header", [], TRUE);

        $this->global_params['navigation'] = $this->view($template_dir. "/navigation", $params, TRUE);
        $this->global_params['sidebar'] = $this->view($template_dir. "/sidebar", $params, TRUE);
        $this->global_params['content'] = $this->view($template_dir. "/$content_view", $params, TRUE);

        $this->load->model('Berita_model', 'berita_model');
        $this->global_params['footer'] = $this->view($template_dir. "/footer", [
            'recent_posts' => $this->berita_model->recent_posts()
        ], TRUE);
        $this->global_params['global_footer'] = $this->view($template_dir. "/global-footer", $params, TRUE);
        $this->view($template_dir."/wrapper", array_merge($this->global_params, $params));
    }

    public function admin_template($content_view, $params) 
    {
        $theme_dir = 'admin';
        $this->global_params['global_header'] = $this->view($theme_dir."/layout/global-header", 
            $params, TRUE);
        $this->global_params['header'] = $this->view($theme_dir. "/layout/header", [], TRUE);
        $this->global_params['navigation'] = $this->view($theme_dir. "/layout/navigation", $params, TRUE);
        $this->global_params['content'] = $this->view($theme_dir. "/". $content_view, $params, TRUE);
        $this->global_params['global_footer'] = $this->view($theme_dir. "/layout/global-footer", [], TRUE);
        $this->view($theme_dir."/layout/wrapper", array_merge($this->global_params, $params));
    }

}