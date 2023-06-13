<?php

class Materi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_materi");
        $this->load->model("M_Matkul");
        $this->load->model("M_Profile");
    }

    public function index() {
        $data = array(
            'title' => 'Materi',
            'materi' => $this->m_materi->getAllData(),
            'materi_user' => $this->db->get_where('materi', ['id' => $this->session->userdata('id')])->row()
        );

        if( $this->input->post('keyword')) {
            $data['materi'] = $this->m_materi->searchMateri();
        }

        $this->template->render('user/content/materi', $data);
    }

    public function insertMateri()
    {
        $data = array(
            'title' => 'Upload Materi',
            'materi' => $this->m_materi->getAllData(),
            'matkul' => $this->M_Matkul->getAllData()
        );

        $this->template->render('user/content/upload-materi', $data);
    }






















    // public function __construct()
    // {
    //     parent::__construct();
    //     $this->load->model('m_materi');
    // }

    // public function index()
    // {
    //     $result['materi'] = $this->m_materi->get_rawSQL();
    //     $this->template->render('user/content/materi', $result);
    // }

    

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
