<?php

class m_matkul extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public $_table = "matkul";

    public $nama_matkul;
    public $deskripsi;
    public $prodi;
    public $CREATED_AT;
    public $UPDATED_AT;


    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }

    public function getIdMatkul($id)
    {
        return $this->db->get_where($this->_table, ["id_matkul" => $id]) -> row();
    }





    // public function get_rawSQL()
    // {
    //     $sql = "SELECT * FROM matkul";
    //     return $this->db->query($sql)->result();
    // }

    // public function add($data)
    // {
    //     $sql = "INSERT INTO matkul (id, nama_matkul, deskripsi, prodi, CREATED_AT, UPDATED_AT) VALUES (?,?,?,?,?,?)";
    //     $this->db->query($sql, array($data['id'], $data['nama_matkul'], $data['deskripsi'], $data['prodi'], $data['CREATED_AT'], $data['UPDATED_AT']));
    // }
}
