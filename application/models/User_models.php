<?php
class User_model extends CI_Model {
    public function check_login($username, $password) {
        // Query untuk memeriksa apakah pengguna ada dalam database
        $query = $this->db->get_where('users', array('username' => $username, 'password' => $password));
        return $query->row();
    }
}
