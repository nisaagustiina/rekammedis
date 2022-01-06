<?php require_once ('../_header.php');?>
    <div class="box">
        <h1>Poliklinik</h1>
        <h4>
            <small>Data Poliklinik</small>
            <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a href="generate.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"> Tambah Poli</i></a>
            </div>
        </h4>
        <form action="" method="post" name="proses">
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover" id="tabel">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Poliklinik</th>
                        <th>Gedung </th>
                        <th><center><input type="checkbox" id="select_all" value=""></center></th>
                    </tr>
                </thead>
                <tbody>
                <?php
                $no = 1;
                $sql_obat = mysqli_query($con, "SELECT * FROM tb_poli ORDER BY nama_poli ASC") or die (mysqli_error($con));
                if(mysqli_num_rows($sql_obat)>0){
                    while($data=mysqli_fetch_array($sql_obat)){ ?>
                        <tr>
                            <td><?= $no;?></td>
                            <td><?= $data['nama_poli'];?></td>
                            <td><?= $data['gedung'];?></td>
                            <td align="center">
                            <input type="checkbox" name="checked[]" class="check" value="<?= $data['id_poli'];?>">
                            </td>
                        </tr>
                    <?php
                    $no++; }
                }else{
                    echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
                }  
                ?>
                </tbody>
            </table>
        </div>
        </form><br><br>
        <div class="box pull-right">
                <button class="btn btn-warning btn-sm" onclick="edit()"><i class="glyphicon glyphicon-edit"></i> Edit</button>
                <button class="btn btn-danger btn-sm" onclick="hapus()"><i class="glyphicon glyphicon-trash"></i> Hapus</button>
        </div>
    </div>
<?php require_once ('../_footer.php');?>
<script>
    $(document).ready(function(){
        $('#tabel').DataTable();

        $('#select_all').on('click', function(){
            if(this.checked){
                $('.check').each(function(){
                    this.checked = true;
                })
            }else{
                $('.check').each(function(){
                    this.checked = false;
                })
            }
        });

        $('.check').on('click', function(){
            if($('.check:checked').length == $('.check').length){
                $('#select_all').prop('checked',true)
            }else{
                $('#select_all').prop('checked',false)
            }
        });
    })

    function edit(){
        document.proses.action = 'edit.php';
        document.proses.submit();
    }

    function hapus(){
        var conf = confirm('Yakin akan menghapus data ini?');
        if(conf){
            document.proses.action = 'del.php';
            document.proses.submit();
        }  
    }

</script>