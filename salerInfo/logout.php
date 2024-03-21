<?php
    session_start();
    unset($_SESSION['publisher_name']);
    header("Location:../index.php");
?>