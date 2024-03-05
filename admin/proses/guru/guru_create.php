<?php require('proses/logindulu.php');
?>
<center>
    <h3 class="mt-5">Input Data guru</h3>
    <table width="80%" class="mt-4">
        <tr>
            <td>
                <form action="?page=guru-store" method="post" enctype="multipart/form-data">
                    <input class="form-control form-control-lg mt-2 mb-2" type="text" name="nama_guru" placeholder="Masukkan Nama Guru">
                    <input class="form-control form-control-lg mt-2" type="text" name="jabatan" placeholder="Masukkan Jabatan Guru">
                    <input class="form-control form-control-lg mt-2" type="text" name="guru_mapel" placeholder="Masukkan Guru Mapel">
                    <button class="btn btn-success mt-2" type="submit" name="simpan">Simpan</button>
                </form>
            </td>
        </tr>
    </table>
</center>