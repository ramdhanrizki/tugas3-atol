<?php
    require_once "../config/session_check.php";
    require_once "../config/koneksi.php";
    @$aksi = $_GET['aksi'];
    if(!$aksi){
        header("location:index.php");
    }
    switch($aksi) {
        case "tambah" : 
            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $email = $_POST['email'];
            $nohp = $_POST['nohp'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $alamat = $_POST['alamat'];
            $tgl_daftar = date('Y-m-d');
            $foto = $nama_depan."_".$tgl_daftar."_".$_FILES['photo']['name'];
            $fotoUrl = $_FILES['photo']['tmp_name'];
            $dirUpload = "../foto/";
            $upload = move_uploaded_file($fotoUrl, $dirUpload.$foto);

            if ($upload) {
                $result = mysqli_query($mysqli,
                    "INSERT INTO `anggota` (`id_anggota`, `nama`, `email`, `nohp`, `alamat`, `tgl_daftar`,`photo`,`tgl_lahir`) 
                    VALUES (NULL, '$nama_depan $nama_belakang', '$email', '$nohp', '$alamat', '$tgl_daftar','$foto','$tgl_lahir');
                ");
                if ($result) {
                    echo "<script>alert('Data anggota berhasil ditambahkan');window.location.href='../index.php?page=anggota'</script>";
                }else {
                    die(mysqli_error($result));
                }
            } else {
                echo "Upload Gagal!";
            }
        break;

        case "hapus":
            $id = $_GET['id'];

            $data = mysqli_query($mysqli,"SELECT * FROM anggota where id_anggota= $id LIMIT 1" );
            while ($res = mysqli_fetch_assoc($data)) {
                // Delete Foto
                $foto = "../foto/".$res['photo'];
                unlink($foto);

                // Delete data Anggota
                $query = "DELETE FROM `anggota` WHERE id_anggota = $id";
                $result = mysqli_query($mysqli,$query);

                if ($result) {
                    //Jika berhasil
                    header("location:../index.php?page=anggota");
                    exit;
                } else {
                    echo "Error: "  . "<br>" .  mysqli_error($mysqli);
                }
            }
            
        break;

        case "update":
            $id = $_POST['id_anggota'];

            $nama_depan = $_POST['nama_depan'];
            $nama_belakang = $_POST['nama_belakang'];
            $email = $_POST['email'];
            $nohp = $_POST['nohp'];
            $tgl_lahir = $_POST['tgl_lahir'];
            $alamat = $_POST['alamat'];
            $tgl_daftar = date('Y-m-d');
            $photo_lama = $_POST['photo_lama'];

            if($_FILES['photo']['name']!=null) {
                // Delete foto lama
                unlink("../foto/$photo_lama");
                $foto = $nama_depan."_".$tgl_daftar."_".$_FILES['photo']['name'];
                $fotoUrl = $_FILES['photo']['tmp_name'];
                $dirUpload = "../foto/";
                $upload = move_uploaded_file($fotoUrl, $dirUpload.$foto);
                $photo_lama = $foto;
            }
            
            $query = "UPDATE anggota SET 
                nama = '$nama_depan $nama_belakang', 
                alamat = '$alamat', 
                nohp = '$nohp', 
                email = '$email', 
                photo = '$photo_lama',
                tgl_lahir = '$tgl_lahir',
                tgl_daftar = '$tgl_daftar'
                WHERE id_anggota = $id";
            $result = mysqli_query($mysqli,$query);
            if ($result) {
                echo "<script>alert('Data anggota berhasil diubah');window.location.href='../index.php?page=anggota'</script>";
            }else {
                echo "<b>Terjadi Kesalahan : </b>".mysqli_error($mysqli);
                die;
            }
        break;
    }
?>