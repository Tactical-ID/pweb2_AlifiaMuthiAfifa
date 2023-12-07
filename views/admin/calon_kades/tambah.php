<?php
//menambahkan header dan sidebar
include "../../../index.php";
?>

<div class="container">
<br>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h3>Tambah Data Calon</h3>
</div>

<body>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <form action="proses_tambahCalon_kades" method="post" enctype="multipart/form-data">
          <div class="col-md-5 mb-3">
              <label for="nama" class="form-label">Nama</label>
              <input type="text" class="form-control" name="nama">
          </div>
          <div class="col-md-5 mb-3">
              <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
              <input type="text" class="form-control" name="jenis_kelamin">
          </div>
          <div class="col-md-5 mb-3">
              <label for="foto" class="form-label">Foto</label>
              <input type="file" class="form-control" name="foto" accept=".jpg, .jpeg, .png" onchange="previewImage(this)">
          </div>
          <div class="col-md-5 mb-3">
              <label for="agama" class="form-label">Agama</label>
              <input type="text" class="form-control" name="agama">
          </div>
          <div class="mb-8">
          <a href="calon_kades" type="submit" class="btn btn-primary">Kembali</a>
          <input type="submit" name="submit" class="btn btn-success" value="Simpan">
          </div>
  </form>
</body>
</div>