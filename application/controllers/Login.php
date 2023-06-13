<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
		$this->load->library(['form_validation','session']);
        $this->load->model('Db');
    }

	public function index()
	{	
            $this->load->view('auth/auth');
	}

	public function logins() {

		$this->load->helper('url');
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('auth/auth');
		} else {

			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$user = $this->db->get_where('users',['username' => $username])->row_array();
			
			if($user){
				/* ganti ke password_verivy() kalau passnya udah di hash */
				if($password == $user['password']){
					$data = [
						'username' => $user['username'],
						'id' => $user['id'],
						'tipe' => $user['tipe']
					];
					$this->session->sess_expiration = '5';
					$this->session->set_userdata($data);
					if ($user['tipe'] == 1){
						redirect('Dashboard_admin', 'refresh');
					}
					else {
						redirect('Home', 'refresh');
					}
					
				}
				else{
					$this->session->set_flashdata('message', 'Password salah!');
					redirect('Login');
				}
			}
			else{
				$this->session->set_flashdata('message', 'Username tidak ada!');
					redirect('Login');
			}
		}		
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }

	public function testing(){
	$this->load->view('auth/auth');
	}

}
