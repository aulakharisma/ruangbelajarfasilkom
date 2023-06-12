<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_materi');
	}

	public function index()
	{
		$result['materi'] = $this->m_materi->get_rawSQL();
		$this->template->render('user/content/beranda', $result);
	}
}
