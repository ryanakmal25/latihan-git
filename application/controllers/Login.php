<?php
class Login extends CI_Controller {
    public function index() {
        $this->load->view('login_view');
    }

    public function process_login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $this->load->model('User_model');
        $user = $this->User_model->check_login($username, $password);

        if ($user) {
            // Login berhasil
        } else {
            // Login gagal
        }
    }
}
