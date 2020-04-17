<?php
    session_start();
    session_destroy('username');
    session_destroy('status');
    header("location:login.php");
    exit;
?>