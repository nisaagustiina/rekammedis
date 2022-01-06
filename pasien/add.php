<?php require_once ('../_header.php');?>

    <div class="box">
        <h1>Pasien</h1>
        <h4>
            <small> Tambah Data Pasien</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                <div class="form-group">
                        <label for="no_id">No. Identitas</label>
                        <input type="number" name="no_id" id="no_id" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama Pasien</label>
                        <input type="text" name="nama" id="nama" class="form-control" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="jk">Jenis Kelamin</label>
                        <div>
                            <label class="radio-inline"><input type="radio" name="jk" id="jk" value="L" required>Laki-Laki</label>
                            <label class="radio-inline"><input type="radio" name="jk" id="jk" value="P" required>Perempuan</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat</label>
                        <textarea name="alamat" id="alamat" cols="30" rows="3" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="no_telp">No. Telp</label>
                        <input type="number" name="no_telp" id="no_telp" class="form-control" required autofocus>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" id="add" value="Simpan" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
    </div>
    <?php require_once ('../_footer.php');?>