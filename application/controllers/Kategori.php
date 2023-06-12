<?php

class Kategori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_matkul');
    }

    public function index()
    {
        $result['matkul'] = $this->m_matkul->get_rawSQL();
        $this->template->render('user/content/kategori', $result);
    }
}
