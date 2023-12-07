<?php

include_once '../../../config.php';
include_once '../../../controllers/PemilihController.php';

$database = new database();
$db = $database -> getKoneksi();

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $pemilihController = new PemilihController($db);
    $result = $pemilihController -> deletePemilih($id);

    if ($result) {
        header("location:pemilih?succes=hapus");
    } else {
        echo "Gagal menghapus data";
    }
}
?>