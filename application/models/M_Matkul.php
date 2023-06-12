<?php

class m_matkul extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_rawSQL()
    {
        $sql = "SELECT * FROM matkul";
        return $this->db->query($sql)->result();
    }

    public function add($data)
    {
        $sql = "INSERT INTO matkul (id, nama_matkul, deskripsi, prodi, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, array($data['id'], $data['nama_matkul'], $data['deskripsi'], $data['prodi'], $data['CREATED_AT'], $data['UPDATED_AT']));
    }
}
