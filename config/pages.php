<?php
    @$page = $_GET['page'];
    if($page=='home' || !$page) {
        include ("pages/main.php");
    }else if($page=="anggota") {
        include ("pages/view_anggota.php");
    }else if($page=="update_anggota") {
        include ("pages/update_anggota.php");
    }else if($page=="tambah_anggota") {
        include ("pages/tambah_anggota.php");
    }
?>