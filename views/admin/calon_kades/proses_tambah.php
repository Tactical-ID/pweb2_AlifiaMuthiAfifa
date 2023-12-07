<?php

include_once '../../../config.php';
include_once '../../../controllers/Calon_kadesController.php';

$database = new database ();
$db = $database ->getKoneksi ();

// Periksa apakah file berhasil diunggah
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
   // Pindahkan file yang diunggah ke direktori yang ditentukan
    $nama_calon = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];     
    $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));

    // Input data ke database
    $calon_kadesController = new Calon_kadesController($db);
    $result = $calon_kadesController->createCalon_kades($nama_calon, $jenis_kelamin, $foto, $agama);

    if ($result) {
        header("location:calon_kades?succes=tambah");
    } else {
        header("location:tambahCalon_kades");
    }
}
?>