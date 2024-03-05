<?php
require('proses/logindulu.php');
$nama_guru = $_POST['nama_guru'];
$jabatan = $_POST['jabatan'];
$guru_mapel = $_POST['guru_mapel'];

$query = $koneksi->query("INSERT INTO db_guru VALUES('', '$nama_guru', '$jabatan','$guru_mapel')");
if ($query) {
?>
    <script>
        window.alert('Data Berhasil Disimpan!!');
        window.location.href = 'index.php?page=guru';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Disimpan!!');
        window.location.href = 'index.php?page=guru-create';
    </script>
<?php

}
?>