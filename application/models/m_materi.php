<?php

class m_materi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_rawSQL()
    {
        $sql = "SELECT * FROM materi";
        return $this->db->query($sql)->result();
    }

    public function add($data)
    {
        $sql = "INSERT INTO materi (id, id_admin, id_user, judul, id_matkul, dok_materi, kategori, deskripsi, cover, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $this->db->query($sql, array($data['id'], $data['id_admin'], $data['id_user'], $data['judul'], $data['id_matkul'], $data['dok_materi'], $data['kategori'], $data['deskripsi'], $data['cover'], $data['CREATED_AT'], $data['UPDATED_AT']));
    }
}
