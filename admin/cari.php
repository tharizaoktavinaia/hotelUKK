<?php include('r_header.php'); ?>
<?php include('navbar.php'); ?>


<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
        <tr>
            <th>tipe</th>
            <th>Nama </th>
            <th>check_in</th>
            <th>check_out </th>
            <th>harga</th>
        </tr>
        <?php
        include 'koneksi.php';
        $cari = $_POST['cari'];
        $sql =  mysqli_query($koneksi, "SELECT * FROM pemesanan WHERE nama LIKE '%$cari%'");
        while ($data = mysqli_fetch_array($sql)) {
            echo "<tr>
     <td>" . $data['tipe'] . "</td>
     <td>" . $data['nama'] . "</td>
     <td>" . $data['check_in'] . "</td>
     <td>" . $data['check_out'] . "</td>
     <td>" . $data['harga'] . "</td>
  <tr>";
        }
        ?>



    </table>
    <a href="reservasi.php" class="btn btn-xs btn-warning">back</a>
</div>


</div>
<?php include('footer.php'); ?>