<?php

include_once '../../../models/Pemilih.php';

class PemilihController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Pemilih($db);
    }

    public function getAllPemilih()
    {
        return $this->model->getAllPemilih();
    }

    public function createPemilih($nik, $password, $nama_pemilih, $alamat)
    {
        return $this->model->createPemilih($nik, $password, $nama_pemilih, $alamat);
    }

    public function getPemilihById($id)
    {
        return $this->model->getPemilihById($id);
    }

    public function updatePemilih($id, $nik, $password, $nama_pemilih, $alamat)
    {
        return $this->model->updatePemilih($id, $nik, $password, $nama_pemilih, $alamat);
    }

    public function deletePemilih($id)
    {
        return $this->model->deletePemilih ($id);
    }
    
    public function escapeInput($input) {
        global $koneksi;
        return mysqli_real_escape_string($koneksi, $input);
      }
}
?>