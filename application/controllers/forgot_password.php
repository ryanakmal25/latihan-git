<?= form_open('forgot_password/send_reset_link'); ?>
    <label for="email">Email</label>
    <input type="email" name="email" required>
    <button type="submit">Kirim Link Reset Password</button>
<?= form_close(); ?>
