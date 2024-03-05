<?php
require('proses/logindulu.php');
$id =  $_GET['id'];
$query_select = $koneksi->query( 
"SELECT * FROM db_siswa WHERE id_siswa='$id'"
    );
$hasil = $query_select->fetch_object();
?>
<center>
    <h1>Edit siswa</h1>
    <table width="480px">
        <tr>
            <td>
                <form action="?page=siswa-update" method="post" enctype="multipart/form-data">
                    <input value="<?= $hasil->id_siswa ?>" name="id" type="hidden">
                    <input value="<?= $hasil->nama_siswa ?>" name="nama_siswa" type="text" class="form-control mb-3" placeholder="Nama siswa">
                    <input value="<?= $hasil->kelas ?>" name="kelas" type="text" class="form-control mb-3" placeholder="kelas">
                    <input value="<?= $hasil->alamat?>" name="alamat" type="text" class="form-control mb-3" placeholder="Alamat">
                    <button class="btn btn-success" type="submit">Simpan</button>
                </form>
            </td>
        </tr>
    </table>
</center>