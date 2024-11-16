<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CarController extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load the URL helper
        $this->load->helper('url');
    }

    public function index() {
        // Manually include the Car_model file
        include_once APPPATH . 'models/Car_model.php';

        // Instantiate the Car_model with parameters
        $car = new Car_model("Toyota", "Camry", 2022);

        // Prepare data for the view
        $data['make'] = $car->make;
        $data['model'] = $car->model;
        $data['year'] = $car->year;

        // Load the view with car details
        $this->load->view('car_view', $data);
    }
}
