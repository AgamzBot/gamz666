<?php require('proses/logindulu.php')?>
<h2 class="text-center mt-5">Data Guru</h2>
<a href="?page=guru-create">
    <button class="btn btn-success mb-2">+ Tambah</button>
</a>

<table class="table table-striped shadow">
    <tr>
        <th>No</th>
        <th>Nama guru</th>
        <th>Jabatan </th>
        <th>Guru Mata Pelajaran</th>
        <th>--Action--</th>
    </tr>
    <?php
    $no = 1;
    $query = $koneksi->query( "SELECT * FROM db_guru");
    while ($hasil = $query->fetch_object()) :
    ?> 
        <tr>
            <td><?= $no ?></td>
            <td><?= $hasil->nama_guru ?></td>
            <td><?= $hasil->jabatan ?></td>
            <td><?= $hasil->guru_mapel ?></td>
            <td>
                <a href="?page=guru-edit&id=<?= $hasil->id_guru ?>" class="btn btn-warning">Edit</a>
                <a href="?page=guru-hapus&id=<?= $hasil->id_guru ?>" class="btn btn-danger">Hapus</a>
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