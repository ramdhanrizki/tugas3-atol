<?php
session_start();

if (!isset($_SESSION['username']))
{
    // echo "<script>alert('Silakan Login Terlebih Dahulu');
    //      window.location.href='login.php'
    // </script>";
    header("location:login.php");
    exit;
}
?>