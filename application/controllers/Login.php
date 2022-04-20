<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->library('session');
	}

    public function index() {
		$data = array(
			'user_id' => 'tuananh',
			'email' => 'tuananh@gmail.com',
			);

		
		$this->session->set_userdata($data);
        $this->load->view('login');
    }

	public function login() {
		$this->load->library('form_validation'); 
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$user = $this->db->get_where('tbl_user',['email' => $email])->row();
			
			if(!$user) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

	
			if(!password_verify($password,$user->password)) {
				$this->session->set_flashdata('login_error', 'Please check your email or password and try again.', 300);
				redirect(uri_string());
			}

			 $data = array(
					'user_id' => $user->user_id,
					'email' => $user->email,
					);

				
			$this->session->set_userdata($data);

			//redirect('/'); // redirect to home
			echo 'Login success!'; exit;
			
		}		
	}

	public function logout(){
        $this->session->sess_destroy();
        redirect('login');
    }
}