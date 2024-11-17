<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

    // Constructor method
    public function __construct() {
        parent::__construct();
    }

    // Method to save user data
    public function save_user($data) {
        return $this->db->insert('users', $data);
    }

    // Method to retrieve all users
    public function get_users() {
        return $this->db->get('users')->result();
    }
}  // <-- Ensure there is no extra code after this brace
?>
