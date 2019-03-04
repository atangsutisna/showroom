<?php

class MY_Loader extends CI_Loader {
    const TEMPLATE_DIR = "layout";


    public function template($content_view, $params = []) {
        $current_template = 'carzone';

        $params['current_template'] = $current_template;
        $params['template_dir'] = self::TEMPLATE_DIR. "/{$current_template}";
        
        $params['global_header'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/global-header", $params, TRUE);

        //load news-categories
        $this->load->model('Site_model', 'site_model');
        $params['header'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/header", [
            'nav_berita' => $this->site_model->nav_berita()
        ], TRUE);

        $params['navigation'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/navigation", $params, TRUE);
        $params['sidebar'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/sidebar", $params, TRUE);
        $params['content'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/$content_view", $params, TRUE);
        $params['footer'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/footer", $params, TRUE);
        $params['global_footer'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/global-footer", $params, TRUE);
        $this->view(self::TEMPLATE_DIR."/{$current_template}/wrapper", $params);
    }

}