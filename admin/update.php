<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id   = $_POST['id'];
$tipe = $_POST['tipe'];
$f1   = $_POST['f1'];
$f2   = $_POST['f2'];
$f3  = $_POST['f3'];
$f4   = $_POST['f4'];
$f5   = $_POST['f5'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE fasilitas_kamar SET tipe = '$tipe', f1 = '$f1', f2 = '$f2', f3 = '$f3', f4 = '$f4', f5 = '$f5'  WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($koneksi->query($query)) {
    //bisa
    header("location: fasilitas_kamar.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}

?>