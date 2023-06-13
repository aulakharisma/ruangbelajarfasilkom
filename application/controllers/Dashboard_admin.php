<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Db');
        if(!$this->session->has_userdata('id')){
            redirect('login');
        }
		if($this->session->userdata('tipe') != '1'){
			redirect('login');
		}
    }

	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['id' => $this->session->userdata('id')])->row_array();
		
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/dashboard');
		$this->load->view('admin/template/footer');
	}
	public function users()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/users');
		$this->load->view('admin/template/footer');
	}
	public function matkul()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/matkul');
		$this->load->view('admin/template/footer');
	}
	public function materi()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/materi');
		$this->load->view('admin/template/footer');
	}
	public function registrasi()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/registrasi-user');
		$this->load->view('admin/template/footer');
	}
	public function addmatkul()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/tambah-matkul');
		$this->load->view('admin/template/footer');
	}
	public function addmateri()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/tambah-materi');
		$this->load->view('admin/template/footer');
	}
	public function editmatkul()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/edit-matkul');
		$this->load->view('admin/template/footer');
	}
	public function editmateri()
	{
		$this->load->view('admin/template/header');
		$this->load->view('admin/template/sidebar');
		$this->load->view('admin/content/edit-materi');
		$this->load->view('admin/template/footer');
	}
	public function logout()
	{
		redirect(login);
	}
}