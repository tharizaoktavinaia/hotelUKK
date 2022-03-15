<?php
require 'db.php';

if (isset($_POST['send_reservation'])) {

    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $no_hp = $_POST['no_hp'];
    $check_in = $_POST['check_in'];
    $check_out = $_POST['check_out'];
    $harga = $_POST['harga'];
    $type = $_POST['pilih_ruangan'];

    if ($_POST['pilih_ruangan'] == "Standard Room") {
        $id_kamar = "1";
    }
    if ($_POST['pilih_ruangan'] == "Deluxe Room") {
        $id_kamar = "2";
    }
    if ($_POST['pilih_ruangan'] == "Presidential Room") {
        $id_kamar = "3";
    }
    if ($_POST['pilih_ruangan'] == "Suite Room") {
        $id_kamar = "4";
    }

    $query = "INSERT INTO tamu (nik, nama, alamat, no_hp) VALUES ('$nik', '$nama', '$alamat', '$no_hp')";
    $query_run = mysqli_query($connection, $query);

    $query1 = "INSERT INTO pemesanan (id_kamar, nik, nama, tipe, check_in, check_out, harga) VALUES ('$id_kamar', '$nik', '$nama', '$type', '$check_in', '$check_out', '$harga')";
    $query_run1 = mysqli_query($connection, $query1);
    if ($query_run) {
        if ($query_run1) {
?>
            <script type="text/javascript">
                alert("Reservasi Berhasil Dikirim!");
                window.location.href = "transaksi.php";
            </script>
        <?php
        } else {
        ?>
            <script type="text/javascript">
                alert("Data Reservasi Gagal Diverifikasi!");
                window.location.href = "reservasi.php";
            </script>
        <?php
        }
    } else {
        ?>
        <script type="text/javascript">
            alert("Anda Salah memasukan Data!");
            window.location.href = "reservasi.php";
        </script>
<?php
    }
}
?>