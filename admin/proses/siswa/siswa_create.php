<?php require('proses/logindulu.php');
?>
<center>
    <h3 class="mt-5">Input Data Siswa</h3>
    <table width="80%" class="mt-4">
        <tr>
            <td>
                <form action="?page=siswa-store" method="post" enctype="multipart/form-data">
                    <input class="form-control form-control-lg mt-2 mb-2" type="text" name="nama_siswa" placeholder="Masukkan Nama Siswa">
                    <input class="form-control form-control-lg mt-2" type="text" name="kelas" placeholder="Masukkan Kelas Siswa">
                    <input class="form-control form-control-lg mt-2" type="text" name="alamat" placeholder="Masukkan Alamat Siswa">
                    <button class="btn btn-success mt-2" type="submit" name="simpan">Simpan</button>
                </form>
            </td>
        </tr>
    </table>
</center>