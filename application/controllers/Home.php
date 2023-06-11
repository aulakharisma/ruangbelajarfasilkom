<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('user/template/header');
		$this->load->view('user/template/navbar');
		$this->load->view('user/content/beranda');
		$this->load->view('user/template/footer');
	}
	public function materi()
	{
		$this->load->view('user/template/header');
		$this->load->view('user/template/navbar');
		$this->load->view('user/content/materi');
		$this->load->view('user/template/footer');
	}
	public function kategori()
	{	
		$this->load->view('user/template/header');
		$this->load->view('user/template/navbar');
		$this->load->view('user/content/kategori');
		$this->load->view('user/template/footer');
	}
	public function detailMateri()
	{	
		$this->load->view('user/template/header');
		$this->load->view('user/template/navbar');
		$this->load->view('user/content/detail-materi');
		$this->load->view('user/template/footer');
	}
	public function detailKategori()
	{	
		$this->load->view('user/template/header');
		$this->load->view('user/template/navbar');
		$this->load->view('user/content/detail-kategori');
		$this->load->view('user/template/footer');
	}
	public function upload()
	{	
		$this->load->view('user/template/header');
		$this->load->view('user/template/navbar');
		$this->load->view('user/content/upload-materi');
		$this->load->view('user/template/footer');
	}
}