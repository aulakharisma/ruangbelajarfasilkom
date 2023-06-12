<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	
	function __construct(){
        parent::__construct();
        if(!$this->session->has_userdata('id')){
            redirect('login');
        }
    }

	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
		
		$this->template->render('user/content/beranda');
	}
}
