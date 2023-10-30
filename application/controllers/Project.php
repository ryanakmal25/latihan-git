<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Project extends CI_Controller {

    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index() {
        $data['judul'] = "Halaman Depan";
        $this->load->view('v_home',$data);
    }
}