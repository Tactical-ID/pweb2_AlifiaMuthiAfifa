<?php
//menambahkan header dan sidebar
include '../../../index.php';
?>

<div class="container">
    <br>
    <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <h3>Tambah Data Pemilih</h3>
    </div>
    <br>
    
    <body>
        <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <form action="proses_tambahPemilih" method="post">
                <div class="col-md-5 mb-3">
                    <label for="nik" class="form-label">NIK</label>
                    <input type="text" class="form-control" name="nik">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="text" class="form-control" name="password">
                </div>
                <div class="col-md-5 mb-3">
                    <label for="nama_pemilih" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="nama_pemilih">
                </div>
                <div class="col-md-5 mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <textarea class="form-control" cols="10" rows="5" name="alamat"></textarea>
                </div>
            </div>
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 mb-8">
                <a href="pemilih" type="submit" class="btn btn-primary">Kembali</a>
                <input type="submit" name="submit" class="btn btn-success" value="Simpan">
            </div>
        </form>
    </body>
</div>
</div>