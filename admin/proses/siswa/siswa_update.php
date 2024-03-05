<?php
require('proses/logindulu.php');
$id = $_POST['id'];
$nama_siswa = $_POST['nama_siswa'];
$kelas = $_POST['kelas'];
$alamat = $_POST['alamat'];

$query_update = $koneksi->query("UPDATE db_siswa SET 
                                            nama_siswa='$nama_siswa',
                                            kelas='$kelas',
                                            alamat='$alamat'
                                            WHERE id_siswa='$id'
                                            ");
if ($query_update) {
?>
    <script>
        window.alert('Data Berhasil Diedit!!');
        window.location.href = 'index.php?page=siswa';
    </script>
<?php
} else {
?>
    <script>
        window.alert('Data Gagal Diedit!!');
        window.location.href = 'index.php?page=siswa';
    </script>
<?php } ?>