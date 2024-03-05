<?php
require('proses/logindulu.php');
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

$query = $koneksi->query("INSERT INTO db_siswa VALUES('', '$nama_siswa', '$kelas','$alamat')");
if ($query) {
?>
    <script>
        window.alert('Data Berhasil Disimpan!!');
        window.location.href = 'index.php?page=siswa';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Disimpan!!');
        window.location.href = 'index.php?page=siswa-create';
    </script>
<?php

}
?>