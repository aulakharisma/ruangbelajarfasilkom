<?php

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_materi');
    }

    public function index()
    {
        $result['materi'] = $this->m_materi->get_rawSQL();
        $this->template->render('user/content/materi', $result);
    }

    

    // public function add()
    // {
    //     if ($this->input->post()) {
    //         $data = $this->input->post();
    //         $this->m_materi->input($data);
    //         redirect('Materi/index');
    //     } else {
    //         $this->load->view('upload');
    //     }
    // }
}
