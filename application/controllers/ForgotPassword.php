public function send_reset_link() {
public function reset_password($token) {
    $email = $this->input->post('email');
    // Cek apakah email ada di database
    // Jika ada, buat token acak dan simpan ke tabel reset_password
    // Kirim email ke pengguna dengan link reset password
}
}