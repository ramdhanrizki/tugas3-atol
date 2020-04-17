<?php 
    $data = mysqli_query($mysqli,"SELECT * FROM anggota ORDER BY tgl_daftar DESC");
    $row = mysqli_num_rows($data);
?>
<div class="container" style="margin-top:80px; ">
    <div class="title d-flex justify-content-between" style="margin-bottom:20px;">
        <h2>Data Anggota</h2>
        <a href="index.php?page=tambah_anggota" class="btn btn-primary btn-success btn-xs">Tambah</a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Email</th>
                    <th>No HP</th>
                    <th>Tgl Lahir</th>
                    <th>Photo</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                if($row > 0){
                    $n=1;
                    while ($res = mysqli_fetch_assoc($data))
                    {
                        echo "<tr><td>$n</td>
                            <td>".$res['nama']."</td>
                            <td>".$res['alamat']."</td>
                            <td>".$res['email']."</td>
                            <td>".$res['nohp']."</td>
                            <td>".$res['tgl_lahir']."</td>
                            <td width='15%'><img src='foto/".$res['photo']."' width='80%'/></td>
                            <td><a class='btn btn-primary btn-sm' href='index.php?page=update_anggota&id=".$res['id_anggota']."'>Update</a>  <a class='btn btn-danger btn-sm' href='actions/anggota.php?aksi=hapus&id=".$res['id_anggota']."' onclick='return confirm(`Apakah anda yakin akan menghapus data tersebut ?`);'>Hapus</a>
                            </td></tr>";
                        $n=$n+1;
                    }
                }
                else {
                    echo "<tr><td colspan=9> <center>Belum ada data</center></td></tr>";
                }

                ?>
            </tbody>
        </table>
    </div>
</div>