<?php
class HomeController {
    public function home() {
        header("location:http://localhost/dashboard1/index.html");
    }
    public function pemilih() {
        header("http://localhost/dashboard1/views/admin/pemilih/index.php");
    }
    public function calon_kades() {
        header("http://localhost/dashboard1/views/admin/calon_kades/index.php");
    }
}
?>