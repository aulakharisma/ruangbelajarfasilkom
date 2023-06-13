<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Db');
		$this->load->model('m_materi');
        if(!$this->session->has_userdata('id')){
            redirect('login');
        }
	}

	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();

		$result['materi'] = $this->m_materi->get_rawSQL();
		$this->template->render('user/content/beranda', $result);
	}

	public function logout()
	{
		redirect(login);
	}
}
