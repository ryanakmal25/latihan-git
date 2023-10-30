<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data Siswa</title>
</head>
<body>
    <h1>Form Input Data Siswa</h1>
        <?php echo form_open('siswaController/process_input'); ?>     
        <br><label for="nama">Nama Siswa :</label>
        <input type="text" name="nama" id="nama">

        <br><label for="nis">NIS :</label>
        <input type="text" name="nis" id="nis">

        <br><label for="kelas">Kelas :</label>
        <input type="text" name="kelas" id="kelas">

        <br><label for="tgl_lahir">Tanggal Lahir :</label>
        <input type="date" name="tgl_lahir" id="tgl_lahir">

        <br><label for="tempat_lahir">Tempat Lahir :</label>
        <input type="text" name="tempat_lahir" id="tempat_lahir">

        <br><label for="alamat">Alamat :</label>
        <input type="text" name="alamat" id="alamat">

        <br><label>Jenis Kelamin :</label>
        <select name="jenis_kelamin" id="jenis_kelamin">
            <option value="Laki-Laki">Laki-Laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>

        <br><label for="agama">Agama :</label>
        <select name="agama" id="agama">
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Buddha">Buddha</option>
            <option value="Hindu">Hindu</option>
            <option value="Protestan">Protestan</option>
            <option value="Khonghucu">Khonghucu</option>
        </select>
        
        <br><input type="submit" value="Submit">
</body>
</html>