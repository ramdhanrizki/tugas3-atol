<div class="container" style="margin-top:80px; ">
    <div class="text-center">
        <h2>Update Data Anggota</h2>
        <p class="lead">Silakan Isi Form Berikut Untuk Mengubah Data Anggota</p>
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-6 order-md-1">
            <form class="needs-validation" method="post" action="actions/anggota.php?aksi=update" enctype="multipart/form-data">
                <?php 
                $id = $_GET['id'];
                if ($id == "") {
                    header("location:index.php?page=anggota");
                    die;
                }
        
                $data = mysqli_query($mysqli,"SELECT * FROM anggota where id_anggota= $id LIMIT 1" );
                while ($res = mysqli_fetch_assoc($data)) { ?>
                <input type="hidden" name="id_anggota" value="<?=$res['id_anggota']?>">
                <input type="hidden" name="photo_lama" value="<?=$res['photo']?>">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Nama Depan</label>
                        <input required name="nama_depan" type="text" class="form-control" id="firstName" placeholder="" value="<?=explode(" ",$res['nama'])[0]?>" required="">
                        <div class="invalid-feedback">
                            Nama depan tidak boleh kosong
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Nama Belakang</label>
                        <input required name="nama_belakang" type="text" class="form-control" id="lastName" placeholder="" value="<?=explode(" ",$res['nama'])[1]?>" required="">
                        <div class="invalid-feedback">
                            Nama Belakang Tidak Boleh Kosong
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input required name="email" type="email" class="form-control" id="email" placeholder="nama@mahasiswa.unikom.ac.id" value="<?=$res['email']?>">
                    <div class="invalid-feedback">
                        Email tidak boleh ksoong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Alamat</label>
                    <input required name="alamat" type="text" class="form-control" id="address" placeholder="Ketikkan alamat anda" required="" value="<?=$res['alamat']?>">
                    <div class="invalid-feedback">
                        Alamat tidak boleh kosong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="nohp">No Handphone</label>
                    <input required name="nohp" type="text" class="form-control" id="nohp" placeholder="Nomor Handphone Anda" value="<?=$res['nohp']?>">
                    <div class="invalid-feedback">
                        No HP tidak boleh kosong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tlg_lahir">Tanggal Lahir</label>
                    <input required name="tgl_lahir" type="date" class="form-control" id="tlg_lahir" value="<?=$res['tgl_lahir']?>">
                    <div class="invalid-feedback">
                        Tanggal Lahir tidak boleh kosong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="photo">Foto (*Kosongkan apabila tidak ingin mengubah)</label>
                    <img src="foto/<?=$res['photo']?>" width="100%">
                    <input  name="photo" type="file" class="form-control" id="photo">
                </div>

                <hr class="mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
                <?php }?>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2020 Ramdhan Rizki</p
    </footer>
</div>