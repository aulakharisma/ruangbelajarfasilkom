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
}