<?php require_once ('../_header.php');?>

    <div class="box">
        <h1>Pasien</h1>
        <h4>
            <small> Import Data Pasien</small>
            <div class="pull-right">
                <a href="../_file/sample/pasien.xlsx" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-download-alt"> Download Format Excel</i></a>
                <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"> Kembali</i></a>
            </div>
        </h4>
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <form action="proses.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="file">File Excel</label>
                        <input type="file" name="file" id="file" class="form-control" required autofocus>
                    </div>
                    <div class="form-group pull-right">
                        <input type="submit" name="import" id="file" value="Import" class="btn btn-success">
                    </div>

                </form>

            </div>
        </div>
    </div>
    <?php require_once ('../_footer.php');?>