<?php
require_once "../_config/config.php";
require "../_assets/libs/vendor/autoload.php";

use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDepedencyException;

if(isset($_POST['add'])){
    $uuid = Uuid::uuid4()->toString();
    $no_id = trim(mysqli_real_escape_string($con, $_POST['no_id']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jk']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $cek_id = mysqli_query($con, "SELECT * FROM tb_pasien WHERE no_id='$no_id'");
    if(mysqli_num_rows($cek_id)>0){
        echo "<script>alert('No. identitas sudah pernah diinput!');window.location='add.php';</script>";
    }else{
        mysqli_query($con, "INSERT INTO tb_pasien(id_pasien,no_id,nama_pasien,jenis_kelamin,alamat,no_telp) VALUES ('$uuid','$no_id','$nama','$jenis_kelamin','$alamat','$no_telp')")or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }
}else if(isset($_POST['edit'])){
    $id = $_POST['id'];
    $no_id = trim(mysqli_real_escape_string($con, $_POST['no_id']));
    $nama = trim(mysqli_real_escape_string($con, $_POST['nama']));
    $jenis_kelamin = trim(mysqli_real_escape_string($con, $_POST['jk']));
    $alamat = trim(mysqli_real_escape_string($con, $_POST['alamat']));
    $no_telp = trim(mysqli_real_escape_string($con, $_POST['no_telp']));
    $cek_id = mysqli_query($con, "SELECT * FROM tb_pasien WHERE no_id='$no_id' AND id_pasien!='$id'");
    if(mysqli_num_rows($cek_id)>0){
        echo "<script>alert('No. identitas sudah pernah diinput!');window.location='add.php';</script>";
    }else{
        mysqli_query($con, "UPDATE tb_pasien SET no_id='$no_id',nama_pasien='$nama',jenis_kelamin='$jenis_kelamin',alamat='$alamat',no_telp='$no_telp' WHERE id_pasien='$id'")or die(mysqli_error($con));
        echo "<script>window.location='data.php';</script>";
    }
}else if(isset($_POST['import'])){
    $file = $_FILES['file']['name'];
    $ekstensi = explode(".", $file);
    $file_name = "file-".round(microtime(true)).".".end($ekstensi);
    $sumber = $_FILES['file']['tmp_name'];
    $target_dir = "../_file/";
    $target_file = $target_dir.$file_name;
    move_uploaded_file($sumber,$target_file);

    $obj = PHPExcel_IOFactory::load($target_file);
    $all_data = $obj->getActiveSheet()->toArray(null,true,true,true);
    
    $sql = "INSERT INTO tb_pasien(id_pasien,no_id,nama_pasien,jenis_kelamin,alamat,no_telp) VALUES";
    for ($i=2;$i<=count($all_data);$i++) { 
        $uuid = Uuid::uuid4()->toString();
        $no_id = $all_data[$i]['A'];
        $nama = $all_data[$i]['B'];
        $jk = $all_data[$i]['C'];
        $alamat = $all_data[$i]['D'];
        $no_telp = $all_data[$i]['E'];
        $sql .= " ('$uuid','$no_id','$nama','$jk','$alamat','$no_telp'),";
    }
    $sql = substr($sql, 0, -1);
    echo $sql;
    mysqli_query($con, $sql) or die(mysqli_error($con));

    unlink($target_file);
    echo "<script>window.location='data.php';</script>";
}

?>