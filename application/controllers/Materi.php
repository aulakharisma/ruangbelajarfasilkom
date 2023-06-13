<?php

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_materi');
        $this->load->model('m_matkul');
        $this->load->model('m_user');
    }

    public function index()
    {
        $result['materi'] = $this->m_materi->get_rawSQL();
        $this->template->render('user/content/materi', $result);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data_add = $this->input->post();
            $this->m_materi->insert($data_add);
            redirect('Materi/index');
        } else {
            $data['user'] = $this->m_user->get_rawSQL();
            $data['matkul'] = $this->m_matkul->get_rawSQL();
            $data['materi'] = $this->m_materi->get_rawSQL2();
            $this->template->render('user/content/upload-materi', $data);
        }
    }
}
