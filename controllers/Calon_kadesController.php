<?php

include_once '../../../models/Calon_kades.php';

class Calon_kadesController
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Calon_kades($db);
    }

    public function getAllCalon_kades()
    {
        return $this->model->getAllCalon_kades();
    }

    public function createCalon_kades($nama_calon, $jenis_kelamin, $foto, $agama)
    {
        return $this->model->createCalon_kades($nama_calon, $jenis_kelamin, $foto, $agama);
    }

    public function getCalon_kadesById($id)
    {
        return $this->model->getCalon_kadesById($id);
    }

    public function updateCalon_kades($id, $nama_calon, $jenis_kelamin, $foto, $agama)
    {
        return $this->model->updateCalon_kades($id, $nama_calon, $jenis_kelamin, $foto, $agama);
    }

    public function deleteCalon_kades($id)
    {
        return $this->model->deleteCalon_kades ($id);
    }
    
    public function escapeInput($input) {
        global $koneksi;
        return mysqli_real_escape_string($koneksi, $input);
      }
}
?>