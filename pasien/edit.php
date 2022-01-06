<?php require_once ('../_header.php');?>

    <div class="box">
        <h1>Pasien</h1>
        <h4>
            <small> Edit Data Pasien</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                <?php
                        $id = $_GET['id'];
                        $sql_pasien = mysqli_query($con, "SELECT * FROM tb_pasien WHERE id_pasien='$id'") or die(mysqli_error($con));
                        $data=mysqli_fetch_array($sql_pasien);
                    ?>
                    <input type="hidden" name="id" id="" value="<?=$data['id_pasien']?>">
                <div class="form-group">
                        <label for="no_id">No. Identitas</label>
                        <input type="number" name="no_id" value="<?= $data['no_id']?>" id="no_id" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" value="<?= $data['nama_pasien']?> " class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="jk" id="jk" value="L" required <?=$data['jenis_kelamin']=="L"?"checked":null?>>Laki-Laki</label>
                            <label class="radio-inline"><input type="radio" name="jk" id="jk" value="P" required <?=$data['jenis_kelamin']=="P"?"checked":null?>>Perempuan</label>
                        </div>
                    </div> 
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea value="<?= $data['alamat']?>" name="alamat" id="alamat" cols="30" rows="3" class="form-control" required><?= $data['alamat']?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp</label>
                        <input type="number" value="<?= $data['no_telp']?>" name="no_telp" id="no_telp" class="form-control" required autofocus>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="edit" id="add" value="Simpan" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
    </div>
    <?php require_once ('../_footer.php');?>