<?php
require_once "../_config/config.php";

$id = $_GET['id'];
mysqli_query($con, "DELETE FROM tb_pasien WHERE id_pasien='$id'") or die(mysqli_error($con));
echo "<script>window.location='data.php';</script>";
?>