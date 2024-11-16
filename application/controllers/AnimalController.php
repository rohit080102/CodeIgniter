<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class AnimalController extends CI_Controller {
    public function __construct() {
        parent::__construct();
        // Load the URL helper
        $this->load->helper('url');
    }
    public function index() {
		require_once APPPATH . 'models/Animal.php';
        require_once APPPATH . 'models/Dog.php';
        // Create an instance of the Dog subclass
        $dog = new Dog("Buddy", 3);
        $data['message'] = $dog->speak();
        // Load the view
        $this->load->view('animal_view', $data);
    }
}
?>
