<?php

class Materi extends CI_Controller
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
        $this->template->render('user/content/materi', $result);
    }

    public function add()
    {
        if ($this->input->post()) {
            $data_add = $this->input->post();
            $config1['upload_path'] = './upload/dokumen';
            $config1['allowed_types'] = 'pdf';
            $config1['max_size'] = 2048;
            $this->load->library('upload', $config1);

            if (!$this->upload->do_upload('file_upload1')) {
                $error = array('error' => $this->upload->display_errors());
                // Tambahkan penanganan kesalahan di sini (misalnya, menampilkan pesan error)
            } else {
                $file_data1 = $this->upload->data();
                $data_add['cover'] = $file_data1['file_name'];

                // Konfigurasi untuk upload kedua
                $config2['upload_path'] = './upload/cover'; // Ganti dengan path penyimpanan file di laptop
                $config2['allowed_types'] = 'jpg|pdf';
                $config2['max_size'] = 2048;
                $this->upload->initialize($config2);

                if (!$this->upload->do_upload('file_upload2')) {
                    $error = array('error' => $this->upload->display_errors());
                    // Tambahkan penanganan kesalahan di sini (misalnya, menampilkan pesan error)
                } else {
                    $file_data2 = $this->upload->data();
                    $data_add['dok_materi'] = $file_data2['file_name'];

                    $this->m_materi->insert($data_add);
                    redirect('Materi/index');
                }
            }
        } else {
            $data['matkul'] = $this->m_matkul->get_rawSQL();
            $data['materi'] = $this->m_materi->get_rawSQL();
            $data['enum_values'] = $this->m_materi->get_enum('materi', 'kategori');
            $this->template->render('user/content/upload-materi', $data);
        }
    }
}
