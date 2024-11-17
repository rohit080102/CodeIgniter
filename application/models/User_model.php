<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User_model extends CI_Model {

    public function register($data) {
        return $this->db->insert('users', $data);
    }

    public function login($username, $password) {
        $this->db->where('username', $username);
        $query = $this->db->get('users');

        if ($query->num_rows() == 1) {
            $user = $query->row();
            if (password_verify($password, $user->password)) {
                return $user;
            }
        }
        return false;
    }

	public function save_user($data) {
        return $this->db->insert('users', $data);
    }
    public function get_users() {
        return $this->db->get('users')->result();
    }

	public function get_user($id) {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

    public function update_user($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('users', $data);
    }


}

?>
