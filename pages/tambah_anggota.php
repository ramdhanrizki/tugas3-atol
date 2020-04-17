<div class="container" style="margin-top:80px; ">
    <div class="text-center">
        <h2>Tambah Anggota</h2>
        <p class="lead">Silakan Isi Form Berikut Untuk Menambahkan Data Anggota</p>
    </div>

    <div class="row justify-content-md-center">
        <div class="col-md-6 order-md-1">
            <form class="needs-validation" method="post" action="actions/anggota.php?aksi=tambah" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="firstName">Nama Depan</label>
                        <input required name="nama_depan" type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Nama depan tidak bioleh kosong
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastName">Nama Belakang</label>
                        <input required name="nama_belakang" type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                        <div class="invalid-feedback">
                            Nama Belakang Tidak Boleh Kosong
                        </div>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email">Email</label>
                    <input required name="email" type="email" class="form-control" id="email" placeholder="you@mahasiswa.unikom.ac.id">
                    <div class="invalid-feedback">
                        Email tidak boleh ksoong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="address">Alamat</label>
                    <input required name="alamat" type="text" class="form-control" id="address" placeholder="Ketikkan alamat anda" required="">
                    <div class="invalid-feedback">
                        Alamat tidak boleh kosong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="nohp">No Handphone</label>
                    <input required name="nohp" type="text" class="form-control" id="nohp" placeholder="Nomor Handphone Anda">
                    <div class="invalid-feedback">
                        No HP tidak boleh kosong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="tlg_lahir">Tanggal Lahir</label>
                    <input required name="tgl_lahir" type="date" class="form-control" id="tlg_lahir">
                    <div class="invalid-feedback">
                        Tanggal Lahir tidak boleh kosong
                    </div>
                </div>

                <div class="mb-3">
                    <label for="photo">Foto</label>
                    <input required name="photo" type="file" class="form-control" id="photo" placeholder="Apartment or suite">
                    <div class="invalid-feedback">
                        Foto tidak boleh kosong
                    </div>
                </div>

                <hr class="mb-4">
                <button class="btn btn-success btn-lg btn-block" type="submit">Submit</button>
            </form>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <p class="mb-1">© 2020 Ramdhan Rizki</p
    </footer>
</div>