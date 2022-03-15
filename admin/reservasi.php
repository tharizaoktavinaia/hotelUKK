<?php include('r_header.php'); ?>
<?php include('navbar.php'); ?>

<div class="card">
    <div class="card-header">
        <h5>Data Reservasi</h5>
    </div>
    <form method="POST" action="cari.php">
        <div class="col-lg-3">
            <div class="col-sm-12">
                <div class="input-group">
                    <input type="text" placeholder="Cari..." name="cari">
                    <div class="input-group-append">
                        <button class="btn btn-primary" name="submit" type="submit" value="cari">
                            <i class="fas fa-search fa-sm"></i>
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </form>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr>
                        <th>NIK</th>
                        <th>Nama Tamu</th>
                        <th>Tipe Kamar</th>
                        <th>Check In</th>
                        <th>Check Out</th>
                        <th>Tarif</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = mysqli_query($koneksi, "select * from pemesanan WHERE id");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td> <?php echo $data['nik']; ?></td>
                            <td> <?php echo $data['nama']; ?></td>

                            <td> <?php echo $data['tipe']; ?></td>
                            <td> <?php echo $data['check_in']; ?></td>
                            <td> <?php echo $data['check_out']; ?></td>
                            <td> <?php echo $data['harga']; ?></td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

</div>







<?php include('footer.php'); ?>