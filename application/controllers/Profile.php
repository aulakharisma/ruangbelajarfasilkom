<?php

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Profile");
        $this->load->model("m_materi");
        $this->load->model("Db");
    }

    public function index()
    {
        $data = array(
            'title' => 'Profile',
            'users' => $this->M_Profile->getAllData(),
            'session_user' => $this->db->get_where('users', ['id_user' => $this->session->userdata('id')])->row(),
            // 'materi_user' => $this->db->get_where('materi', ['id' => $this->session->userdata('id')])->row()
        );
        $data["alpha"] = $this->Db->getmateri($this->session->userdata('id'));
        $this->template->render('user/content/profile', $data);
    }
}
