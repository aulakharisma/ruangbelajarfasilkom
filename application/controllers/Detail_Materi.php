<?php

class Detail_Materi extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_materi');
        $this->load->model('m_matkul');
    }

    public function index($id)
    {
        $result['materi'] = $this->m_materi->get_ID($id);
        $this->template->render('user/content/detail-materi', $result);
    }

    public function download($filename)
    {
        $file_path = './upload/dokumen/' . $filename;

        if (file_exists($file_path)) {
            // Lakukan proses unduh file
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename="' . basename($file_path) . '"');
            readfile($file_path);
        } else {
            // File tidak ditemukan, tampilkan pesan error atau redirect ke halaman tertentu
        }
    }
}
