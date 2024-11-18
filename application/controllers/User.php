<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('session');
        $this->load->helper('cookie');
    }
    public function index() {
        include_once APPPATH . 'models/User_model.php';
        $this->load->view('login');
    }

    public function register() {
        // Load the registration view
        $this->load->view('register');
    }

    public function register_user() {
        $data = [
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT)
        ];
        $this->User_model->register($data);
        redirect('user/login');
    }

    public function login() {
        // Load the login view
        $this->load->view('login');
    }

    public function login_user() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->User_model->login($username, $password);

        if ($user) {
            $this->session->set_userdata('user_id', $user->id);
            $this->session->set_userdata('username', $user->username);

            // Set a cookie
            $this->input->set_cookie('username', $user->username, 86400); // 1 day

            redirect('user/dashboard');
        } else {
            $this->session->set_flashdata('error', 'Invalid login credentials');
            redirect('user/login');
        }
    }

    public function dashboard() {
        if (!$this->session->userdata('user_id')) {
            redirect('user/login');
        }
        $this->load->view('dashboard');
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('user/login');
    }
}
