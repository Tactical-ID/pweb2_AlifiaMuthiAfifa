<?php

//memanggil class model database
include_once '../../../config.php';
include_once '../../../controllers/Calon_kadesController.php';

//memanggil header dan sidebar
include '../../../index.php';
//instansiasikan class database
$database = new database;
$db = $database -> getKoneksi();

$calon_kadesController = new Calon_kadesController($db);
$calon_kades = $calon_kadesController -> getAllCalon_kades();

// function escapeInput($input) {
//   global $koneksi;
//   return mysqli_real_escape_string($koneksi, $input);
// }
?>

<body>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<br>
<h3>Data Calon Kepala Desa</h3>

  <a class="btn btn-success" href="tambahCalon_kades">Tambah</a>
  </br>
  <br>
  <!-- <a class="btn btn-primary" href="printdatacalon.php" target="_BLANK"><span data-feather="printer"></span>UNDUH PDF</a> -->

  <!-- <div class="d-flex justify-content-end mb-2">
  <form method="GET" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="mb-3">
  <div class="input-group">
  <input type="text" style="max-width: 150px;" class="form-control" name="search_nik" placeholder="Cari Nama">
  <button type="submit" class="btn btn-primary">Cari</button>
  </form>
  </div>
  </div> -->

<?php
error_reporting(E_ERROR | E_PARSE);
if ($_GET ['succes'] === "tambah") {
 echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Data Calon Berhasil Ditambahkan!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "update") {
 echo '<div class="alert alert-primary alert-dismissible fade show" role="alert">
  <strong>Data Calon Berhasil Diupdate!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
else if ($_GET ['succes'] === "hapus") {
 echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Data Calon Berhasil Dihapus!</strong>
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

<div class="table-responsive small">
<table class="table table-striped table-border">
    <tr>
        <th>ID Calon</th>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>Foto</th>
        <th>Agama</th>
        <th>Aksi</th>
    </tr>

<?php
$no = 1;
foreach($calon_kades as $x){
    ?>
<tr>
    <td><?php echo $no++ ?></td>
    <td><?php echo $x['nama_calon'] ?></td>
    <td><?php echo $x['jenis_kelamin'] ?></td>
    <td>
    <?php
    // Mendapatkan data BLOB dari database
    $fotoData = $x['foto'];

    // Konversi data BLOB ke format base64
    $base64Image = base64_encode($fotoData);
    // Membuat URL untuk gambar
    $imageSrc = 'data:image/jpg;base64,' . $base64Image;
    ?>
    <img src="<?php echo $imageSrc; ?>" alt="Foto" style="max-width: 100px; max-height: 100px;">
    </td>
    <td><?php echo $x['agama'] ?></td>
    <td>
        <a class="btn btn-warning" href="editCalon_kades?id=<?php echo $x['id']; ?> ">Edit</a>
        <a class="btn btn-danger" href="hapusCalon_kades?id=<?php echo $x['id']; ?> "onclick="return confirm('Apakah yakin akan menghapus...?')">Hapus</a>
    </td>
</tr>
<?php
}
?>
</table>
</div>
</div>
</body>