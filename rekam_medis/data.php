<?php require_once ('../_header.php');?>
    <div class="box">
        <h1>Rekam Medis</h1>
        <h4>
            <small>Data Rekam Medis</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"> Tambah RM</i></a>
            </div>
        </h4>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tabel">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Tanggal Periksa</th>
                        <th>Nama Pasien</th>
                        <th>Keluhan</th>
                        <th>Nama Dokter</th>
                        <th>Diagnosa</th>
                        <th>Poliklinik</th>
                        <th>Obat</th>
                        <th><i class="glyphicon glyphicon-cog"></i></th>
                    </tr>
                </thead>
               <tbody>
                    <?php
                    $no = 1;
                    $query = mysqli_query($con, "SELECT * FROM tb_rm INNER JOIN tb_pasien ON tb_rm.id_pasien=tb_pasien.id_pasien INNER JOIN tb_dokter ON tb_rm.id_dokter=tb_dokter.id_dokter INNER JOIN tb_poli ON tb_rm.id_poli=tb_poli.id_poli ORDER BY tgl_periksa") or die (mysqli_error($con));
                    if(mysqli_num_rows($query)>0){
                    while($data=mysqli_fetch_array($query)){
                    ?>
                    <tr>
                        <td><?= $no++?></td>
                        <td><?= tgl_ind($data['tgl_periksa'])?></td>
                        <td><?= $data['nama_pasien']?></td>
                        <td><?= $data['keluhan']?></td>
                        <td><?= $data['nama_dokter']?></td>
                        <td><?= $data['diagnosa']?></td>
                        <td><?= $data['nama_poli']?></td>
                        <td><?php
                        $sql_obat=mysqli_query($con, "SELECT* FROM tb_rm_obat INNER JOIN tb_obat ON tb_rm_obat.id_obat=tb_obat.id_obat WHERE id_rm='$data[id_rm]'") or die (mysqli_error($con));
                        while($ob=mysqli_fetch_array($sql_obat)){
                            echo $ob['nama_obat']. "<br>";
                        }
                        ?></td>
                        <td><a href="del.php?id=<?= $data['id_rm'];?>" onclick="return confirm('Yakin akan menghapus ini?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a></td>
                    </tr>
                    <?php }
                }else{
                    echo "<tr><td colspan=\"6\" align=\"center\">Data tidak ditemukan</td></tr>";
                }  
                ?>
               </tbody>
            </table>
        </div>
    </div>
<?php require_once ('../_footer.php');?>
<script>
    $(document).ready(function(){
        $('#tabel').DataTable({
            columnDefs: [
                {
                    "searchable": false,
                    "orderable": false,
                    "targets": 8,
                }
            ]
        });
    });
</script>