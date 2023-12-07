<?php

include_once '../../../config.php';
include_once '../../../controllers/calon_KadesController.php';

$database = new database();
$db = $database -> getKoneksi();

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $calon_kadesController = new Calon_kadesController($db);
    $result = $calon_kadesController -> deleteCalon_kades($id);

    if ($result) {
        header("location:calon_kades?succes=hapus");
    } else {
        echo "Gagal menghapus data";
    }
}
?>