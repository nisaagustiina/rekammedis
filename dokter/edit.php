<?php require_once ('../_header.php');?>

    <div class="box">
        <h1>Dokter</h1>
        <h4>
            <small> Edit Data Dokter</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <?php
                        $id = $_GET['id'];
                        $sql_dokter = mysqli_query($con, "SELECT * FROM tb_dokter WHERE id_dokter='$id'") or die(mysqli_error($con));
                        $data=mysqli_fetch_array($sql_dokter);
                    ?>
                    <input type="hidden" name="id" id="" value="<?=$data['id_dokter']?>">
                    <div class="form-group">
                        <label for="nama">Nama Dokter</label>
                        <input type="text" name="nama" id="nama" value="<?=$data['nama_dokter']?>" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="spesialis">Spesialis</label>
                        <input type="text" name="spesialis" value="<?=$data['spesialis']?>" id="spesialis" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" value="<?=$data['alamat']?>" cols="30" rows="3" class="form-control" required><?=$data['alamat']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp</label>
                        <input type="number" name="no_telp" value="<?=$data['no_telp']?>" id="no_telp" class="form-control" required autofocus>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" id="edit" value="Simpan" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
    </div>
    <?php require_once ('../_footer.php');?>