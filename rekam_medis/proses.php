<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepedencyException;

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $pasien = trim(mysqli_real_escape_string($con, $_POST['pasien']));
    $keluhan = trim(mysqli_real_escape_string($con, $_POST['keluhan']));
    $dokter = trim(mysqli_real_escape_string($con, $_POST['dokter']));
    $diagnosa = trim(mysqli_real_escape_string($con, $_POST['diagnosa']));
    $poli = trim(mysqli_real_escape_string($con, $_POST['poli']));
    $tgl_periksa = trim(mysqli_real_escape_string($con, $_POST['tgl_periksa']));

    mysqli_query($con, "INSERT INTO tb_rm (id_rm,id_pasien,keluhan,id_dokter,diagnosa,id_poli,tgl_periksa) VALUES ('$uuid','$pasien','$keluhan','$dokter','$diagnosa','$poli','$tgl_periksa')")or die(mysqli_error($con));
    
    $obat = $_POST['obat'];
    foreach ($obat as $ob) {
        mysqli_query($con, "INSERT INTO tb_rm_obat (id_rm,id_obat) VALUES ('$uuid','$ob')") or die (mysqli_error($con));
    }
    
    echo "<script>window.location='data.php';</script>";
}
?>