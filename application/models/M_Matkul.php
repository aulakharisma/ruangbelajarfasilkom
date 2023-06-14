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

    public function count()
    {
        return $this->db->count_all('matkul');
    }

    public function add($data)
    {
        $sql = "INSERT INTO matkul (id_matkul, nama_matkul, desk_matkul, prodi, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, array($data['id_matkul'], $data['nama_matkul'], $data['desk_matkul'], $data['prodi'], $data['CREATED_AT'], $data['UPDATED_AT']));
    }
}
