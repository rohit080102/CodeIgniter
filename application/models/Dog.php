<?php
defined('BASEPATH') OR exit('No direct script access allowed');
if (!class_exists('CI_Model')) {
    require_once BASEPATH . 'core/Model.php';
}
class Dog extends Animal,CI_Model  {
    public function speak() {
        return "Woof! My name is {$this->name} and I am {$this->age} years old.";
    }
}
?>
