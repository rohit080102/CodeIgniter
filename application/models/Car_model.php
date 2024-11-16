<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Ensure CI_Model is available when manually including the file
if (!class_exists('CI_Model')) {
    require_once BASEPATH . 'core/Model.php';
}

class Car_model extends CI_Model {
    public $make;
    public $model;
    public $year;

    public function __construct($make, $model, $year) {
        parent::__construct(); // Ensure parent constructor is called
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }
}
