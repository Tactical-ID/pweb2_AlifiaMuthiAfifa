<?php

class Calon_kades{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllCalon_kades()
    {
        $query = "SELECT * FROM calon_kades";
        $result = mysqli_query ($this->koneksi, $query);
        return $result;
    }

    public function createCalon_kades($nama_calon, $jenis_kelamin, $foto, $agama)
    {
        $query = "INSERT INTO calon_kades (nama_calon, jenis_kelamin, foto, agama)
        VALUES ('$nama_calon', '$jenis_kelamin', '$foto', '$agama')";
        $result = mysqli_query ($this->koneksi, $query);
        IF ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getCalon_kadesById($id)
    {
        $query = "SELECT * from calon_kades where id = $id";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updateCalon_kades($id, $nama_calon, $jenis_kelamin, $foto, $agama)
    {
        $query = "UPDATE calon_kades set nama_calon='$nama_calon', jenis_kelamin='$jenis_kelamin', foto='$foto', agama='$agama' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteCalon_kades($id)
    {
        $query = "DELETE FROM calon_kades WHERE id=$id";
        $result = mysqli_query($this -> koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>