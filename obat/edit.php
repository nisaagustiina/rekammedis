<?php require_once ('../_header.php');?>

    <div class="box">
        <h1>Obat</h1>
        <h4>
            <small> Edit Data Obat</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <?php
                        $id = $_GET['id'];
                        $sql_obat = mysqli_query($con, "SELECT * FROM tb_obat WHERE id_obat='$id'") or die(mysqli_error($con));
                        $data=mysqli_fetch_array($sql_obat);
                    ?>
                        <input type="hidden" name="id" id="id" value="<?= $data['id_obat']?>">
                    <div class="form-group">
                        <label for="nama">Nama Obat</label>
                        <input type="text" name="nama" id="nama" value="<?= $data['nama_obat']?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan Obat</label>
                        <textarea name="ket" id="ket" value="<?= $data['ket_obat']?>" cols="30" rows="3" class="form-control" required><?= $data['ket_obat']?></textarea>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" id="edit" value="Simpan" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php require_once ('../_footer.php');?>