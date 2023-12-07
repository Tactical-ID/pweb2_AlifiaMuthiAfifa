<?php
include_once '../../../config.php';
include_once '../../../controllers/Calon_kadesController.php';

//memanggil header dan sidebar
include_once '../../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $calon_kadesController = new Calon_kadesController($db);
    $calon_kadesData = $calon_kadesController->getCalon_kadesById($id);

    if($calon_kadesData) {
        if (isset($_POST['submit'])) {
            $nama_calon = $_POST['nama_calon'];
            $jenis_kelamin = $_POST['jenis_kelamin'];
            $agama = $_POST['agama'];
            $foto = addslashes(file_get_contents($_FILES['foto']['tmp_name']));


            $result = $calon_kadesController->updateCalon_kades($id, $nama_calon, $jenis_kelamin, $foto, $agama);

            if ($result) {
                header ("location:calon_kades?succes=update");
            } else {
                header("location:editCalon_kades");
            }
        }
    } else {
        echo "Data pemilih tidak ditemukan";
    }
}
?>

<div class="container">
<br>
<div class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
<h3>Edit Data Calon Kepala Desa</h3>
</div>

<?php
if ($calon_kadesData) {
?>
    <div class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
    <form action="" method="post" enctype="multipart/form-data">
    <table class="table">
        <?php foreach ($calon_kadesData as $d => $value) { ?>
            <tr>
                <td width="150"><?php echo $d; ?></td>
                <td>
                    <?php if ($d === 'foto') { ?>
                        <?php
                        // Mendapatkan data BLOB dari database
                        $fotoData = $value;

                        // Konversi data BLOB ke format base64
                        $base64Image = base64_encode($fotoData);
                        // Membuat URL untuk gambar
                        $imageSrc = 'data:image/jpg;base64,' . $base64Image;
                        ?>
                        
                        <img src="<?php echo $imageSrc; ?>" alt="Foto" style="max-width: 100px; max-height: 100px;">
                        <br>
                        <a>*max ukuran foto 64kib</a>
                        <input type="file" class="form-control" name="foto" accept="image/*">
                    <?php } else { ?>
                        <input type="text" class="form-control" name="<?php echo $d; ?>" value="<?php echo $value; ?>">
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
        <tr>
            <td></td>
            <td>
                <a href="calon_kades" type="submit" class="btn btn-primary">Kembali</a>
                <input type="submit" name="submit" class="btn btn-success" value="Simpan">
            </td>
        </tr>
    </table>
</form>
    </div>

<?php
}
?>
</div>