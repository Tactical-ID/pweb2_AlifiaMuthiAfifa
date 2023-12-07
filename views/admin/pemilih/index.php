<?php

//memanggil class model database
include_once '../../../config.php';
include_once '../../../controllers/PemilihController.php';

//memanggil header dan sidebar
require '../../../index.php';

//instansiasikan class database
$database = new database;
$db = $database -> getKoneksi();

$pemilihController = new PemilihController($db);
$pemilih = $pemilihController -> getAllPemilih();
?>


<body>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<br>
<h3>Data Pemilih</h3>

<a class="btn btn-success" href="tambahPemilih">Tambah</a>
</br>
</br>
  <!-- <a class="btn btn-primary" href="printdatapemilih.php" target="_BLANK"><span data-feather="printer"></span>UNDUH PDF</a> -->

  <!-- <div class="d-flex justify-content-end mb-2">
  <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mb-3">
  <div class="input-group">
  <input type="text" style="max-width: 150px;" class="form-control" name="search_nik" placeholder="Cari NIK">
  <button type="submit" class="btn btn-primary">Cari</button>
  </form>
  </div>
  </div> -->

<?php
error_reporting(E_ERROR | E_PARSE);
if ($_GET ['succes'] === "tambah") {
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Pemilih Berhasil Ditambahkan!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "update") {
 echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Data Pemilih Berhasil Diupdate!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "hapus") {
 echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Pemilih Berhasil Dihapus!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="table-responsive small">
<table class="table table-striped table-border">
    <tr>
        <th>No</th>
        <th>NIK</th>
        <th>Password</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
foreach($pemilih as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['nik'] ?></td>
    <td><?php echo $x['password'] ?></td>
    <td><?php echo $x['nama_pemilih'] ?></td>
    <td><?php echo $x['alamat'] ?></td>
    <td>
        <a class="btn btn-warning" href="editPemilih?id=<?php echo $x['id']; ?> ">Edit</a>
        <a class="btn btn-danger" href="hapusPemilih?id=<?php echo $x['id']; ?> "onclick="return confirm('Apakah yakin akan menghapus...?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</body>