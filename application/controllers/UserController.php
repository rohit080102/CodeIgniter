<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        include_once APPPATH . 'models/User_model.php';
        $this->load->view('user_form');
    }

    public function save() {
        $data = array(
            'name' => $this->input->post('name'),
            'email' => $this->input->post('email')
        );
        $this->User_model->save_user($data);
        redirect('usercontroller/display');
    }

    public function display() {
        $data['users'] = $this->User_model->get_users();
        $this->load->view('user_list', $data);
    }
}
?>