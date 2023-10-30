<!DOCTYPE html>
<html>
<head>
    <title>Hasil Submit Data Siswa</title>
</head>
<body>
    <h1>Hasil Submit Data Siswa</h1>
    <p>Nama Siswa: <?php echo $result['nama']; ?></p>
    <p>NIS: <?php echo $result['nis']; ?></p>
    <p>Kelas: <?php echo $result['kelas']; ?></p>
    <p>Tanggal Lahir: <?php echo $result['tgl_lahir']; ?></p>
    <p>Tempat Lahir: <?php echo $result['tempat_lahir']; ?></p>
    <p>Alamat :<?php echo $result['alamat']; ?></p>
    <p>Jenis Kelamin :<?php echo $result['jenis_kelamin']; ?></p>
    <p>Agama :<?php echo $result['agama']; ?></p>

    <!-- link untuk kembali ke form input -->
    <a href="<?php echo site_url('siswaController/input_data'); ?>">Kembali ke Form Input</a>
</body>
</html>
