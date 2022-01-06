<?php require_once ('../_header.php');?>

    <div class="box">
        <h1>Rekam Medis</h1>
        <h4>
            <small> Tambah Data Rekam Medis</small>
            <div class="pull-right">
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="pasien">Pasien</label>
                        <select name="pasien" id="pasien" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php
                            $query = mysqli_query($con, "SELECT * FROM tb_pasien") or die(mysqli_error($con));
                            while($data=mysqli_fetch_array($query)){
                                echo '<option value="'.$data['id_pasien'].'">'.$data['no_id'].' - '.$data['nama_pasien'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="keluhan">Keluhan</label>
                        <textarea name="keluhan" id="keluhan" cols="30" rows="3.5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="dokter">Dokter</label>
                        <select name="dokter" id="dokter" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php
                            $query = mysqli_query($con, "SELECT * FROM tb_dokter") or die(mysqli_error($con));
                            while($data=mysqli_fetch_array($query)){
                                echo '<option value="'.$data['id_dokter'].'">'.$data['nama_dokter'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="diagnosa">Diagnosa</label>
                        <textarea name="diagnosa" id="diagnosa" cols="30" rows="3.5" class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="poli">Poliklinik</label>
                        <select name="poli" id="poli" class="form-control" required>
                            <option value="">--Pilih--</option>
                            <?php
                            $query = mysqli_query($con, "SELECT * FROM tb_poli ORDER BY nama_poli ASC") or die(mysqli_error($con));
                            while($data=mysqli_fetch_array($query)){
                                echo '<option value="'.$data['id_poli'].'">'.$data['nama_poli'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="obat">Obat</label>
                        <select multiple size="7" name="obat[]" id="obat" class="form-control" required>
                            <?php
                            $query = mysqli_query($con, "SELECT * FROM tb_obat") or die(mysqli_error($con));
                            while($data=mysqli_fetch_array($query)){
                                echo '<option value="'.$data['id_obat'].'">'.$data['nama_obat'].'</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="tgl_periksa">Tanggal Periksa</label>
                        <input type="date" name="tgl_periksa" id="tgl_periksa" value="<?= date('Y-m-d')?>" class="form-control" required>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="add" id="add" value="Simpan" class="btn btn-success">
                        <input type="reset" name="reset" id="reset" value="Reset" class="btn btn-default">
                    </div>
                </form>

            </div>
        </div>
    </div>
    <?php require_once ('../_footer.php');?>
    <script>
        CKEDITOR.replace('keluhan',{
            uiColor: '#ec971f',
        });
    </script>