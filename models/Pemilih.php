<?php

class Pemilih{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllPemilih()
    {
        $query = "SELECT * FROM pemilih";
        $result = mysqli_query ($this->koneksi, $query);
        return $result;
    }

    public function createPemilih($nik, $password, $nama_pemilih, $alamat)
    {
        $query = "INSERT INTO pemilih (nik, password, nama_pemilih, alamat)
        VALUES ('$nik', '$password', '$nama_pemilih', '$alamat')";
        $result = mysqli_query ($this->koneksi, $query);
        IF ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function getPemilihById($id)
    {
        $query = "SELECT * from pemilih where id = $id";
        $result = mysqli_query ($this->koneksi, $query);
        return mysqli_fetch_assoc($result);
    }

    public function updatePemilih($id, $nik, $password, $nama_pemilih, $alamat)
    {
        $query = "UPDATE pemilih set nik='$nik', password='$password', nama_pemilih='$nama_pemilih', alamat='$alamat' where id='$id'";
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePemilih($id)
    {
        $query = "DELETE FROM pemilih WHERE id=$id";
        $result = mysqli_query($this -> koneksi, $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>