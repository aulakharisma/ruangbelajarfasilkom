<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_Matkul extends CI_Model
{
    private $_table = "matkul";

    public $id;
    public $nama_matkul;
    public $deskripsi;
    public $prodi;
    public $CREATED_AT;
    public $UPDATED_AT;

    public function rules()
    {
        return [
            ['field' => 'nama_matkul',
            'label' =>'Matkul',
            'rules' => 'required'],
            ['field' => 'prodi',
            'label' =>'Program Studi',
            'rules' => 'required'],
            ['field' => 'deskripsi',
            'label' =>'Deskripsi',
            'rules' => 'required']
        ];
    }

    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getIdMatkul($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id]) -> row();
    }

    public function saveDataMatkul()
    {
        $post = $this->input->post();//ambil data dari form

        $this -> nama_matkul = $post["nama_matkul"];
        $this -> prodi = $post["prodi"];
        $this -> deskripsi = $post["deskripsi"];

        return $this->db->insert($this->_table, $this); //menyimpan ke database
    }

    public function updateDataMatkul()
    {
        $post = $this->input->post();

        $this -> id = $post["id"];
        $this -> deskripsi = $post["deskripsi"];
        $this -> prodi = $post["prodi"];

        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }

    public function deleteDataMatkul($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}