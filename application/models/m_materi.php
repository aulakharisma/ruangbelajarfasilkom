<?php

class m_materi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $_table = "materi";

    public $judul;
    public $id_matkul;
    public $dok_materi;
    public $kategori;
    public $deskripsi_materi;
    public $cover;
    public $CREATED_AT;
    public $UPDATED_AT;

    public function rules() {
        return [
            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],
            ['field' => 'id_matkul',
            'label' => 'id_matkul',
            'rules' => 'required'],
            ['field' => 'dok_materi',
            'label' => 'dok_materi',
            'rules' => 'required'],
            ['field' => 'kategori',
            'label' => 'kategori',
            'rules' => 'required'],
            ['field' => 'deskripsi_materi',
            'label' => 'deskripsi materi',
            'rules' => 'required'],
            ['field' => 'cover',
            'label' => 'cover',
            'rules' => 'required'],
            ['field' => 'CREATED_AT',
            'label' => 'CREATED_AT',
            'rules' => 'required'],
            ['field' => 'UPDATED_AT',
            'label' => 'UPDATED_AT',
            'rules' => 'required']
        ];
    }

    public function getAllData() {
        $this->db->select('*');
        $this->db->from('materi');
        $this->db->join('matkul', 'matkul.id = materi.id_matkul', 'left');

        return $this->db->get()->result();
    }

    public function getIdUtama($id)
    {
        return $this->db->get_where($this->_table, ["id_materi" => $id]) -> row();
    }












    // public function get_rawSQL()
    // {
    //     $sql = "SELECT * FROM materi, matkul WHERE materi.id_matkul = matkul.id";
    //     return $this->db->query($sql)->result();
    // }

    // public function add($data)
    // {
    //     $sql = "INSERT INTO materi (id, id_admin, id_user, judul, id_matkul, dok_materi, kategori, deskripsi, cover, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    //     $this->db->query($sql, array($data['id'], $data['id_admin'], $data['id_user'], $data['judul'], $data['id_matkul'], $data['dok_materi'], $data['kategori'], $data['deskripsi'], $data['cover'], $data['CREATED_AT'], $data['UPDATED_AT']));
    // }

    // public function search ($keyword=null) {
    //     $this->db->select('*');
    //     $this->db->from('materi');
    //     if (!empty($keyword)) {
    //         $this->db->like('nama_matkul', $keyword);
    //     }
    //     return $this->db->get()->result_array();
    // }

}
