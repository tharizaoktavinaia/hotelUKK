<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="card">
    <div class="card-header">
        <h5>Data Kamar</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Penjelasan</th>
                        <th>Tipe Kamar</th>
                        <th>Stok</th>
                        <th>Tarif</th>
                        <th>Gambar</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = mysqli_query($koneksi, "select * from kamar WHERE id_kamar");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td> <?php echo $data['id_kamar']; ?></td>
                            <td> <?php echo $data['penjelasan']; ?></td>
                            <td> <?php echo $data['jenis_kamar']; ?></td>

                            <td> <?php echo $data['stok_kamar']; ?></td>
                            <td> <?php echo $data['tarif']; ?></td>
                            <td> <img src="../images/photos/<?php echo $data['gambar']; ?>" width="100px" height="100px" alt="gambar"> </td>
                            <td>
                                <form action="edit_kamar.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $data['id_kamar']; ?>">
                                    <button type="submit" name="edit_btn" class="btn btn-success"> EDIT</button>
                                </form>
                            </td>
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