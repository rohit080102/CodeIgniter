<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ReflectionController extends CI_Controller {
    public function index() {
		require_once APPPATH . 'models/Person.php';
        // Create an instance of the Person class
        $person = new Person("Alice", 30);

        // Use Reflection to inspect the Person class
        $reflection = new ReflectionClass($person);
        // Get properties and methods
        $properties = $reflection->getProperties();
        $methods = $reflection->getMethods();

        // Serialize the object
        $serialized_data = serialize($person);

        // Prepare data for the view
        $data['properties'] = $properties;
        $data['methods'] = $methods;
        $data['serialized_data'] = $serialized_data;
        // Load the view
        $this->load->view('reflection_view', $data);
    }
}
?>
