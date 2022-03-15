<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$id   = $_POST['id'];
$f1 = $_POST['f1'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE fasilitas_hotel SET id = '$id', f1 = '$f1'  WHERE id = '$id'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if ($koneksi->query($query)) {
    //bisa
    header("location: fasilitas.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupdate!";
}
