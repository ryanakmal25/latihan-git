<?php
class SiswaController extends CI_Controller {
    public function input_data() {
        // Load form helper and view
        $this->load->helper('form');
        $this->load->view('input_form');
    }
    
    public function process_input() {
        // Proses input data siswa di sini
        // Simpan data siswa ke database atau tempat penyimpanan lainnya

        // Tampilkan hasil submit
        $data['result'] = $_POST; // Anda dapat mengubah ini sesuai dengan metodenya

        $this->load->view('result_view', $data);
    }
}
?>
