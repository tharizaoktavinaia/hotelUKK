<?php include 'header.php'; ?>

<div class="container">
    <form action="send_reservation.php" method="post">
        <div class="col-sm-2 col-md-4">
            <h3></h3>
            <h3>Reservation</h3>
            <div class="form-group">
                <input type="text" class="form-control" name='nik' Placeholder="NIK" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name='nama' placeholder="Nama Lengkap" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name='alamat' placeholder="Alamat Lengkap" required="">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name='no_hp' id="no_hp" placeholder="Nomor Handphone" required="">
            </div>
            <div class="form-group">
                <select name="pilih_ruangan" id="pilih_ruangan" required="" onChange="DateCount()" required="">
                    <option value="Select">Pilih Tipe Kamar</option>
                    <option value="Standard Room">Standard Room - Rp. 250.000 / Night</option>
                    <option value="Deluxe Room">Deluxe Room - Rp. 500.000 / Night</option>
                    <option value="Presidential Room">Presidential Room - Rp. 5.000.000 / Night</option>
                    <option value="Suite Room">Suite Room - Rp. 1.000.000 / Night</option>
                </select>
            </div>
            <h1 style="font-size:1.3vw">Check In</h1>
            <div class="form-group">
                <input type="date" class="form-control" name='check_in' id='check_in' onChange="DateCount()" required="">
            </div>
            <h1 style="font-size:1.3vw">Check Out</h1>
            <div class="form-group">
                <input type="date" class="form-control" name='check_out' id="check_out" onChange="DateCount()" required="">
            </div>
            <div class="form-group">
                <input type="hidden" class="form-control" name='harga' id="harga">
                <input type="text" class="form-control" name='harga_show' id="harga_show" placeholder="Total Harga" disabled>
            </div>
            <button type="submit" name="send_reservation" class="btn btn-default">Pesan</button>
    </form>

</div>
</div>
</div>
<script>
    function DateCount() {
        // Date Counter
        var date1 = document.getElementById("check_in").value;
        var date2 = document.getElementById("check_out").value;

        const checkIn = new Date(date1);
        const checkOut = new Date(date2);

        let dayIn = checkIn.getDate();
        let dayOut = checkOut.getDate();

        var textDay = " Hari";

        var countDay = (dayOut - dayIn);

        // Room Price Counter
        var room_type = document.getElementById("pilih_ruangan").value;

        if (room_type != "Select") {
            if (room_type == "Standard Room") {
                var price = 250000 * countDay;
                if (countDay > 0) {
                    var textFormat = "Rp. " + price + " untuk " + countDay + textDay;
                    document.getElementById("harga").value = textFormat;
                    document.getElementById("harga_show").value = textFormat;
                } else {
                    document.getElementById("harga_show").value = "Anda tidak dapat memesan dibawah 1 hari";
                }
            }
            if (room_type == "Deluxe Room") {
                var price = 500000 * countDay;
                if (countDay > 0) {
                    var textFormat = "Rp. " + price + " untuk " + countDay + textDay;
                    document.getElementById("harga").value = textFormat;
                    document.getElementById("harga_show").value = textFormat;
                } else {
                    document.getElementById("harga_show").value = "Anda tidak dapat memesan dibawah 1 hari";
                }
            }
            if (room_type == "Presidential Room") {
                var price = 5000000 * countDay;
                if (countDay > 0) {
                    var textFormat = "Rp. " + price + " untuk " + countDay + textDay;
                    document.getElementById("harga").value = textFormat;
                    document.getElementById("harga_show").value = textFormat;
                } else {
                    document.getElementById("harga_show").value = "Anda tidak dapat memesan dibawah 1 hari";
                }
            }
            if (room_type == "Suite Room") {
                var price = 1000000 * countDay;
                if (countDay > 0) {
                    var textFormat = "Rp. " + price + " untuk " + countDay + textDay;
                    document.getElementById("harga").value = textFormat;
                    document.getElementById("harga_show").value = textFormat;
                } else {
                    document.getElementById("harga_show").value = "Anda tidak dapat memesan dibawah 1 hari";
                }
            }
        } else {
            document.getElementById("harga").value = "Silahkan pilih tipe room yang anda inginkan!";
        }




    }
</script>
<?php include 'footer.php'; ?>