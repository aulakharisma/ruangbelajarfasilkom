<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Matkul extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("M_Matkul");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data = array(
            'title' => 'Matkul',
            'matkul' => $this->M_Matkul->getAllData()
        );
        $this->load->view('user/template/header', $data);
        $this->load->view('user/template/navbar', $data);
        $this->load->view('user/content/kategori', $data);
        $this->load->view('user/template/footer');
    }

    public function addDataMatkul()
    {
        $data['title'] = "Mata Kuliah";

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/content/tambah-matkul');
        $this->load->view('admin/template/footer');
    }

    public function saveDataMatkul()
    {

        $matkul = $this->M_Matkul; //objek model
        $validation = $this->form_validation; //objek form validation
        $validation->set_rules($matkul->rules()); //menerapkan rules

        if ($validation->run()) { //melakukan validasi
            $matkul->saveDataMatkul(); //menyimpan ke db
            $this->session->set_flashdata('success', 'data berhasil disimpan'); //menampilkan pesan berhasil
        }
        redirect('matkul');
    }

    public function editDataMatkul($id = null)
    {
        $data['title'] = "Kategori Mata Kuliah";

        if (!isset($id)) redirect('content/matkul'); //jika id tidak ditemukan atau null ada diredirect kesini

        $matkul = $this->M_Matkul; //object model
        $validation = $this->form_validation; //object validation
        $validation->set_rules($matkul->rules()); //menerapkan rules

        if ($validation->run()) {
            $matkul->updateDataMatkul(); //menyimpan data
            $this->session->set_flashdata('success', 'data berhasil di update');
        }

        $data["matkul"] = $mqtkul->getIdMatkul($id); //mengambil data untuk ditampilkan pada form
        if (!$data["matkul"]) show_404(); //jika data tidak ada, akan menampilkan error 404

        $this->load->view('admin/template/header', $data);
        $this->load->view('admin/template/sidebar', $data);
        $this->load->view('admin/content/edit-matkul', $data);
        $this->load->view('admin/template/footer');
    }



    public function deleteDataMatkul($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->M_Matkul->deleteDataMatkul($id)) {
            redirect(site_url('content/matkul'));
        }
    }
}
