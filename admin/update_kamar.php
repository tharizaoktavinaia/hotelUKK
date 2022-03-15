<?php

//include koneksi database
include('koneksi.php');
if (isset($_POST['update_kamar'])) {
    //get data dari form
    $id_kamar   = $_POST['id_kamar'];
    $penjelasan = $_POST['penjelasan'];
    $jenis_kamar  = $_POST['jenis_kamar'];
    $stok_kamar   = $_POST['stok_kamar'];
    $tarif = $_POST['tarif'];

    //query update data ke dalam database berdasarkan ID
    $query = "UPDATE kamar SET penjelasan='$penjelasan', jenis_kamar='$jenis_kamar', stok_kamar='$stok_kamar', tarif='$tarif' WHERE id_kamar='$id_kamar'";

    //kondisi pengecekan apakah data berhasil diupdate atau tidak
    if ($koneksi->query($query)) {
        //bisa
        header("location: kamar.php");
    } else {
        //pesan error gagal update data
        echo "Data Gagal Diupdate!";
        header("location: DEBUG_ERROR_LOCATION.php");
    }
    if (isset($_FILES['gambar'])) {
        $img_name = $_FILES['gambar']['name'];
        $img_size = $_FILES['gambar']['size'];
        $tmp_name = $_FILES['gambar']['tmp_name'];
        $error = $_FILES['gambar']['error'];

        if ($error === 0) {
            if ($img_size > 125000000) {
                $em = "Sorry, your file is too large.";
                header("Location: kamar.php");
            } else {
                $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
                $img_ex_lc = strtolower($img_ex);

                $allowed_exs = array("jpg", "jpeg", "png", "jfif");

                if (in_array($img_ex_lc, $allowed_exs)) {
                    $new_img_name = uniqid("IMG-", true) . '.' . $img_ex_lc;
                    $img_upload_path = '../images/photos/' . $new_img_name;
                    move_uploaded_file($tmp_name, $img_upload_path);

                    // Insert into Database
                    $sql = "UPDATE kamar SET gambar='$new_img_name' WHERE id_kamar='$id_kamar'";
                    mysqli_query($koneksi, $sql);
                    header("Location: kamar.php");
                } else {
                    $em = "You can't upload files of this type";
                    header("Location: kamar.php");
                }
            }
        } else {
            $_SESSION['status'] = "Unknown Error Occured!";
            header("Location: kamar.php");
        }
    }
}
