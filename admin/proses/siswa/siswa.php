<?php require('proses/logindulu.php')?>
<h2 class="text-center mt-5">Data Siswa</h2>
<a href="?page=siswa-create">
    <button class="btn btn-success mb-2">+ Tambah</button>
</a>

<table class="table table-striped shadow">
    <tr>
        <th>No</th>
        <th>Nama siswa</th>
        <th>Kelas</th>
        <th>Alamat</th>
        <th>--Action--</th>
    </tr>
    <?php
    $no = 1;
    $query = $koneksi->query( "SELECT * FROM db_siswa");
    while ($hasil = $query->fetch_object()) :
    ?> 
        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil->nama_siswa ?></td>
            <td><?= $hasil->kelas ?></td>
            <td><?= $hasil->alamat ?></td>
            <td>
                <a href="?page=siswa-edit&id=<?= $hasil->id_siswa ?>" class="btn btn-warning">Edit</a>
                <a href="?page=siswa-hapus&id=<?= $hasil->id_siswa ?>" class="btn btn-danger">Hapus</a>
            </td>
        </tr>
    <?php
        $no++;
    endwhile;
    ?>

</table>
<style>

  .table {
  max-width: 1300px;
  margin-left: 300px;
  }
  button {
  margin-left: 300px;
  }

</style>