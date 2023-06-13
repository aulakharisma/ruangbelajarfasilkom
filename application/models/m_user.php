<?php

class m_user extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function get_rawSQL()
    {
        $sql = "SELECT * FROM users";
        return $this->db->query($sql)->result();
    }

    // public function count()
    // {
    //     $this->db->from('ruangbelajar');
    //     $this->db->where('matkul');
    //     $db_results = $this->get();
    //     $results = $db_results->result();
    //     return $this->db->count_all('users');
    // }
}
