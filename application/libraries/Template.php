<?php

class Template
{

    protected $_ci;

    function __construct()
    {
        $this->_ci = &get_instance();
    }

    function render($template = NULL, $data = NULL)
    {
        if ($template != NULL)
            $data['_content'] = $this->_ci->load->view($template, $data, TRUE);

        $data['_header'] = $this->_ci->load->view('user/template/header', $data, TRUE);
        $data['_navbar'] = $this->_ci->load->view('user/template/navbar', $data, TRUE);
        $data['_footer'] = $this->_ci->load->view('user/template/footer', $data, TRUE);
        $data['_template'] = $this->_ci->load->view('user/template/template', $data);
    }
}
