<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class StringLength extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load the URL helper
        $this->load->helper('url');
    }
  public function index() {
        $this->load->view('string_length_form');
    }

    public function calculate() {
        $input_string = $this->input->post('input_string');
        $length = strlen($input_string);
        $data['length'] = $length;
        $data['input_string'] = $input_string;
        $this->load->view('string_length_result', $data);
    }
}
?>
