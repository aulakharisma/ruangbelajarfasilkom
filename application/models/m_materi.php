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
        $this->db->join('matkul', 'matkul.id_matkul = materi.id_matkul', 'left');
        return $this->db->query($sql)->result();
    }

    public function get_rawSQL2()
    {
        $sql = "SELECT * FROM materi, matkul WHERE materi.id_matkul = matkul.id_matkul";
        return $this->db->query($sql)->result();
    }

    public function get_enum($materi, $kategori)
    {
        $query = $this->db->query("SHOW COLUMNS FROM $materi LIKE '$kategori'");
        $enum_str = $query->row()->Type;
        preg_match('/^enum\((.*)\)$/', $enum_str, $matches);
        $enum = array();
        foreach (explode(',', $matches[1]) as $value) {
            $enum[] = trim($value, "'");
        }
        return $enum;
    }

    public function count()
    {
        return $this->db->count_all('materi');
    }

    public function count_user()
    {
        $this->db->where('tipe', 2);
        return $this->db->count_all_results('users');
    }

    public function insert($data)
    {
        $sql = "INSERT INTO materi (judul, id_matkul, kategori, desk_materi, cover, dok_materi) VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, array($data['judul'], $data['id_matkul'], $data['kategori'], $data['desk_materi'], $data['cover'], $data['dok_materi']));
    }

    public function get_ID($id)
    {
        $this->db->select('materi.*, matkul.nama_matkul');
        $this->db->from('materi');
        $this->db->join('matkul', 'materi.id_matkul = matkul.id_matkul');
        $this->db->where('materi.id_materi', $id);
        return $this->db->get()->row();
    }
}
