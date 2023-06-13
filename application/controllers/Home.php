<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_materi');
		$this->load->model('m_matkul');
	}

	public function index()
	{
		$total1 = $this->m_materi->count_user();
		$total2 = $this->m_materi->count();
		$total3 = $this->m_matkul->count();
		$result['materi'] = $this->m_materi->get_rawSQL();
		$result['matkul'] = $this->m_matkul->get_rawSQL();
		$result['total2'] = $total2;
		$result['total3'] = $total3;
		$result['total1'] = $total1;
		$this->template->render('user/content/beranda', $result);
	}
}
