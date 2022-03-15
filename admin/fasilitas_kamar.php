<?php include('header.php'); ?>
<?php include('navbar.php'); ?>

<div class="card">
    <div class="card-header">
        <h5>Data Fasilitas Kamar</h5>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tipe Kamar</th>
                        <th>Fasilitas</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include 'koneksi.php';
                    $sql = mysqli_query($koneksi, "select * from fasilitas_kamar WHERE id");
                    while ($data = mysqli_fetch_array($sql)) {
                    ?>
                        <tr>
                            <td> <?php echo $data['id']; ?></td>
                            <td> <?php echo $data['tipe']; ?></td>
                            <td>
                                <li> <?php echo $data['f1']; ?> </li>
                                <li> <?php echo $data['f2']; ?> </li>
                                <li> <?php echo $data['f3']; ?> </li>
                                <li> <?php echo $data['f4']; ?> </li>
                                <li> <?php echo $data['f5']; ?> </li>
                            </td>
                            <td>
                                <a href="edit_fasilitas_kamar.php?id=<?= $data['id'] ?>" class="btn btn-xs btn-warning">Edit</a>
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




</div>
</div>

<?php include('footer.php'); ?>