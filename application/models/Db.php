<?php defined('BASEPATH') OR exit('No direct script acess allowed');

class Db extends CI_Model{
public function __construct()
{
    parent::__construct();
}

public function getuser(){
    $sql = "SELECT * FROM users";
    $data = $this->db->query($sql);
    return $data->result();
}

public function getmateri($id){
    $sql = "SELECT * FROM materi WHERE id_user = $id";
    $data = $this->db->query($sql);
    return $data->result();
}

public function getmateri1(){
    $sql = "SELECT * FROM materi";
    $data = $this->db->query($sql);
    return $data->result();
}

public function getmatkul(){
    $sql = "SELECT * FROM matkul";
    $data = $this->db->query($sql);
    return $data->result();
}
}?>