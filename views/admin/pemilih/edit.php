<?php
include_once '../../../config.php';
include_once '../../../controllers/PemilihController.php';

//memanggil header dan sidebar
require '../../../index.php';

$database = new database();
$db = $database->getKoneksi();

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $pemilihController = new PemilihController($db);
    $pemilihData = $pemilihController->getPemilihById($id);

    if($pemilihData) {
        if (isset($_POST['submit'])) {
            $nik = $_POST['nik'];
            $password = $_POST['password'];
            $nama_pemilih = $_POST['nama_pemilih'];
            $alamat = $_POST['alamat'];

            $result = $pemilihController->updatePemilih($id, $nik, $password, $nama_pemilih, $alamat);

            if ($result) {
                header ("location:pemilih?succes=update");
            } else {
                header("location:editPemilih");
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
<h3>Edit Data Pemilih</h3>
</div>
<br>

<?php
if ($pemilihData) {
?>

<div class="col-md-8 ms-sm-auto col-lg-10 px-md-4">
    <form action="" method="post">
        <table class="table">
            <?php
        foreach ($pemilihData as $d => $value) {
            ?>
            <table border="0">
                <tr>
                    <td width="150">
                        <?php
                        echo $d;
                        ?>
                    </td>
                    <td>
                        <input type="text" class="form-control" name="<?php echo $d ?>" value="<?php echo $value ?>">
                    </td>
                </tr>
                <?php
                }
                ?>
            <tr>
                <td></td>
                <td>
                    <a href="pemilih" type="submit" class="btn btn-primary">Kembali</a>
                    <input type="submit" name="submit" class="btn btn-success" value="Simpan">
                </td>
            </tr>
        </table>
    </table>
    </form>
</div>
<?php
}
?>
</div>