<?php

class M_Profile extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    private $_table = "users";


    public function getAllData()
    {
        return $this->db->get($this->_table)->result();
    }


    public function getIdProfile($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id]) -> row();
    }

}
