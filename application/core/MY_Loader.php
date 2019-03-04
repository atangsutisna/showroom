<?php

class MY_Loader extends CI_Loader {
    const TEMPLATE_DIR = "layout";


    public function template($content_view, $params = []) {
        $current_template = 'carzone';

        $params['current_template'] = $current_template;
        $params['template_dir'] = self::TEMPLATE_DIR. "/{$current_template}";
        
        $params['global_head'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/global-head", $params, TRUE);
        $params['header'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/header", $params, TRUE);
        $params['navigation'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/navigation", $params, TRUE);
        $params['sidebar'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/sidebar", $params, TRUE);
        //$params['content'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/$content_view", $params, TRUE);
        $params['footer'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/footer", $params, TRUE);
        $params['global_footer'] = $this->view(self::TEMPLATE_DIR. "/{$current_template}/global-footer", $params, TRUE);
        $this->view(self::TEMPLATE_DIR."/{$current_template}/wrapper", $params);
    }

}