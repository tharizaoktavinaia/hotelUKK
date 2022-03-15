<?php
session_start();

include('koneksi.php');

if ($koneksi) {
    // Database Connected
} else {
    header("koneksi.php");
}

if (!$_SESSION['username']) {
    header('Location: login.php');
}
