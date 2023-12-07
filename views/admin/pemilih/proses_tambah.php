<?php

include_once '../../../config.php';
include_once '../../../controllers/PemilihController.php';

$database = new database ();
$db = $database ->getKoneksi ();

if (isset($_POST['submit'])) {
    $nik = $_POST['nik'];
    $password = $_POST['password'];
    $nama_pemilih = $_POST['nama_pemilih'];
    $alamat = $_POST['alamat'];

    $pemilihController = new PemilihController($db);
    $result=$pemilihController->createPemilih($nik, $password, $nama_pemilih, $alamat);

    if($result){
        header("location:pemilih?succes=tambah");
    }else{
        header("location:tambahPemilih");
    }
}
?>