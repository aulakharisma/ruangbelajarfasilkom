<?php

class m_materi extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_rawSQL()
    {
        $sql = "SELECT * FROM materi, matkul WHERE materi.id_matkul = matkul.id_matkul";
        return $this->db->query($sql)->result();
    }

    public function get_rawSQL2()
    {
        $sql = "SELECT * FROM materi";
        return $this->db->query($sql)->result();
    }

    public function count()
    {
        return $this->db->count_all('materi');
    }

    public function count_user()
    {
        $this->db->where('tipe', 2);
        return $count = $this->db->count_all_results('users');
    }

    public function insert($data)
    {
        $sql = "INSERT INTO materi (judul, id_matkul, kategori, desk_materi) VALUES (?,?,?,?)";
        $this->db->query($sql, array($data['judul'], $data['id_matkul'], $data['kategori'], $data['desk_materi']));
    }
}
