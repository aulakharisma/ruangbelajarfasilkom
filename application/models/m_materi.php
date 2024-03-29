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

    public function get_ID($id)
    {
        $this->db->select('materi.*, matkul.nama_matkul');
        $this->db->from('materi');
        $this->db->join('matkul', 'materi.id_matkul = matkul.id_matkul');
        $this->db->where('materi.id_materi', $id);
        return $this->db->get()->row();
    }

    public function get_ID2($id)
    {
        $data = $this->db->query("SELECT * FROM materi WHERE id_materi='$id'");
        return $data->result();
    }

    public function searchMateri()
    {
        $keyword = $this->input->post('keyword', false);
        $this->db->like('judul', $keyword);
        $this->db->or_like('kategori', $keyword);

        return $this->db->get('materi')->result_array();
    }

    public function insert($data)
    {
        $sql = "INSERT INTO materi (judul, id_matkul, kategori, desk_materi, cover, dok_materi) VALUES (?,?,?,?,?,?)";
        $this->db->query($sql, array($data['judul'], $data['id_matkul'], $data['kategori'], $data['desk_materi'], $data['cover'], $data['dok_materi']));
    }

    public function edit($data)
    {
        $sql = "UPDATE materi SET judul = ?, id_matkul  = ?, kategori = ?, desk_materi = ? WHERE id_materi = ? ";

        $this->db->query($sql, array($data['judul'], $data['id_matkul'], $data['kategori'], $data['desk_materi'], $data['primary']));
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
