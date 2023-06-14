<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_admin extends CI_Controller {

	function __construct(){
        parent::__construct();
		$this->load->model('Db');
		$this->load->library('temp');
        if(!$this->session->has_userdata('id')){
            redirect('Login');
        }
		if($this->session->userdata('tipe') != '1'){
			redirect('Login');
		}
    }

	public function index()
	{
		$data['user'] = $this->db->get_where('users', ['id_user' => $this->session->userdata('id')])->row_array();
		
		$this->temp->show("admin/content/dashboard");
	}
	public function users()
	{
		$data["alpha"] = $this->Db->getuser();
		$this->temp->show('admin/content/users',$data);
	}
	public function matkul()
	{
		$this->temp->show('admin/content/matkul');
	}
	public function materi()
	{
		$this->temp->show('admin/content/materi');
	}
	public function registrasi()
	{
			if ($this->input->post()) {
				$data = [
					'username' => $this->input->post('username_r'),
					'password' => password_hash($this->input->post('password_r'), PASSWORD_DEFAULT),
					'nama' => $this->input->post('nama_r'),
					'prodi' => $this->input->post('prodi_r'),
					'tipe' => $this->input->post('tipe_r'),
				];
				$this->db->insert('users', $data);
				$this->temp->show('admin/content/dashboard');
			} 
			else {
				$this->temp->show('admin/content/registrasi-user');
			}
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