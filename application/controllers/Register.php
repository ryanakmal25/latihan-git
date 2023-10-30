<?php
class Register extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
    }

    public function index() {
        $this->load->view('register_view');
    }

    public function process_registration() {
        $data = array(
            'username' => $this->input->post('username'),
            'password' => password_hash($this->input->post('password'), PASSWORD_BCRYPT),
            'email' => $this->input->post('email')
        );

        $this->User_model->register_user($data);
        // akan diarah ke login
        redirect('login');
    }
}
