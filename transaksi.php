<?php include 'header.php' ?>
<div class="container">
    <div class="row">
        <table class="table table-bordered">
            <h3> Detail Pembayaran </h3>
            <div class="col-sm-2 col-md-4">
                <table class="table table-striped">
                    <tbody>
                        <?php
                        require 'db.php';
                        $sql = mysqli_query($connection, "SELECT * FROM pemesanan ORDER BY id DESC LIMIT 1;");
                        while ($data = mysqli_fetch_array($sql)) {
                        ?>
                            <tr>
                                <td>NIK</td>
                                <td><?php echo $data['nik']; ?></td>
                            </tr>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><?php echo $data['nama']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Check In</td>
                                <td><?php echo $data['check_in']; ?></td>
                            </tr>
                            <tr>
                                <td>Tanggal Check Out</td>
                                <td><?php echo $data['check_out']; ?></td>
                            </tr>
                            <tr>
                                <td>Tipe Kamar</td>
                                <td><?php echo $data['tipe']; ?></td>
                            </tr>
                            <tr>
                                <td>Total Harga</td>
                                <td><?php echo $data['harga']; ?></td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
    </div>
    <div>
        <button onClick="window.print();" class="btn btn-default">Cetak Transaksi</button>
    </div>
</div>