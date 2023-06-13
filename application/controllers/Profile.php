<?php

class Profile extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_materi');
        $this->load->model('m_matkul');
    }

    public function index()
    {
        $result['materi'] = $this->m_materi->get_rawSQL2();
        $result['matkul'] = $this->m_matkul->get_rawSQL();
        $this->template->render('user/content/profile', $result);
    }
}
