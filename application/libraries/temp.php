<?php

class temp
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
    }
    
    function show($template = NULL, $data = NULL)
    {
        if ($template != NULL)
        $data['_content'] = $this->ci->load->view($template, $data, TRUE);
        $data['_header'] = $this->ci->load->view('admin/template/header', $data, TRUE);
        $data['_footer'] = $this->ci->load->view('admin/template/footer', $data, TRUE);
        $data['_sidebar'] = $this->ci->load->view('admin/template/sidebar', $data, TRUE);
        $data['_temp'] = $this->ci->load->view('admin/template/temp', $data);
    }
}
?>