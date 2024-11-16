<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!class_exists('CI_Model')) {
    require_once BASEPATH . 'core/Model.php';
}
class Animal extends CI_Model {
    
    protected $name;
    protected $age;
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }
    public function speak() {
        return "I am an animal.";
    }
}
?>
